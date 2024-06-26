@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-6">
    <h1 class="text-2xl font-bold text-red-500 mb-4">User List</h1>
    <ul class="space-y-3">
        @foreach ($users as $user)
        <li class="flex justify-between items-center bg-gray-800 p-4 rounded-lg shadow">
            <div class="text-white text-lg">
                {{ $user->name }} - {{ $user->email }}
            </div>
            <form method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Are you sure you want to delete this user?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="flex items-center justify-center p-2 bg-red-600 hover:bg-red-700 rounded-full text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 01 16.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-6H9m2-4V4a1 1 0 011-1h2a1 1 0 011 1v3m0 0H9"/>
                    </svg>
                </button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
