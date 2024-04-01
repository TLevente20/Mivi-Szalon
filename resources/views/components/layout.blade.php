<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $title ?? 'Mivi Szalon' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class='font-poppins'>
        {{-- Header --}}
        <livewire:nav-bar/>

        {{-- Page --}}
        {{ $slot }}

        {{-- Footer --}}
        <livewire:footer/>

    </body>
</html>
