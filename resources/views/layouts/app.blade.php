<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> <img src="/img/3amigoslogo.png" alt="Three Amigos"></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="CSS/app.css">
</head>
<body class="bg-linen text-storm font-mono flex flex-col justify-center lg:flex-row lg:justify-start lg:bg-local"  >
    <div class=" text-linen lg:h-screen lg:w-1/4 xl:w-1/5">
        <div class="flex flex-col items-center bg-forest p-1 lg:h-screen lg:p-0 ">
            <!-- Authentication Links -->
            <div class="flex w-full mt-1 lg:flex-col ">
                    <div class="w-1/2 pl-1 lg:w-full lg:justify-center lg:text-center lg:mb-3">
                        <a class=" text-base sm:text-lg md:text-xl lg:text-3xl lg:font-extrabold" href="{{ url('/') }}">
                            <img class=" w-4/5  lg:m-auto"src="/img/3amigoslogo.png" alt="Logo">   
                        </a>
                    </div>
                
                    <div class="flex w-1/2 justify-end pr-1 sm:text-lg md:text-xl lg:w-full lg:flex-col lg:pr-0 lg:items-center ">
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

                        <a class='mr-3 lg:mr-0 self-center'href="{{ route('login') }}">
                            <img  class="h-6 lg:h-32 lg:w-32 lg:rounded-full lg:border-solid lg:border-8 lg:border-sky"src="img/male_avatar.svg" alt="Default User Img">
                        </a>
                        
                        <div class="mr-4 lg:mr-0 self-center">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </div>
                        <div class=" lg:invisible self-center">
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
            <div class="flex flex-col items-center w-11/12 text-storm mt-1 sm:flex-row sm:w-full lg:flex-col lg:mt-6 lg:w-full ">
               
               <div class="{{Request::is('home') ? 'current-page' : ''  }} flex justify-center m-1 p-1 bg-sky w-full text-center rounded-sm shadow-xl  lg:w-full lg:flex lg:justify-end lg:px-6 ">
                    <img src="/img/icon-home.svg" alt="home icon" class="bg-transparent rounded-lg lg:pr-2 ">
                    <a class=" pl-2 uppercase lg:p-0  lg:font-semibold lg:text-2xl" href="/home">home</a>
                </div>
                <div class="{{Request::is('create*') ? 'current-page' : ''  }} flex justify-center m-1 p-1 bg-sky w-full text-center rounded-sm shadow-xl  lg:w-full lg:flex lg:justify-end lg:px-6" >
                    <img src="/img/icon-plus-circle.svg" alt="home icon" class="bg-transparent rounded-lg  lg:pr-2">
                    <a class=" pl-2 uppercase lg:p-0  lg:font-semibold lg:text-2xl" href="/create">new project</a>
                </div>
                <div class="{{Request::is('projects') ? 'current-page' : ''  }} flex justify-center m-1 p-1 bg-sky w-full text-center rounded-sm shadow-xl  lg:w-full lg:flex lg:justify-end lg:px-6" >
                    <img src="/img/icon-grid.svg" alt="home icon" class="bg-transparent rounded-lg  lg:pr-2 ">
                    <a class=" pl-2 uppercase lg:font-semibold 
                     lg:text-2xl" href="/projects">work logs</a>
                </div>
            </div>
            <div class="hidden lg:flex lg:justify-center lg:w-full lg:mt-auto lg:mb-2">
                            <a class="lg:w-3/4 lg:text-center lg:text-sm lg:italic " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
            @endguest
        </div>
    </div>
    
     @yield('content')
    
</body>
</html>
