<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

        <title>@yield('title', config('app.name'))</title>

        @vite(['resources/css/app.css'])

        <script src="https://cdn.usefathom.com/script.js" data-site="PIYMUVZB" defer></script>

        @section('head')
        @show
    </head>
    @yield('body')
</html>
