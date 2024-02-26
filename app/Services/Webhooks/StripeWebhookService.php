<?php

namespace App\Services\Webhooks;

use App\Models\Subscription;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Stripe\StripeClient;

class StripeWebhookService extends WebhookService
{

    public function webhook(Request $request) : JsonResponse
    {
        try {
            if ($request->type == "checkout.session.completed") {
                $requestData = json_decode(json_encode($request->data), false);
                $paymentData = $requestData->object;
                if ($paymentData->status === "complete") {
                    try {
                        $customFields = $paymentData->custom_fields;
                        foreach ($customFields as $field) {
                            if ($field->key === "promocode") {
                                $promocode = $field->text->value;
                            }
                        };
                    } catch (Exception $e) {
                        Log::error("Cannot fetch promocode stripe", ['stacktrace' => $e->getTrace()]);
                    }
                    $email = $paymentData->customer_details->email;
                    $stripe = new StripeClient(config('stripe.secret'));
                    $paymentLink = $stripe->paymentLinks->retrieve($paymentData->payment_link, []);
                    Http::post(config('api.webhook'), [
                        'stripe_link' => $paymentLink->url,
                        'email' => $email,
                        'promocode' => $promocode ?? null
                    ]);
                }
            }
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            Log::error("Global exception", ['stacktrace' => $e->getTrace(), 'request_all' => $request->all()]);
            return response()->json(['success' => false], 400);
        }
    }

}
