<x-app-layout>
    @section('title', 'Les options du site')
    <x-slot name="header">
        @yield('title')
        <a hx-boost="true" href="{{ route('options.create') }}" class="btn btn--small btn--primary-dark mt--1">Modifier les options</a>
    </x-slot>

    @php
        $date = new IntlDateFormatter('fr_FR',
    IntlDateFormatter::MEDIUM,
    IntlDateFormatter::SHORT,
    'Europe/Paris');
    @endphp

    <section class="container flex col gap--12-mobile">

        <card class="flex col gap--4">
            @if($option !== null)
            <div class="flex row align--center justify--space-between">
                <h4>{{ $option->site_name ?: '' }}</h4>
                @if($option && $option->site_favicon)
                    <img class="site__favicon border--rounded" src="{{ $option->faviconUrl() }}" alt="">
                @endif
            </div>
            <p class="flex col gap--2 text--s">
                <span class="underline">Url :</span> <a target="_blank" href="{{ $option->site_url ?: '' }}">{{ $option->site_url ?: '' }}</a>
            </p>
            <p class="flex col gap--2 text--s">
                <span class="underline">Description :</span> " {{ $option->site_description ?: '' }} "
            </p>
            <div class="flex col gap--2 text--s">
                <span class="underline">Mots-clés :</span>
                @php
                    $keywords = $option->site_keywords ?: '';
                    $keywords = explode(' ', $keywords)
                @endphp
                <div class="flex row gap--1">
                    @foreach($keywords as $keyword)
                        <p class="tag tag--info">{{ $keyword }}</p>
                    @endforeach
                </div>
            </div>
            <div class="flex col">
                <p class="text--s mt--4">
                    Créé le {{ $date->format($option->created_at  ?: '') }}
                </p>
                <p class="text--s">
                    Dernière modification le {{ $date->format($option->updated_at  ?: '') }}
                </p>
            </div>
            <p class="text--s">
                © {{ $option->site_copyright ?: '' }}
            </p>
            @else
                <p class="text--s">Aucune option enregistrée</p>
            @endif
        </card>

    </section>
</x-app-layout>
