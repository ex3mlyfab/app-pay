@extends('layouts.AuthLayout')
@section('title')
    Login
@endsection

@section('content')
    <!-- Start Main Content -->
    <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center max-w-[1440px] mx-auto">
        <div
            class="max-w-[550px] flex-none w-full bg-white border border-black/10 p-6 sm:p-10 lg:px-10 lg:py-14 rounded-2xl loginform dark:bg-darklight dark:border-darkborder">
            <h1 class="mb-2 text-2xl font-semibold text-center dark:text-white">Sign In</h1>
            <p class="text-center text-muted mb-7 dark:text-darkmuted">Enter your email and password to sign in!</p>
           

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="space-y-4" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <x-text-input id="email" type="email" name="email" :value="old('email', 'admin@srbthemes.com')" required autofocus placeholder="Enter your registered email"
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <x-text-input id="password" type="password" name="password" placeholder="Enter your password" required value="12345678" autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                @if (Route::has('password.request'))
                    <div class="ltr:text-right rtl:text-left">
                        <a href="{{ route('password.request') }}" class="text-black dark:text-white">Forgot Password?</a>
                    </div>
                @endif
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <button type="submit"
                    class="btn w-full py-3.5 text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                    Sign In
                </button>
            </form>
            <p class="mt-5 text-center text-muted dark:text-darkmuted">Not a Member yet? <a href="{{ route('register') }}"
                    class="text-black dark:text-white">Create an Account</a></p>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
