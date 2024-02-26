@extends('layouts.client')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}"/>
@endpush

@section('content')
    <div class="container">
        <div class="pricing">
            <div class="pricing__title">
                <h1>{{ $subscription->title }}</h1>
                <p>Simple, transparent pricing No contracts. No surprise fees.</p>
            </div>
            <div class="pricing__content">
                <div class="pricing__row">
                    <div class="pricing__item__wrapper">
                        <div class="pricing__item">
                            <div class="pricing__item__title">
                                <h3>{{ $subscription->title }} @if ($subscription->is_most_popular) <span>most popular</span> @endif</h3>
                                <div class="pricing__item__title__price">
                                    @if (count($subscription->discount))
                                        ${{ $subscription->discount[0]->new_price }}
                                    @else
                                        ${{ $subscription->price }}
                                    @endif
                                    <span>/month</span>
                                </div>
                            </div>
                            <div class="pricing__item__features">
                                <h4>Features</h4>
                                <ul>
                                    @foreach (collect($subscription->advantages)->slice(0, 3) as $advantage)
                                        <li>{{ str_replace('image ', '', $advantage->title) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing__item__payment-gateways">
                                <img src="{{ asset('images/paypal.svg') }}" alt="Paypal"/>
                                <img src="{{ asset('images/bitcoin.svg') }}" alt="Bitcoin"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing__buttons">
                <a target="_blank" href="{{ route('payment.melstore', $subscription->id) }}">Melstore</a>
                <a target="_blank" href="{{ route('payment.stripe', $subscription->id) }}">Stripe</a>
            </div>
            <h4 style="margin-top: 15px; text-align: center; font-weight: 400; ">Be sure to enter the same email as your account has!</h4>
        </div>
    </div>
@endsection
