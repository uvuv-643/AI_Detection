@extends('layouts.client')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"/>
@endpush

@section('content')
    <div class="container">
        <div class="auth">
            <h3>Sign in</h3>
            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <div class="auth__form-input">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter your email..." id="email" name="email"/>
                </div>
                <div class="auth__form-input">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your password..." id="password" name="password"/>
                </div>
                <div class="auth__form-input">
                    <button type="submit">Login</button>
                </div>
            </form>
            <a href="{{ route('register') }}">Have no account? Register</a>
        </div>
    </div>
@endsection
