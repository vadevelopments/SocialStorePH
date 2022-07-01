<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social Store PH</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <div> <x-Navbar/> </div>
        <div>
            <h1>Promote your Business and Community with Others</h1>
            <h3>Promote your Business and Community with Others</h3>
        </div>
        <div>
            @if (Route::has('login'))
                @auth
                    @csrf
                    <button><a href="#">Community loged in</a></button>
                    <button><a href="#">Marketplace loged in</a></button>
                    @else
                        <button><a href="{{ route('login') }}">Community Log in first</a></button>
                        @if (Route::has('register'))
                            <button><a href="{{ route('register') }}">Marketplace Register first</a></button>
                        @endif
                @endauth
            @endif
        </div>
        <div> <x-Footer/> </div>
    </body>
</html>
