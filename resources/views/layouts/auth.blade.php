<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-800">
<div id="app">
    <nav class="bg-gray-950 shadow-sm  font-bold">
        <div class="container flex justify-between items-center mx-auto">
            <div>{{ config('app.name', 'Laravel') }}</div>

            <ul class="flex">
                <li>
                    <a href="{{route('home')}}" class="px-3 py-2 block">Home</a>
                </li>
                <li>
                    <a href="{{route('home')}}" class="px-3 py-2 block">Guides</a>
                </li>
            </ul>
        </div>

    </nav>

    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
