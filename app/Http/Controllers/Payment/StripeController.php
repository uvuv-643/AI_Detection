<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Services\Webhooks\MelstoreWebhookService;
use App\Services\Webhooks\StripeWebhookService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StripeController extends Controller
{

    public function webhook(StripeWebhookService $service, Request $request) : JsonResponse {
        return $service->webhook($request);
    }

}
