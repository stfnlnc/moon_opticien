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

        <card>
            <h4>Options</h4>
            @if($option)
            <p class="text--s mt--2">
                {{ $option->site_url ?: '' }}
            </p>
            <p class="text--s">
                {{ $option->site_name ?: '' }}
            </p>
            <p class="text--s">
                {{ $option->site_description ?: '' }}
            </p>
            <div class="text--s flex row gap--1 mt--2">
                @php
                    $keywords = $option->site_keywords ?: '';
                    $keywords = explode(' ', $keywords)
                @endphp
                @foreach($keywords as $keyword)
                    <p class="tag tag--info">{{ $keyword }}</p>
                @endforeach
            </div>
            <p class="text--s mt--4">
                Créé le {{ $date->format($option->created_at  ?: '') }}
            </p>
            <p class="text--s">
                Dernière modification le {{ $date->format($option->updated_at  ?: '') }}
            </p>
            @else
                <p class="text--s mt--2">Aucune option enregistrée</p>
            @endif
        </card>

    </section>
</x-app-layout>
