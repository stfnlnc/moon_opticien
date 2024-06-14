<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex">
        <title>@yield('title') - {{ config('app.name') }}</title>
        @vite(['resources/admin/css/app.css', 'resources/admin/js/app.js'])
    </head>
    <body class="">
        <div class="container__full-width flex col">
            @include('admin.layouts.navigation')

            <main>
                @if (isset($header))
                    <header class="container pt--4 pb--4">
                        <h5>
                            {{ $header }}
                        </h5>
                    </header>
                    @if(session('success'))
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="alert alert--success"
                        >{{ session('success') }}</p>
                    @endif
                    @if($errors->any())
                        <div class="alert alert--danger">
                            <div class="flex col gap--2">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endif
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
