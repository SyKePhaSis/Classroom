<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        * {
            font-family: 'Architects Daughter', cursive;
        }

        ::-webkit-scrollbar{
            background-color: black;
            width: 0.5vw;
        }

        ::-webkit-scrollbar-thumb {
            background: white;
            border-radius: 30px;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus{
            -webkit-text-fill-color: white;
            transition: background-color 5000s ease-in-out 0s;
        }

    </style>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm text-white" style="background-color: black">
            <div class="nav-con container" style="margin: 0 2vw 0 2vw; max-width: 96vw;">
                <a class="navbar-brand" style="font-size: 3vh; color: white;" href="{{ url('/') }}">
                    Classroom
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: white ; font-size: 2vh;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white; font-size: 2vh;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown d-flex">
                                <a class="nav-link pr-4" style="font-size: 2vh; color: white;" href="{{ route('profile.show', ['user' => auth()->user()]) }}">
                                    Profile
                                </a>

                                <a class="nav-link pr-4" style="font-size: 2vh; color: white;" href="#">
                                    Schedule
                                </a>

                                <a class="nav-link pr-4" style="font-size: 2vh; color: white;" href="#">
                                    Classes
                                </a>

                                <a class="nav-link" style="font-size: 2vh; color: white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">



                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
