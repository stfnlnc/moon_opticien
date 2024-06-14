<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/images/logo/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/images/logo/logo-152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('/images/logo/logo-167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/logo/logo-180.png') }}">
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/logo/logo-180.png') }}" />
    <meta property="og:image:secure_url" content="{{ asset('/images/logo/logo-180.png') }}" />
    <meta property="og:image:width" content="180" />
    <meta property="og:image:height" content="180" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    @yield('meta')
    <title>@hasSection('title')@yield('title') - @endif {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('main.layouts.navigation', ['mode' => $mode ?? null])
    <main>
        @yield('content')
    </main>
    @include('main.layouts.footer')
</body>
</html>
