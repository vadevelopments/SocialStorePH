<link rel="stylesheet" href="css/app.css">

<nav class="navs">
    <ul class="nav-list-top">
        <img src="{{URL('images/socialstoreph.png')}}"  alt="Social Store PH">
        <li class="nav-item">
            <h1>Social Store PH</h1>
        </li>
        <li class="nav-item">
            <ul class="nav-list">
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                            @else
                                <a href="{{ route('login') }}">Log in</a>
                                @if (Route::has('register'))
                                    <button><a href="{{ route('register') }}">Register</a></button>
                                @endif
                        @endauth
                    @endif
                </li>
            </ul>
        </li>
    </ul>
</nav>










<!-- <nav class="navs">
    <ul class="nav-list-top">
        <img src="{{URL('images/socialstoreph.png')}}"  alt="Social Store PH">
        <li class="nav-item">
            <h1>Social Store PH</h1>
        </li>
        <li class="nav-item">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#">Log in</a>
                </li>
                <li class="nav-item">
                    <button>Sign up</button>
                </li>
            </ul>
        </li>
    </ul>
</nav> -->