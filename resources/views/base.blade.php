<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ $option ? $option->faviconUrl() : '' }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ $option ? $option->logoUrl() : '' }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ $option ? $option->logoUrl() : '' }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ $option ? $option->logoUrl() : '' }}">
    <meta name="description" content="{{ $option ? $option->site_description : '' }}">
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:description" content="{{ $option ? $option->site_description : '' }}" />
    <meta property="og:url" content="{{ $option ? $option->site_url : '' }}" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:width" content="" />
    <meta property="og:image:height" content="" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <title>@yield('title') {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container__full-width h--100 flex col align--center justify--space-between bg--secondary-dark">
        @yield('content')
    </div>
</body>
</html>
