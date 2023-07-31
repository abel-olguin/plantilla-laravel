@extends('layouts.auth')

@section('content')
    <div class="container py-4 mx-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="rounded border border-gray-400 p-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3 flex flex-col">
                        <label for="email"
                               class="pb-3 block">{{ __('Email Address') }}</label>

                        <input id="email" type="email"
                               class="outline-0 border border-gray-400 px-3 py-2 rounded bg-gray-900 @error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="mb-3 flex flex-col">
                        <label for="password"
                               class="pb-3 block">{{ __('Password') }}</label>

                        <input id="password" type="password"
                               class="outline-0 border border-gray-400 px-3 py-2 rounded bg-gray-900 @error('password') is-invalid @enderror"
                               name="password"
                               required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="row flex flex-col space-y-3">
                        <button type="submit"
                                class="rounded bg-gradient-to-r from-cyan-500 to-blue-500 px-3 py-2 w-full">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="block" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
