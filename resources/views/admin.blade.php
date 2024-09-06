{{-- 
@php
    use Illuminate\Support\Facades\Inertia;
@endphp --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Admin-Laravel') }}</title>



        @routes

        @vite(['resources/css/admin.css', 'resources/js/admin.js'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

      
    </body>
</html>
