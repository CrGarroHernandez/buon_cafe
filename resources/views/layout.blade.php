<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{asset('img/buon.png')}}">
        <title>@yield('title', 'Buon Café')</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        @include('partials.nav')

        @yield('content')

        @include('partials.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>