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
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="profile__personal">

                                @if ($errors->any())
                                    <div class="alert alert-danger mb-3">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <h2>Personal Details</h2>
                                <div class="profile__personal__row">
                                    <div class="profile__personal__input-group">
                                        <label for="first_name">First Name</label>
                                        <input value="{{ old('first_name', auth()->user()->first_name) }}" type="text" name="first_name" id="first_name"
                                               placeholder="Enter your first name..."/>
                                    </div>
                                    <div class="profile__personal__input-group">
                                        <label for="last_name">Last Name</label>
                                        <input value="{{ old('last_name', auth()->user()->last_name) }}" type="text" name="last_name" id="last_name"
                                               placeholder="Enter your last name..."/>
                                    </div>
                                    <div class="profile__personal__input-group">
                                        <label for="birth_date">Date of Birth</label>
                                        <input dataformatas="dd.mm.YYYY" value="{{ old('birth_date', auth()->user()->birth_date) }}" type="date" name="birth_date" id="birth_date"
                                               placeholder="Enter your birth date..."/>
                                    </div>
                                    <div class="profile__personal__input-group">
                                        <label for="gender">Gender</label>
                                        <input value="{{ old('gender', auth()->user()->gender) }}" type="text" name="gender" id="gender"
                                               placeholder="Enter your gender..."/>
                                    </div>
                                    <div class="profile__personal__input-group">
                                        <label for="email">Email for Login</label>
                                        <input value="{{ old('email', auth()->user()->email) }}" type="email" name="email" id="email" placeholder="Enter your email..."/>
                                    </div>
                                    <div class="profile__personal__input-group">
                                        <label for="phone">Phone for Login</label>
                                        <input value="{{ old('phone', auth()->user()->phone) }}" type="text" name="phone" id="phone" placeholder="Enter your phone..."/>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__personal">
                                <h2>Security</h2>
                                <div class="profile__personal__row">
                                    <div class="profile__personal__input-group">
                                        <label for="password">New Password</label>
                                        <input type="password" name="password" id="password"
                                               placeholder="Enter your new password..."/>
                                    </div>
                                    <div class="profile__personal__input-group">
                                        <label for="password_confirmation">Last Name</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                               placeholder="Re-Enter your new password..."/>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__save">
                                <div class="profile__personal__input-group">
                                    <button type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
