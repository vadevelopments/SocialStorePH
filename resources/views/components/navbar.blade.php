<link rel="stylesheet" href="css/app.css">

<!-- <nav class="navs">
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
</nav> -->

<nav class="navs">
    @if (Route::has('login'))
        @auth
            <ul class="nav-list-top">
                <img src="{{URL('images/socialstoreph.png')}}"  alt="Social Store PH">
                <li class="nav-item li-1"><h1 class="vertical-line"> Social&nbspStore&nbspPH </h1></li>
                <li class="nav-item li-2">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#Marketplace"> Marketplace </a></li>
                        <li class="nav-item"><a href="#Community"> Community </a></li>
                        <li class="nav-item"><a href="#Profile"> Profile </a></li>
                    </ul>
                </li>
                <li class="nav-item li-last">
                    <!-- <ul class="nav-list"> -->
                        <!-- <li class="nav-item"> -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        <!-- </li> -->
                    <!-- </ul> -->
                </li>
            </ul>
            @else
                <ul class="nav-list-top">
                    <img src="{{URL('images/socialstoreph.png')}}"  alt="Social Store PH">
                    <li class="nav-item li-1"><h1> Social&nbspStore&nbspPH</h1></li>
                    <li class="nav-item li-last p1">
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <button><a href="{{ route('register') }}">Register</a></button>
                        @endif
                    </li>
                </ul>
        @endauth
    @endif
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