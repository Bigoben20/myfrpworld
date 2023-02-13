<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    <div class="bg-[url('/public/assets/img/scattered-forcefields.svg')] bg-repeat bg-center bg-contain w-full h-full">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl  sm:px-6 lg:px-8">
                <div class="text-6xl w-full dark:text-gray-200">Welcome to My Frp World</div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <div class="flex justify-center items-center gap-10 mt-10 text-lg">
                        <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 px-4 py-2 bg-gray-200 hover:bg-gray-300 active:bg-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-2xl">Log in</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-700 dark:text-gray-300 px-4 py-2 bg-gray-200 hover:bg-gray-300 active:bg-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-2xl">Register</a>
                        @endif
                    </div>
                @endauth
    
            </div>
        </div>
    </div>
</body>

</html>
