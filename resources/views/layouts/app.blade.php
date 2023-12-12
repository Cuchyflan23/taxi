<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistemas Loja') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    {{-- @vite(['resources/js/app.js',
            'resources/assets/js/page/contact.js',
            'resources/assets/js/scripts.js',
            'resources/assets/js/custom.js']) --}}
    
    @vite(['resources/assets/css/app.min.css',
            'resources/assets/css/style.css',
            'resources/assets/css/components.css',
            'resources/assets/css/custom.css'])

    @vite(['resources/assets/js/app.min.js'])
</head>
<body>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
