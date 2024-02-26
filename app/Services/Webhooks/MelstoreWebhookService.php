<?php

namespace App\Services\Webhooks;

use App\Models\Subscription;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MelstoreWebhookService extends WebhookService
{

    public function webhook(Request $request) : JsonResponse
    {
        try {
            $melstoreId = $request->product_id;
            $email = $request->customer_email;
            $promocodeField = collect($request->additional_fields)->first();
            if ($promocodeField) {
                $promocode = $promocodeField['value'];
            }
            $response = Http::post(config('api.webhook'), [
                'melstore_id' => $melstoreId,
                'email' => $email,
                'promocode' => $promocode ?? null
            ]);
            if ($response->status() === 200) {
                $responseData = json_decode($response->body(), false);
                /** @var User $targetUser */
                $targetUser = User::query()->where('email', $email)->first();
                if ($targetUser) {
                    Subscription::query()->create([
                        'user_id' => $targetUser->id,
                        'credits_left' => $responseData->credits_left,
                        'membership_id' => $responseData->membership_id
                    ]);
                }
            }

            return response()->json(['success' => true]);
        } catch (Exception) {
            return response()->json(['success' => false], 400);
        }
    }

}