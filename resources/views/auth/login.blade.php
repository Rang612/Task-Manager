{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
@extends('layouts.Auth')

@section('content')
<div class="page page-center">
    <div class="container container-normal py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg">
                <div class="container-tight">
                     <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.png" height="200" alt=""></a>
        </div>
                     <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">{{__('Login to your account')}}</h2>
                <form method="POST" action="{{ route('login') }}" autocomplete="off" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">{{ __('Email Address') }}</label>
                        <input name="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label">{{ __('Username') }}</label>--}}
{{--                        <input name="name" type="text" class="form-control mb-0 @error('name') is-invalid @enderror" id="exampleInputUsername1" placeholder="Enter username" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}
{{--                        @error('name')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

                    <div class="mb-2">
                        <label class="form-label">
                            {{ __('Password') }}
                            <span class="form-label-description">
                    <a href="{{ route('password.request') }}">{{__('I forgot password')}}</a>
                  </span>
                        </label>

                        <div class="input-group input-group-flat">
                            <input type="password" name="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password"  required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
{{--                            <span class="input-group-text">--}}
{{--    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip" id="togglePassword">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>--}}
{{--            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />--}}
{{--            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />--}}
{{--        </svg>--}}
{{--    </a>--}}
{{--</span>--}}
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" {{ old('remember') ? 'checked' : '' }}/>
                            <span class="form-check-label">{{__('Remember me on this device')}}</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{__('Sign in')}}</button>
                    </div>
                </form>
            </div>
            <div class="hr-text">{{__('or')}}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col"><a href="{{ route('auth.google') }}" class="btn w-100">
                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-google" width="24" height="24" viewBox="0 0 48 48" fill="none">
                                <path d="M47.54 24.53C47.54 22.85 47.41 21.21 47.16 19.62H24V28.96H37.49C36.84 32.25 35.01 35.05 32.31 36.83L32.31 42.03H40.13C44.57 38.05 47.54 31.92 47.54 24.53Z" fill="#4285F4"/>
                                <path d="M24 48C30.72 48 36.3 45.78 40.13 42.03L32.31 36.83C30.29 38.12 27.79 38.87 24.99 38.87C19.5 38.87 14.9 35.22 13.24 30.22H5.25V35.65C9.06 42.6 16.04 48 24 48Z" fill="#34A853"/>
                                <path d="M13.24 30.22C12.8 28.93 12.53 27.54 12.53 26C12.53 24.46 12.8 23.07 13.24 21.78V16.35H5.25C3.89 19.21 3.11 22.46 3.11 26C3.11 29.54 3.89 32.79 5.25 35.65L13.24 30.22Z" fill="#FBBC05"/>
                                <path d="M24 13.13C27.11 13.13 29.87 14.22 31.92 16.15L40.31 7.76C36.29 3.99 30.72 1.78 24 1.78C16.04 1.78 9.06 7.18 5.25 14.13L13.24 19.56C14.9 14.56 19.5 10.91 24.99 10.91C27.79 10.91 30.29 11.66 32.31 12.95L40.13 7.75C36.3 3.99 30.72 1.78 24 1.78C16.04 1.78 9.06 7.18 5.25 14.13L13.24 19.56C14.9 14.56 19.5 10.91 24.99 10.91C27.79 10.91 30.29 11.66 32.31 12.95L40.13 7.75C36.3 3.99 30.72 1.78 24 1.78C16.04 1.78 9.06 7.18 5.25 14.13L13.24 19.56C14.9 14.56 19.5 10.91 24.99 10.91C27.79 10.91 30.29 11.66 32.31 12.95L40.13 7.75C36.3 3.99 30.72 1.78 24 1.78Z" fill="#EA4335"/>
                            </svg>                            {{__('Login with Google')}}
                        </a></div>
                </div>
            </div>
        </div>
                     <div class="text-center text-muted mt-3">
            {{__('Dont have account yet?')}} <a href="./register" tabindex="-1">{{__('Sign up')}}</a>
        </div>
                </div>
            </div>
            <div class="col-lg d-none d-lg-block">
                <img src="./static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="d-block mx-auto" alt="">
            </div>
        </div>
</div>
@endsection
