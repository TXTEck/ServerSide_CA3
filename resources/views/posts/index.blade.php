@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    @auth
        <a href="{{ route('posts.create') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Create Post</a>
    @endauth
    <div class="grid grid-cols-3 gap-4 mt-8">
        @foreach ($posts as $post)
            <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ Storage::url($post->image_path) }}" alt="Post Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $post->description }}
                    </p>
                </div>
                @if (auth()->id() == $post->user_id)
                
                    <div class="px-6 pt-4 pb-2">
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                @endif
                <a href="{{ route('posts.show', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Post</a>
                @if (auth()->id() == $post->user_id)
    <a href="{{ route('posts.edit', $post) }}" class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Edit</a>
@endif
            </div>
        @endforeach
    </div>
</div>
@endsection
