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
<body class=" bg-gray-800 text-gray-800 font-mono flex flex-col justify-center lg:flex-row lg:justify-start ">
    <div class=" text-gray-800 lg:h-screen lg:w-1/4 xl:w-1/5">

        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> -->



        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
            <!-- Left Side Of Navbar -->
            <!-- <ul class="navbar-nav mr-auto">

            </ul> -->

            <!-- Right Side Of Navbar -->
        <div class="flex flex-col items-center bg-yellow-500 p-1 lg:h-screen lg:p-0 ">
            <!-- Authentication Links -->
            <div class="flex w-full mt-1 lg:flex-col ">
                    <div class="w-1/2 pl-1 lg:w-full lg:justify-center lg:text-center lg:mb-3">
                        <a class=" text-base sm:text-lg md:text-xl lg:text-3xl lg:font-extrabold" href="{{ url('/') }}">
                            {{ config('app.name'), 'Smith Construction' }}
                        </a>
                    </div>
                
                    <div class="flex w-1/2 justify-end pr-1 sm:text-lg md:text-xl lg:w-full lg:flex-col lg:items-center ">
                        @guest
                            <div class="mx-6 lg:items-center">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @if (Route::has('register'))
                                <div >
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else

                        <a href="{{ route('login') }}">
                            <img  class="  lg:w-32 lg:rounded-full lg:border-solid lg:border-8 border-gray-900"src="img/icon-user.svg" alt="Default User Img">
                        </a>
                        
                        <div class="mx-6">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </div>
                        <div aria-labelledby="navbarDropdown">
                            <a class="lg:text-sm lg:italic" href="{{ route('logout') }}"
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
            <div class="flex flex-col items-center w-11/12 text-gray-100 mt-1 sm:flex-row sm:w-full lg:flex-col lg:mt-6 lg:w-full ">
               
               <div class="flex justify-center m-1 p-1 bg-gray-800 w-full text-center rounded-sm shadow-xl lg:bg-yellow-500 lg:w-full lg:flex lg:justify-end lg:px-6">
                    <img src="/img/icon-home.svg" alt="home icon" class="bg-gray-100 rounded-lg lg:bg-yellow-500 lg:pr-2 ">
                    <a class=" pl-2 uppercase lg:p-0  lg:text-gray-800 lg:font-semibold lg:text-2xl" href="/home">home</a>
                </div>
                <div class="flex justify-center m-1 p-1 bg-gray-800 w-full text-center rounded-sm shadow-xl lg:bg-yellow-500 lg:w-full lg:flex lg:justify-end lg:px-6" >
                    <img src="/img/icon-plus-circle.svg" alt="home icon" class="bg-gray-100 rounded-lg lg:bg-yellow-500 lg:pr-2">
                    <a class=" pl-2 uppercase lg:p-0 lg:text-gray-800 lg:font-semibold lg:text-2xl" href="/create">new project</a>
                </div>
                <div class="flex justify-center m-1 p-1 bg-gray-800 w-full text-center rounded-sm shadow-xl lg:bg-yellow-500 lg:w-full lg:flex lg:justify-end lg:px-6" >
                    <img src="/img/icon-grid.svg" alt="home icon" class="bg-gray-100 rounded-lg lg:bg-yellow-500 lg:pr-2 ">
                    <a class=" pl-2 uppercase lg:bg-yellow-500 lg:text-gray-800 lg:font-semibold 
                     lg:text-2xl" href="/projects">work logs</a>
                </div>
            </div>

            @endguest
        </div>



    </div>
    
     @yield('content')
    
</body>
</html>
