@extends('layouts.loginlayout')

@section('content')


<div class="w-screen h-screen self-center flex flex-col justify-center items-center text-gray-200">
    <div class="items-start mb-12  ">
        <a class="object-center" href="{{ url('/') }}">
            <img class=" w-4/5  m-auto"src="/img/3amigoslogo.png" alt="Logo">
        </a>
    </div>

    <div class="w-3/6 flex justify-between mb-3 text-center rounded bg-linen text-storm opacity-50 sm: 2/6 lg:w-1/5 ">
        <a href="/login" class="{{Request::is('login') ? 'login-toggol' : ''  }} {{Request::is('/') ? 'login-toggol' : ''  }}  flex-1 self-center mr-1">Login</a>
        <a href="/register" class="{{Request::is('register') ? 'login-toggol' : ''  }} flex-1 self-center mr-1 ">Register</a>
    </div>


    <div class="flex flex-col items-center w-9/12 sm:w-3/5 lg:w-2/5">
        <div class="w-full">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">

                    <div class="mb-3">
                        <input id="email" type="email"  placeholder="Email" class="w-full bg-transparent border-b-2 border-white rounded-sm shadow-md  placeholder-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                
                    <div class="col-md-6">
                        <input id="password" type="password" placeholder="Password" class="w-full bg-transparent border-b-2  border-white rounded-sm placeholder-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <!-- <div class="">
                    <div class="">
                        <div class="">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> -->

                <div class="w-full">
                    <div class="flex flex-col items-center w-full">
                        <button type="submit" class="w-full rounded bg-gray-200 text-gray-900 shadow-md">
                            {{ __('Login') }}
                        </button>
                        <!-- <div class="">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div> -->
                        @if (Route::has('password.request'))
                            <a class=" text-xs italic mt-2" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>    
    </div>

</div>
@endsection
