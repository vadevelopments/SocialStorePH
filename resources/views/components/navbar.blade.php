<link rel="stylesheet" href="css/app.css">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

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
                <li class="nav-item li-last p1">
                    <ul class="nav-list">
                        <li class="nav-item nav-icon">
                            <a href="#messages"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item nav-icon">
                            <a href="#notifications"><i class="fa fa-bell"></i></a>
                        </li>
                        <li class="nav-item">
                            <div class="searchContainer">
                                <input class="nav-search nav-item li-last" type="text" placeholder="Search" name="search">
                                <i class="fa fa-search searchIcon"></i>
                            </div>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                </li> 
            </ul>
            @else
                <ul class="nav-list-top">
                    <img src="{{URL('images/socialstoreph.png')}}"  alt="Social Store PH">
                    <li class="nav-item li-1"><h1> Social&nbspStore&nbspPH</h1></li>
                    <li class="nav-item li-last">
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <button><a href="{{ route('register') }}">Register</a></button>
                        @endif
                    </li>
                </ul>
        @endauth
    @endif
</nav>