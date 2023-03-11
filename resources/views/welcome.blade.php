<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Frp World</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    <div class=" w-full h-full">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 bg-[url('/public/assets/img/scattered-forcefields.svg')] bg-repeat bg-center bg-contain">
            <div class="max-w-6xl px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center mb-10 md:mb-0">
                <div class="text-7xl md:text-6xl w-full dark:text-gray-200 tracking-wider font-semibold pl-8 md:pl-0 text-gray-200">{{ __('Welcome to My Frp World') }}</div>
                @auth
                <div class="flex justify-center items-center gap-10 mt-10 text-lg">
                    <a href="{{ url('/dashboard') }}" class="text-gray-700 dark:text-gray-300 px-4 py-2 bg-gray-200 hover:bg-gray-300 active:bg-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-2xl">{{ __('Dashboard') }}</a>
                </div>
                @else
                    <div class="flex justify-center items-center gap-14 mt-10 text-lg">
                        <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 px-4 py-2 bg-gray-200 hover:bg-gray-300 active:bg-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-2xl">{{ __('Log In') }}</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-700 dark:text-gray-300 px-4 py-2 bg-gray-200 hover:bg-gray-300 active:bg-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:active:bg-gray-600 rounded-2xl">{{ __('Register') }}</a>
                        @endif
                    </div>
                @endauth
    
            </div>
        </div>
    </div>
</body>

</html>
