@extends('layouts.client')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"/>
@endpush

@section('content')
    <div class="container">
        <div class="auth">
            <h3>Sign up</h3>
            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <div class="auth__form-input">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Enter your username..." id="username" name="username"/>
                </div>
                <div class="auth__form-input">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter your email..." id="email" name="email"/>
                </div>
                <div class="auth__form-input">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your password..." id="password" name="password"/>
                </div>
                <div class="auth__form-input">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" placeholder="Enter your password again..." id="password_confirmation"
                           name="password_confirmation"/>
                </div>
                <div class="auth__form-input">
                    <button type="submit">Create an account</button>
                </div>
                <a href="{{ route('login') }}">Already have an account? Log in</a>
            </form>
        </div>
    </div>
@endsection
