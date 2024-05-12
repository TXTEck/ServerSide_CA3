@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-4">
    @auth
        <!-- Create Post Button -->
        <a href="{{ route('posts.create') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition duration-300 ease-in-out transform hover:-translate-y-1">Create Post +</a>
    @endauth
    <div class="grid grid-cols-3 gap-6 mt-8">
        @foreach ($posts as $post)
            <div class="flex flex-col bg-white rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-cover bg-center h-48 w-full">
                    <img class="w-full h-full object-cover" src="{{ Storage::url($post->image_path) }}" alt="Post Image">
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <h4 class="font-bold text-xl mb-2 text-gray-900">{{ $post->title }}</h4>
                    <p class="text-gray-700 text-base flex-grow">
                        {{ $post->description }}
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('posts.show', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-base transition duration-300 ease-in-out">View Post</a>
                        @auth
                        @if (auth()->id() == $post->user_id || auth()->user()->role === 'admin')
                            <div class="flex space-x-2">
                                <a href="{{ route('posts.edit', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-base transition duration-300 ease-in-out">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg text-base transition duration-300 ease-in-out">Delete</button>
                                </form>
                            </div>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
