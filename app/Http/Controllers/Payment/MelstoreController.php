<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Services\Webhooks\MelstoreWebhookService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MelstoreController extends Controller
{

    public function webhook(MelstoreWebhookService $service, Request $request) : JsonResponse {
        return $service->webhook($request);
    }

}
