@extends('layouts.loginlayout')

@section('content')


<div class="w-screen h-screen self-center flex flex-col justify-center items-center text-gray-200">
    <div class="items-start mb-8  ">
        <a class="text-4xl uppercase " href="{{ url('/') }}">
            <img src="/img/Three_Amigos_Logo.png" alt="Logo">
        </a>
    </div>

    <div class="flex flex-col items-center w-11/12">
        <div class="w-full">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">

                    <div class="mb-3">
                        <input id="email" type="email"  placeholder="Email" class="w-full bg-transparent border-solid border-2 border-white rounded-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">


                    <div class="col-md-6">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <button type="submit" class="">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
