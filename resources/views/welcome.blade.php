@extends('layouts.app')

@section('content')
    <div class="relative bg-black">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ asset('images/banner.jpg') }}" alt="Valorant">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-48 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-red-500 text-center text-shadow-md pb-14 text-deep-shadow">Welcome to the Valorant Blog</h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-300 sm:text-xl md:mt-5 md:max-w-3xl text-center">
                Stay updated with the latest strategies, patch updates, and character guides.
            </p>
        </div>
    </div>

@endsection
