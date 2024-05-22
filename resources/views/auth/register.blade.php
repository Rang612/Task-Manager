{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}


{{--@extends('layouts.Auth')--}}

{{--@section('content')--}}
{{--    <div class="page page-center">--}}
{{--        <div class="container container-tight py-4">--}}
{{--            <div class="text-center mb-4">--}}
{{--                <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.png" height="200" alt=""></a>--}}
{{--            </div>--}}
{{--            <form class="card card-md" action="{{ route('register') }}" method="POST" autocomplete="off" novalidate>--}}
{{--               @csrf--}}
{{--                <div class="card-body">--}}
{{--                    <h2 class="card-title text-center mb-4">{{__('Create new account')}}</h2>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label">{{__('Name')}}</label>--}}
{{--                        <input type="" class="form-control mb-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="exampleInputEmail1" placeholder="Your Full Name">--}}
{{--                        @error('name')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                    <strong>{{ $message }}</strong>--}}
{{--                </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label">{{ __('Email Address') }}</label>--}}
{{--                        <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="exampleInputEmail2" placeholder="Enter email">--}}
{{--                        @error('email')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                    <strong>{{ $message }}</strong>--}}
{{--                </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label">{{__('Password')}}</label>--}}
{{--                        <div class="input-group input-group-flat">--}}
{{--                            <input type="password" class="form-control"  placeholder="Password"  autocomplete="off">--}}
{{--                            <span class="input-group-text">--}}
{{--                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>--}}
{{--                  </a>--}}
{{--                </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label">{{__('Confirm Password')}}</label>--}}
{{--                        <div class="input-group input-group-flat">--}}
{{--                            <input type="password" class="form-control mb-0" id="exampleInputPassword1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">--}}
{{--                            @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                    <strong>{{ $message }}</strong>--}}
{{--                </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-check">--}}
{{--                            <input type="checkbox" class="form-check-input"/>--}}
{{--                            <span class="form-check-label">{{__('Agree the')}} <a href="./terms-of-service.html" tabindex="-1">{{__('terms and policy')}}</a>.</span>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                    <div class="form-footer">--}}
{{--                        <button type="submit" class="btn btn-primary w-100">{{__('Create new account')}}</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <div class="text-center text-muted mt-3">--}}
{{--                {{__('Already have account?')}} <a href="{{ route('login') }}" tabindex="-1">{{__('Sign in')}}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('layouts.Auth')

@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.png" height="200" alt=""></a>
            </div>
            <form class="card card-md" action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{__('Create new account')}}</h2>
                    <div class="mb-3">
                        <label class="form-label">{{__('Name')}}</label>
                        <input type="text" class="form-control mb-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="name" placeholder="Your Full Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Email Address') }}</label>
                        <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="Enter email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__('Password')}}</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__('Confirm Password')}}</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control mb-0" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-check">
{{--                            <input type="checkbox" class="form-check-input" required/>--}}
                            <span class="form-check-label">{{__('By creating an account, you agree to the')}} <a href="./terms-of-service.html" tabindex="-1">{{__('Terms of use and Privacy Policy')}}</a>.</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{__('Create new account')}}</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                {{__('Already have an account?')}} <a href="{{ route('login') }}" tabindex="-1">{{__('Sign in')}}</a>
            </div>
        </div>
    </div>
@endsection
