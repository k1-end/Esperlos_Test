<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <title>{{ $title ?? 'Esperlos' }}</title>
    </head>
    <body>
        <x-navbar/>
        {{ $slot }}
    </body>
</html>