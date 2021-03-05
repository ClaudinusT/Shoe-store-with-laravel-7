<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @auth
                    <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img" src="{{asset('/logo.png')}}" width="70px" height="60px" alt="">
                        Just Du It !
                    </a>
                @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img" src="{{asset('/logo.png')}}" width="70px" height="60px" alt="">
                        Just Du It !
                    </a>
                @endauth
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="searchbar"></div>
                            <form action="{{ url('/search') }}" class="form-inline my-2 my-lg-0 ml-auto">
                                <input type="text" class="form-control typeahead" name="search" placeholder="Search">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hello, {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<style>
        nav{
            position: fixed;
        }

        .sidenav {
        height: 100%; /* Full-height: remove this if you want "auto" height */
        width: 250px; /* Set the width of the sidebar */
        position: fixed; /* Fixed Sidebar (stay in place on scroll) */
        z-index: 1; /* Stay on top */
        top: 0; /*Stay at the top*/
        left: 0;
        background-color: #111; /* Black */
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 20px;
        margin-top: 86px;
        }

        /* The navigation menu links */
        .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
        color: #f1f1f1;
        }

        /* Style page content */
        .main {
        margin-left: 160px; /* Same as the width of the sidebar */
        padding: 0px 10px;
        }
        
        .navbar-brand{
            font-size: 23px;
        }

        .nav-link{
            font-size: 23px;
        }

        .card-header{
            background-color: #368BC1;
            text-align: center;
            font-size: 20px;
        }

        .detEmail{
            display: block;
            margin-left: auto;
            margin-right: auto;;
        }

        .col-sm{
            padding-bottom: 20px;
        }

        .pagination{
            justify-content: center;
            margin-left: 250px;
        }

        .text{
            font-size: 15px;
        }

        .searchbar{
            margin-left: 250px;
        }   

        .imgTrans{
            height: 130px; 
            width: 160px;
        }

        .trans{
            margin-left: 40px;
            margin-bottom: 20px;
            text-align: center;
        }
</style>
</html>
