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
<body id="app" class="bg-gray-800">
<header>
    <nav class="bg-gray-950 shadow-sm  font-bold">
        <div class="container flex justify-between items-center mx-auto">
            <div>{{ config('app.name', 'Laravel') }}</div>

            <ul class="flex items-center">
                <li>
                    <a href="{{route('home')}}" class="nav-link">{{__('Home')}}</a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <x-utils.dropdown :title="Auth::user()->name">
                        @role('CREATOR')
                        <x-utils.dropdown-item>
                            <a class="" href="{{ route('home') }}">{{ __('Link') }}</a>

                        </x-utils.dropdown-item>
                        @endrole

                        <x-utils.dropdown-item>
                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </x-utils.dropdown-item>
                    </x-utils.dropdown>
                    <x-utils.notifications/>
                @endguest

            </ul>
        </div>

    </nav>
</header>

<main class="container mx-auto py-4">
    <x-utils.alert type="success"/>
    <x-utils.alert type="error"/>
    <x-utils.alert type="warning"/>

    @yield('content')
</main>

<footer>

</footer>
</body>

</html>
