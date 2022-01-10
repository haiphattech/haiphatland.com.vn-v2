<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.extends.style-css')
</head>
<body class="antialiased">
    @yield('content')
    @include('layouts.extends.footer')
    @include('layouts.extends.script-js')
</body>
</html>
