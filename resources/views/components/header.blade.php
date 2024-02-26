@php use Illuminate\Support\Facades\Route; @endphp
<div class="container">
    <div class="header">
        <div class="header__logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="AI Detection">
            </a>
        </div>
        <div class="header__navbar">
            <a href="{{ route('home') }}" class="header__navbar__item @if (Route::is('home')) _active @endif">
                Content Detector
            </a>
            <a href="{{ route('subscriptions') }}" class="header__navbar__item @if (Route::is('subscriptions')) _active @endif">
                Pricing
            </a>
            <a href="{{ route('terms') }}" class="header__navbar__item @if (Route::is('terms')) _active @endif">
                Terms of Service
            </a>
            <a href="{{ route('policy') }}" class="header__navbar__item @if (Route::is('policy')) _active @endif">
                Privacy Policy
            </a>
        </div>
        <div class="header__profile">
            @auth
                @if (Route::is('profile.*'))
                    <a class="_active" href="{{ route('profile.index') }}">Profile <img src="{{ asset('images/profile-active.svg') }}" alt="Profile"/></a>
                @else
                    <a href="{{ route('profile.index') }}">Profile <img src="{{ asset('images/profile.svg') }}" alt="Profile"/></a>
                @endif
            @endauth
            @guest
                <a href="{{ route('login') }}">Log in <img src="{{ asset('images/login.svg') }}" alt="Login"/></a>
            @endguest
        </div>
    </div>
</div>
