<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name') }}</title>

        @vite(['resources/admin/css/app.css', 'resources/admin/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="container__full-width flex col container__full-width">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="container pt--4 pb--4">
                    <h5>
                        {{ $header }}
                    </h5>
                </header>
            @endif

            <!-- Page Content -->
            <main class="container pt--10 pb--10">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
