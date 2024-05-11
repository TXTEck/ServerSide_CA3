@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-gray-800 p-5 rounded shadow-lg">
    <img src="{{ Storage::url($post->image_path) }}" alt="Post Image" class="mt-4 mb-4">
        <h2 class="text-xl font-bold text-white">{{ $post->title }}</h2>
        
        <p class="text-gray-300">{{ $post->content }}</p>
    </div>
</div>
@endsection