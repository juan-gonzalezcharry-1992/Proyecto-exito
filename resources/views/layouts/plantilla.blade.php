<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1, width=device-width">
    <meta name='author' href="https://github.com/juan-gonzalezcharry-1992/" email="juan.gonzalezcharry@gmail.com"
        content='Juan Pablo Gonzalez Charry - Desarrollador Web'>

    @yield('meta')

    <link rel="icon" type="image/png" href="{{ asset('img/amanee_icono.png') }}" />

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    @yield('css')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased h-full bg-gray-100">

    <div class="flex flex-col h-screen w-screen">
        <header class="z-20">
            @livewire('navigation')
        </header>

        <main class="flex-grow z-0">
            @yield('intro')
            @yield('content')
        </main>

        <footer class="footer w-full z-10">
            @livewire('footer')
        </footer>
    </div>

    @livewireScripts
    @yield('js')

</body>

</html>
