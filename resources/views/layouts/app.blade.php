<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Smith_Construction') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class=" bg-gray-800 text-gray-800 font-mono flex flex-col justify-center ">
    <div class=" text-gray-800">
        <nav>
            <div>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->



                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                <div class="flex flex-col items-center bg-yellow-500 p-1">
                    <!-- Authentication Links -->
                    <div class="flex w-full mt-1">
                            <div class="w-1/2 pl-1">
                                <a class=" text-base sm:text-lg md:text-xl" href="{{ url('/') }}">
                                    {{ config('app.name'), 'Smith Construction' }}
                                </a>
                            </div>
                            <div class="flex w-1/2 justify-end pr-1 sm:text-lg md:text-xl ">
                                @guest
                                    <div class="mx-6">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </div>
                                    @if (Route::has('register'))
                                        <div >
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </div>
                                    @endif
                                @else
                            

                        
                                <div class="mx-6">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                    </div>
                    <div class="flex flex-col items-center w-11/12 text-gray-100 mt-1 sm:flex-row sm:w-full">
                        <a class="m-1 p-1 bg-gray-800 w-full text-center rounded-sm shadow-xl" href="/home">home</a>
                        <a class="m-1 p-1 bg-gray-800 w-full text-center rounded-sm shadow-xl" href="/create">new project</a>
                        <a class="m-1 p-1 bg-gray-800 w-full text-center rounded-sm shadow-xl" href="/projects">work logs</a>
                    </div>

                    @endguest
                </div>
            </div>
        </nav>


    </div>
    <div >
            @yield('content')
    </div>
</body>
</html>
