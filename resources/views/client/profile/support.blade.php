@extends('layouts.client')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}"/>
@endpush

@section('content')
    <div class="container">
        <div class="profile">
            <div class="profile__row">
                <div class="profile__col">
                    @include('components.profile.sidebar')
                </div>
                <div class="profile__col">
                    <div class="profile__content">
                        <div class="profile__transactions">
                            @if (auth()->user() && auth()->user()->hasCredits())

                            @else
                                <h1>To use support chat you have to buy a subscription</h1>
                                <p><a href="{{ route('subscriptions') }}">Choose a plan</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
