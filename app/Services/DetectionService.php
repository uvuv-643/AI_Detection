<?php

namespace App\Services;

use App\Exceptions\DetectException;
use App\Models\Detection;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DetectionService
{

    /**
     * @throws DetectException
     */
    public function makeDetection(string $text, string $ip): Detection
    {
        /** @var User $user */
        $user = auth()->user();
        $apiUrl = config('api.detection.url');
        $apiToken = config('api.detection.token');
        $detectionId = Str::uuid();
        $apiFullPath = "$apiUrl/$detectionId/check";
        $response = Http::withToken($apiToken)->post($apiFullPath, [
            'text' => $text,
            'sandbox' => false,
        ]);
        if ($response->status() === 200) {
            $responseData = json_decode($response->body(), false);
            /** @var Detection $detection */
            $detection = Detection::query()->create([
                'short_text' => Str::substr($text, 0, 64),
                'user_id' => $user?->id,
                'ip' => $ip,
                'response' => $responseData->summary->human
            ]);
            return $detection;
        } else {
            throw new DetectException($response);
        }
    }

}
