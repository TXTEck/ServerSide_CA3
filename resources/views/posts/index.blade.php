
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-4">
    @auth
        <a href="{{ route('posts.create') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Create Post</a>
    @endauth
    <div class="grid grid-cols-3 gap-6 mt-8">
        @foreach ($posts as $post)
            <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-cover bg-center h-48 w-full">
                <img class="w-full" src="{{ Storage::url($post->image_path) }}" alt="Post Image">
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <h4 class="font-bold text-xl mb-2">{{ $post->title }}</h4>
                    <p class="text-gray-700 text-base flex-grow">
                        {{ $post->description }}
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('posts.show', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">View Post</a>
                        @if (auth()->id() == $post->user_id)
                            <div class="flex space-x-2">
                                <a href="{{ route('posts.edit', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-xs">Delete</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection