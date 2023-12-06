@extends('layouts.client')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}"/>
@endpush

@section('content')
    <div class="container">
        <div class="pricing">
            <div class="pricing__title">
                <h1>Pick Your Plan</h1>
                <p>Simple, transparent pricing No contracts. No surprise fees.</p>
            </div>
            <div class="pricing__content">
                <div class="pricing__row">
                    @foreach ($subscriptions->where('price', '>', 0) as $subscription)
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
                                <a href="{{ route('subscriptions.show', $subscription->id) }}" class="pricing__item__button">Select Plan</a>
                                <div class="pricing__item__payment-gateways">
                                    <img src="{{ asset('images/paypal.svg') }}" alt="Paypal"/>
                                    <img src="{{ asset('images/bitcoin.svg') }}" alt="Bitcoin"/>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
