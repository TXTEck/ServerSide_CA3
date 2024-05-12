@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate mt-6 mb-6">Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data" class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="title">
                Title
            </label>
            <input type="text" name="title" value="{{ $post->title }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="description">
                Description
            </label>
            <textarea name="description" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $post->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2 " for="content">
                Content
            </label>
            <textarea class=" h-96 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="content" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2" for="image">
                Image (optional)
            </label>
            <input type="file" name="image" class="shadow border rounded py-2 px-3 text-gray-700">
            @if($post->image_path)
                <img src="{{ Storage::url($post->image_path) }}" alt="Current image" class="w-20 h-20 mt-2">
            @endif
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Post</button>
    </form>
</div>
@endsection