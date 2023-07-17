
<a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">
    Home
</a>

<h2>{{ Auth::user()->name }}</h2>
<a href="{{ route('profile') }}">Profile</a>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
        Log Out
    </a>
</form>
