@extends('layouts.loginlayout')

@section('content')
<div class="w-screen h-screen self-center flex flex-col justify-center items-center text-gray-200">
    <div class="items-start mb-12  ">
        <a class="object-center" href="{{ url('/') }}">
            <img class=" w-4/5  m-auto"src="/img/3amigoslogo.png" alt="Logo">
        </a>
    </div>
    <div class="flex flex-col items-center w-9/12 sm:w-3/5 lg:w-2/5">
        <div class="w-full"> 
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">

                    <div class="mb-3">
                        <input id="name" type="text" class="w-full bg-transparent border-b-2 border-white rounded-sm shadow-md  placeholder-white @error('name') is-invalid @enderror"  placeholder='Name' name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">

                    <div class="mb-3">
                        <input id="email" type="email" class="w-full bg-transparent border-b-2 border-white rounded-sm shadow-md  placeholder-white @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
<!-- Pick up refactiroing/styling here -->
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

            



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
