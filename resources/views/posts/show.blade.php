@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg overflow-hidden">
        @if ($post->image_path)
            <div class="flex justify-center bg-black">
                <img src="{{ Storage::url($post->image_path) }}" alt="Post Image" class="max-w-full h-auto max-h-64 object-cover rounded-lg shadow-md mb-6">
            </div>
        @endif
        <div class="px-6 py-4">
            <h2 class="text-3xl font-bold text-red-500 mb-2">{{ $post->title }}</h2>
            <p class="text-white text-lg leading-relaxed">{{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection