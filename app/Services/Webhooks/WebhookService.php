<?php

namespace App\Services\Webhooks;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebhookService
{

    public function webhook(Request $request) : JsonResponse
    {
        try {
            $melstoreId = $request->product_id;
            $email = $request->customer_email;
            $promocode = collect($request->additional_fields)->first();
            $response = Http::post('https://makenude.ai/webhook/aidet', [
                'melstore_id' => $melstoreId,
                'email' => $email,
                'promocode' => $promocode
            ]);
            return response()->json(['success' => true]);
        } catch (Exception) {
            return response()->json(['success' => false], 400);
        }
    }

}