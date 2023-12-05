<?php

namespace App\Http\Controllers;

use App\Exceptions\DetectException;
use App\Http\Requests\DetectRequest;
use App\Services\DetectionService;
use Illuminate\Http\JsonResponse;

class DetectController extends Controller
{

    public function detect(DetectRequest $request, DetectionService $service) : JsonResponse
    {
        try {
            $detection = $service->makeDetection($request->text, $request->ip());
        } catch (DetectException $exception) {
            return back()->withErrors('')
        }
    }

}
