<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Services\ApiService;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{

    public function index() : View
    {
        return view('client.index');
    }

    public function subscriptions(ApiService $service) : View
    {
        $subscriptions = $service->fetchMemberships();
        return view('client.subscriptions', compact('subscriptions'));
    }

    public function subscriptionBuy(ApiService $service, string $id) : View
    {
        $subscriptions = $service->fetchMemberships();
        $subscription = $subscriptions->where('id', $id)->first();
        return view('client.payment.client', compact('subscription'));
    }

}
