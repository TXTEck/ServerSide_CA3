@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
        @if ($post->image_path)
            <img src="{{ Storage::url($post->image_path) }}" alt="Post Image" class="rounded-lg shadow-md mb-4">
        @endif
        <h2 class="text-2xl font-bold text-white mb-3">{{ $post->title }}</h2>
        
        <p class="text-gray-300 text-lg leading-relaxed">{{ $post->content }}</p>
    </div>
</div>
@endsection
