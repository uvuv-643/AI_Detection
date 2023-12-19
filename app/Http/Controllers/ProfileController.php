<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{

    public function index() : View
    {
        return view('client.profile.index');
    }

    public function transactions() : View | RedirectResponse
    {
        $transactions = Subscription::all();
        $membershipsResponse = Http::get(config('api.memberships'));
        if ($membershipsResponse->status() === 200) {
            $memberships = json_decode($membershipsResponse->body(), false);
            $transactions->map(function (Subscription $transaction) use ($memberships) {
                foreach ($memberships as $membership) {
                    if ($membership->id == $transaction->membership_id) {
                        $transaction->membership = $membership;
                        return $transaction;
                    }
                }
                return null;
            })->filter(function ($transaction) {
                return $transaction;
            });
            return view('client.profile.transactions', compact('transactions'));
        }
        return back();

    }

    public function support() : View
    {
        return view('client.profile.support');
    }

    public function update(UserUpdateRequest $request) : RedirectResponse
    {
        /** @var User $user */
        $user = auth()->user();
        $user->update(
            collect($request->only($user->getFillable()))
            ->except('password')->toArray()
        );
        if ($request->password) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }
        return back();
    }

}
