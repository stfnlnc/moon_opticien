<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/admin/css/app.css', 'resources/admin/js/app.js'])
</head>
<body class="">
<div class="container pt--10 pb--10 flex col align--center justify-center">
    <div class="w--fit-content flex col gap--4">
        <svg class="icon--dark align--self-end" xmlns="http://www.w3.org/2000/svg" width="68" height="68"
             viewBox="0 0 68 68">
            <path
                d="M38.7113 45.4466L67.7316 16.3267L51.8726 0.413254L22.8534 29.5321L22.8532 0.400201L0.424805 0.400024V45.82C0.424805 49.8009 2.00075 53.619 4.806 56.4342L11.901 63.5543C14.7068 66.3698 18.5123 67.9517 22.4804 67.9517L67.7466 67.9512L67.7468 45.4464L38.7113 45.4466Z"></path>
        </svg>
        {{ $slot }}
    </div>
</div>
</body>
</html>
