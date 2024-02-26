@php use Illuminate\Support\Facades\Route; @endphp
<div class="profile__sidebar">
    <h3><a href="{{ route('profile.index') }}">{{ auth()->user()->user_name }}</a></h3>
    <a href="{{ route('profile.transactions') }}"
       class="profile__sidebar__item @if (Route::is('profile.transactions')) _active @endif">
        <div class="profile__sidebar__item__icon">
            <img src="{{ asset('images/transactions.svg') }}" alt="Transactions"/>
            <img src="{{ asset('images/transactions-active.svg') }}" alt="Transactions"/>
        </div>
        Transactions
    </a>
    <a href="{{ route('profile.support') }}" class="profile__sidebar__item @if (Route::is('profile.support')) _active @endif">
        <div class="profile__sidebar__item__icon">
            <img src="{{ asset('images/support.svg') }}" alt="Support"/>
            <img src="{{ asset('images/support-active.svg') }}" alt="Support"/>
        </div>
        Chat Support
    </a>
    <form action="{{ route('logout') }}" class="profile__sidebar__item" method="POST">
        @csrf
        <button type="submit">
            <div class="profile__sidebar__item__icon">
                <img src="{{ asset('images/logout.svg') }}" alt="Logout"/>
            </div>
            Log out
        </button>
    </form>
</div>
