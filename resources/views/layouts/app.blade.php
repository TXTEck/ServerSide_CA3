<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-900 text-white">

    <nav class="bg-gray-800">
        <div class="mx-1 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="-ml-2 mr-6 flex items-center">
                        <img src="{{ asset('images/valorantLogo.png') }}" class="h-10" alt="Valorant Logo">
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="px-3 py-2 rounded-md text-2xl font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-2xl font-medium">Blogs</a>
                        
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    @guest
                        <a href="#" class="px-3 py-2 rounded-md text-2xl font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                        <a href="#" class="px-3 py-2 rounded-md text-2xl font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Signup</a>
                    @else
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="px-3 py-2 rounded-md text-2xl font-medium text-red-500 bg-gray-700 hover:bg-gray-600">Logout</a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

   <div>
        @yield('content')
    </div>

</body>
</html>
