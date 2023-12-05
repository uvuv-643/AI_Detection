<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index() : View
    {
        return view('client.profile.index');
    }

    public function transactions() : View
    {
        $transactions = Subscription::all();
        return view('client.profile.transactions', compact('transactions'));
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
