<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $title ?? 'Mivi Szalon' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class='font-poppins'>
        <livewire:nav-bar/>
        {{ $slot }}  
    </body>
</html>
