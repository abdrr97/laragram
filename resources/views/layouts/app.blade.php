<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="antialiased bg-gray-100">
    <div class="min-h-screen bg-gray-100">
        {{ $navigation }}
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="/js/app.js"></script>
</body>
