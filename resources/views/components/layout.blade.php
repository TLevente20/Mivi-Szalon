<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <livewire:nav-bar/>
        {{ $slot }}
        
    </body>
</html>
