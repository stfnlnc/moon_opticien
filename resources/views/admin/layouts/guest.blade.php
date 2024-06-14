<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <link rel="icon" href="" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <!-- Scripts -->
    @vite(['resources/admin/css/app.css', 'resources/admin/js/app.js'])
</head>
<body class="">
<main>
    <div class="container pt--10 pb--10 flex col align--center justify-center">
        <div class="w--fit-content flex col gap--4">
            <div class="align--self-center">
                <x-application-logo></x-application-logo>
            </div>
            {{ $slot }}
        </div>
    </div>
</main>
</body>
</html>
