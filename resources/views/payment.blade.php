@extends('layout.master')
@section('content')
    <!-- component -->
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Payment</h1>
                @if (Session()->has('underPaid'))
                    <h2 class="text-red-500 text-xl">
                        {{ Session()->get('underPaid') }}
                    </h2>
                @endif
                @if (Session()->has('overPaid'))
                    <h2 class="text-red-500 text-xl">
                        {{ Session()->get('overPaid') }}
                    </h2>
                @endif
                <form action="/payment" method="POST">
                    @csrf
                    @php
                        $rand = mt_rand(100000, 125000);
                    @endphp

                    <h2>Registration Price</h2>
                    <h5>Price : {{ $rand }}</h5>

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="wallet"
                        placeholder="Wallet" required/>

                    <button type="submit"
                        class="w-full text-center bg-green-400 py-3 rounded-md text-white hover:bg-blue-400">Pay</button>
                </form>
            </div>
        </div>
    @endsection
