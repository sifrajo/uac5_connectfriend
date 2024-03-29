@extends('layout.master')
@section('content')
    <!-- component -->
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center" style="color: #FF5FA2">Sign In</h1>
                @if (Session()->has('loginError'))
                    <h2 class="text-red-500 text-xl">
                        {{ Session()->get('loginError') }}
                    </h2>
                @endif
                @if (Session()->has('registerSuccess'))
                    <h2 class="text-red-500 text-xl">
                        {{ Session()->get('registerSuccess') }}
                    </h2>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <input type="email" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                        placeholder="Email" required/>
                        @error('email')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror

                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                        placeholder="Password" required/>
                        @error('password')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror

                    <button type="submit"
                        class="w-full text-center bg-green-400 py-3 rounded-md text-white hover:bg-blue-400" style="background-color: #FF5FA2">Login</button>
                </form>
                <div class="text-grey-dark mt-6">
                    Dont have account?
                    <a class="no-underline border-b border-blue text-blue" href="/register">
                        Register
                    </a>.
                </div>
            </div>
        </div>
    @endsection
