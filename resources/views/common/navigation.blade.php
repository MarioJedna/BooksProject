<nav>
    <a href="{{ route('homepage') }}">
        @if ($current_menu_item === 'homepage')
            <strong>Home</strong>
        @else
            Home
        @endif
    </a>
    <a href="{{ route('about-us') }}">
        @if ($current_menu_item === 'about-us')
            <strong>About</strong>
        @else
            About
        @endif
    </a>

    @guest
        <a href="{{ route('register') }}">Registration</a>
        <a href="{{ route('login') }}">Log in</a>
    @endguest

    @auth

        logged in as {{ auth()->user()->name }} &nbsp;

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Logout</button>
        </form>
    @endauth
</nav>
