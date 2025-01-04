@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="flex justify-center bg-gray-100 lg:py-11 py-7">
    <div class="rounded-2xl bg-white shadow-xl">
        <form method="POST" action="" class="lg:p-11 p-7 mx-auto">


            <div class="mb-11">
                <h1 class="text-gray-900 text-center font-manrope text-3xl font-bold leading-10 mb-2">Welcome Back</h1>
                <p class="text-gray-500 text-center text-base font-medium leading-6">Let's get started with your 30 days
                    free trial</p>
            </div>


            <div class="mb-6">
                <input type="email" name="email"
                    class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 px-4 "
                    placeholder="Email" value="" required="" autocomplete="email">

                <span class="text-red-500 text-sm mt-1"></span>

            </div>


            <div class="mb-1">
                <input type="password" name="password"
                    class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 px-4 "
                    placeholder="Password" required="" autocomplete="current-password">

                <span class="text-red-500 text-sm mt-1"></span>

            </div>


            <div class="flex justify-end mb-6">
                <a href="" class="text-indigo-600 text-right text-base font-normal leading-6 hover:text-indigo-800">
                    Forgot Password?
                </a>
            </div>


            <button type="submit"
                class="w-full h-12 text-white text-center text-base font-semibold leading-6 rounded-full hover:bg-indigo-800 transition-all duration-700 bg-indigo-600 shadow-sm mb-11">
                Login
            </button>


            <div class="flex justify-center text-gray-900 text-base font-medium leading-6">
                Don't have an account?
                <a href="" class="text-indigo-600 font-semibold pl-3 hover:text-indigo-800">
                    Sign Up
                </a>
            </div>
        </form>
    </div>
</section>
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="flex justify-center">
        <img src="https://pagedone.io/asset/uploads/1702362010.png" alt="gradient background image" class="w-full h-full object-cover fixed">
        <div class="mx-auto max-w-lg px-6 lg:px-8 absolute py-20">
            <img src="https://pagedone.io/asset/uploads/1702362108.png" alt="pagedone logo" class="mx-auto lg:mb-11 mb-8 object-cover">
            <div class="rounded-2xl bg-white shadow-xl">
                {{-- Add proper form action and method --}}
                <form method="POST" action="{{ route('login') }}" class="lg:p-11 p-7 mx-auto">
                    @csrf {{-- Add CSRF token for security --}}
                    
                    <div class="mb-11">
                        <h1 class="text-gray-900 text-center font-manrope text-3xl font-bold leading-10 mb-2">Welcome Back</h1>
                        <p class="text-gray-500 text-center text-base font-medium leading-6">Let's get started with your 30 days free trial</p>
                    </div>

                    {{-- Username/Email field with error handling --}}
                    <div class="mb-6">
                        <input 
                            type="email" 
                            name="email" 
                            class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 px-4 @error('email') border-red-500 @enderror" 
                            placeholder="Email"
                            value="{{ old('email') }}"
                            required 
                            autocomplete="email"
                        >
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Password field with error handling --}}
                    <div class="mb-1">
                        <input 
                            type="password" 
                            name="password" 
                            class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 px-4 @error('password') border-red-500 @enderror" 
                            placeholder="Password"
                            required 
                            autocomplete="current-password"
                        >
                        @error('password')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Forgot Password Link --}}
                    <div class="flex justify-end mb-6">
                        <a href="" class="text-indigo-600 text-right text-base font-normal leading-6 hover:text-indigo-800">
                            Forgot Password?
                        </a>
                    </div>

                    {{-- Login Button --}}
                    <button 
                        type="submit" 
                        class="w-full h-12 text-white text-center text-base font-semibold leading-6 rounded-full hover:bg-indigo-800 transition-all duration-700 bg-indigo-600 shadow-sm mb-11"
                    >
                        Login
                    </button>

                    {{-- Sign Up Link --}}
                    <div class="flex justify-center text-gray-900 text-base font-medium leading-6">
                        Don't have an account? 
                        <a href="" class="text-indigo-600 font-semibold pl-3 hover:text-indigo-800">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@endsection