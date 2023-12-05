<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login() : View
    {
        return view('client.login');
    }

    public function register() : View
    {
        return view('client.register');
    }

    public function loginAction(LoginRequest $request) : RedirectResponse
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'auth' => 'Incorrect email or password'
            ]);
        }
    }

    public function registerAction(RegisterRequest $request) : RedirectResponse
    {
        /** @var User $createdUser */
        $createdUser = User::query()->create([
            'user_name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Auth::login($createdUser, true);
        return redirect()->route('home');
    }

    public function logout() : RedirectResponse
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
