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
                                <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
                            @else
                                <a href="{{ route('login') }}">Log in</a>
                                @if (Route::has('register'))
                                    <button><a href="{{ route('register') }}">Register</a></button>
                                @endif
                        @endauth
                    @endif
                    <!-- <a href="#">Log in</a> -->
                </li>
                <!-- <li class="nav-item">
                    <button>Sign up</button>
                </li> -->
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