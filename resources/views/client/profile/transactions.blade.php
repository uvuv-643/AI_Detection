@php use Carbon\Carbon; @endphp
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
                            @if ($transactions->count())
                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            Item Description
                                        </th>
                                        <th>
                                            Last Charge
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->membership->title }}</td>
                                            <td>{{ Carbon::parse($transaction->created_at)->format('d M, Y ') }}</td>
                                            <td>{{ $transaction->credits_left }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h1>You have no transactions</h1>
                                <p><a href="{{ route('subscriptions') }}">Buy a subscription</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
