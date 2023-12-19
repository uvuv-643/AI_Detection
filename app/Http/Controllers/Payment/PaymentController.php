<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{

    public function melstore(string $id) : RedirectResponse
    {
        if (!auth()->user()) return redirect()->route('login');
        try {
            $response = Http::get(config('api.memberships') . '/' . $id);
            if ($response->status() === 200) {
                $responseBody = json_decode($response->body(), false);
                if ($melstoreId = $responseBody->melstore_id) {
                    return redirect('https://mel.store/aidet/' . $melstoreId);
                }
            }
        } catch (Exception) {}
        return redirect()->back()->withErrors('Failed to access payment service');
    }

}
