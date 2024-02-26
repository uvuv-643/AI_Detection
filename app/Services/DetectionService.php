<?php

namespace App\Services;

use App\Exceptions\DetectException;
use App\Models\APIToken;
use App\Models\Detection;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DetectionService
{

    const CREDITS_BY_PHOTO = 3;

    /**
     * @throws DetectException
     */
    public function makeDetection(string $text, string $ip): Detection
    {
        /** @var User $user */
        $user = auth()->user();
        $apiUrl = config('api.detection.url');
        $apiToken = APIToken::query()->orderByDesc('created_at')->first()->token ?? null;
        $detectionId = Str::uuid();
        $apiFullPath = "$apiUrl/$detectionId/check";
        if ($user) {
            $subscription = Subscription::query()->where('user_id', $user->id)->where('credits_left', '>=', self::CREDITS_BY_PHOTO)->first();
            $subscription->update([
                'credits_left' => $subscription->credits_left - self::CREDITS_BY_PHOTO
            ]);
        }
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
            if ($user) {
                $subscription = Subscription::query()->where('user_id', $user->id)->first();
                $subscription->update([
                    'credits_left' => $subscription->credits_left + self::CREDITS_BY_PHOTO
                ]);
            }
            throw new DetectException($response);
        }
    }

}
