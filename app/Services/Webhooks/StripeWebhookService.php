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
                $paymentData = $request->data->object;
                if ($paymentData->status === "complete") {
                    $promocode = null;
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
                    $promocodeField = collect($request->additional_fields)->first();
                    if ($promocodeField) {
                        $promocode = $promocodeField['value'];
                    }
                    $stripe = new StripeClient('sk_test_BQokikJOvBiI2HlWgH4olfQ2');
                    $customer = $stripe->paymentLinks->retrieve($paymentData->payment_link);
                    $paymentLink = $stripe->paymentLinks->retrieve('plink_1MoC3ULkdIwHu7ixZjtGpVl2', []);
                    return response()->json([
                        'url' => $paymentLink->url,
                        'email' => $email,
                        'promocode' => $promocode
                    ]);
                }
            }
            return response()->json(['success' => true]);
        } catch (Exception) {
            return response()->json(['success' => false], 400);
        }
    }

}