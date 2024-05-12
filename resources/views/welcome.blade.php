@extends('layouts.app')

@section('content')
    <div class="relative bg-black">
        <div class="absolute inset-0">
            <img class="w-full  object-cover" src="{{ asset('images/banner.jpg') }}" alt="Valorant">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-48 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-red-500 text-center text-shadow-md pb-14 text-deep-shadow">Welcome to the Valorant Blog</h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-300 sm:text-xl md:mt-5 md:max-w-3xl text-center">
                Stay updated with the latest strategies, patch updates, and character guides.
            </p>
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-gray-800 text-center py-8 rounded-lg shadow-md">
            <h2 class="text-4xl font-bold text-white mb-4">Valorant Official Website</h2>
            <p class="text-gray-300 mb-6 text-xl">Join millions of players in Valorant.</p>
            <a href="https://playvalorant.com/download/" target="_blank" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded transition duration-300 ease-in-out">
                Download Now
            </a>
        </div>
    </div>
    <div class=" mt-10 w-full mx-auto px-4 sm:px-6 lg:px-8 flex flew-row space-x-4 overflow-x-auto">
            <div class="aspect-w-16 aspect-h-9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/IieHya97kOw?si=kS0FaG6uh3QnMyUM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
            <div class="aspect-w-16 aspect-h-9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JzsKAapsmKQ?si=cStg8kSbC4k8h_o1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="aspect-w-16 aspect-h-9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/5G3nH2n8Zlc?si=5D6c9dGqGz6MZ7D_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="aspect-w-16 aspect-h-9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NszPhR54Qy8?si=e_2ZBjVgFzAxHbCu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
    </div>
            
    <div class="mb-20">
    </div>
@endsection
