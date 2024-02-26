<?php

namespace App\Http\Controllers;

use App\Exceptions\DetectException;
use App\Http\Requests\DetectRequest;
use App\Services\DetectionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class DetectController extends Controller
{

    public function detect(DetectRequest $request, DetectionService $service): RedirectResponse
    {
        try {
            $detection = $service->makeDetection($request->text, $request->ip());
            return back()->with([
                'percent' => $detection->response * 100,
                'short_text' => $detection->short_text . '...'
            ]);
        } catch (DetectException $exception) {
            return back()->withErrors(['error' => 'We cannot proceed your text, please contact us in your profile']);
        }
    }

}
