@extends('base')

@section('title', 'Nos boutiques')

@section('meta')
    <meta property="og:description" content="Avec deux boutiques situées dans la région de Pau, à Bizanos et Denguin, nous vous accueillons dans des espaces dédiés au conseil, au style et à la précision visuelle."/>
    <meta name="description" content="Avec deux boutiques situées dans la région de Pau, à Bizanos et Denguin, nous vous accueillons dans des espaces dédiés au conseil, au style et à la précision visuelle.">
    <meta property="og:url" content="{{ route('shops') }}"/>
@endsection

@section('content')

    <section class="container__full-width c--primary-light bg--secondary-dark flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Découvrez nos <br> deux boutiques</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Avec deux boutiques situées dans la région de Pau, à Bizanos et Denguin, nous vous accueillons dans des espaces dédiés au conseil, au style et à la précision visuelle. Que vous recherchiez des lunettes de créateurs, des verres haute performance ou un accompagnement personnalisé,
                notre équipe d’experts est là pour vous guider et répondre à vos besoins.
            </p>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>À Bizanos</h2>
                <p class="text--m">
                    Au cœur de Bizanos, MOON Opticien Lunetier vous accueille dans un espace à taille humaine, où chaque client bénéficie d’un conseil personnalisé. Ici, nous mettons un point d’honneur à allier savoir-faire et proximité pour vous offrir des solutions optiques sur mesure. Venez
                    rencontrer notre équipe et explorez une gamme de montures alliant confort, innovation et caractère.
                </p>
                <div class="text--m flex col gap--2">
                    <a href="" class="flex row gap--2 align--center">
                        <x-icon.pin class="icon-stroke--secondary-dark icon--small"></x-icon.pin> {{ $options[0]['options_value'] }}, {{ $options[1]['options_value'] }}
                        {{ $options[2]['options_value'] }}
                    </a>
                    <a href="tel:{{ str_replace(' ', '', $options[4]['options_value']) }}" class="flex row gap--2 align--center">
                        <x-icon.phone class="icon-stroke--secondary-dark icon--small"></x-icon.phone> {{ $options[4]['options_value'] }}
                    </a>
                    <a href="mailto:{{ $options[3]['options_value'] }}" class="flex row gap--2 align--center">
                        <x-icon.mail class="icon-stroke--secondary-dark icon--small"></x-icon.mail> {{ $options[3]['options_value'] }}
                    </a>
                </div>
                <div class="flex col gap--3">
                    <p class="text--m">Horaires du magasin</p>
                    <p class="text--m lowercase">
                        @foreach ($schedule as $value)
                            {{ array_keys($value)[0] }} : {{ array_values($value)[0] }} <br>
                        @endforeach
                    </p>
                </div>
                <a href="https://maps.app.goo.gl/idSKkAREJoTTPjDs6" target="_blank" class="btn btn--main-light">Voir l'itinéraire</a>
            </div>
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-right" src="{{ asset('/images/layers/bizanos.webp') }}" alt="Large choix de lunettes de vue">
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-4 flex row align--center justify--center">
        <div class="container grid grid--4 grid--2-mobile gap--10 text-center">
            <div class="flex col gap--2 align--center justify--center">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-pmr.svg') }}" alt="Examen de vue">
                <p class="text--l">Accès PMR</p>
                <p class="text--s">Notre boutique est adaptée pour vous accueillir dans les meilleurs conditions.</p>
            </div>
            <div class="flex col gap--2 align--center justify--start">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-parking.svg') }}" alt="Examen de vue">
                <p class="text--l">Parking</p>
                <p class="text--s">Un parking de 25 places est situé à proximité de la boutique.</p>
            </div>
            <div class="flex col gap--2 align--center justify--start">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-home.svg') }}" alt="Examen de vue">
                <p class="text--l">À Domicile</p>
                <p class="text--s">Nos équipes se déplacent depuis Bizanos au plus près de chez vous.</p>
            </div>
            <div class="flex col gap--2 align--center justify--start">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-exam.svg') }}" alt="Examen de vue">
                <p class="text--l">Services en magasin</p>
                <p class="text--s">Bénéficiez des services de gravure, collecte et recyclage dans votre boutique.</p>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-left" src="{{ asset('/images/layers/denguin.webp') }}" alt="Large choix de lunettes de soleil">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>À Denguin</h2>
                <p class="text--m">
                    À Denguin, notre boutique vous ouvre ses portes dans un cadre élégant et chaleureux, dédié à votre confort visuel. Notre équipe d’opticiens passionnés vous accompagne avec expertise pour trouver la monture idéale et vous proposer des solutions adaptées à votre vue et à votre
                    style. Venez découvrir une sélection pointue de lunettes alliant esthétisme et performance.
                </p>
                <div class="text--m flex col gap--2">
                    <a href="" class="flex row gap--2 align--center">
                        <x-icon.pin class="icon-stroke--secondary-dark icon--small"></x-icon.pin> {{ $options[16]['options_value'] }}, {{ $options[17]['options_value'] }}
                        {{ $options[18]['options_value'] }}
                    </a>
                    <a href="tel:{{ str_replace(' ', '', $options[20]['options_value']) }}" class="flex row gap--2 align--center">
                        <x-icon.phone class="icon-stroke--secondary-dark icon--small"></x-icon.phone> {{ $options[20]['options_value'] }}
                    </a>
                    <a href="mailto:{{ $options[19]['options_value'] }}" class="flex row gap--2 align--center">
                        <x-icon.mail class="icon-stroke--secondary-dark icon--small"></x-icon.mail> {{ $options[19]['options_value'] }}
                    </a>
                </div>
                <div class="flex col gap--3">
                    <p class="text--m">Horaires du magasin</p>
                    <p class="text--m lowercase">
                        @foreach ($schedule as $value)
                            {{ array_keys($value)[0] }} : {{ array_values($value)[0] }} <br>
                        @endforeach
                    </p>
                </div>
                <a href="https://maps.app.goo.gl/ksNMKQUdY6cMCsSP8" target="_blank" class="btn btn--main-light">Voir l'itinéraire</a>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-4 flex row align--center justify--center">
        <div class="container grid grid--4 grid--2-mobile gap--10 text-center">
            <div class="flex col gap--2 align--center justify--center">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-pmr.svg') }}" alt="Examen de vue">
                <p class="text--l">Accès PMR + Toilettes</p>
                <p class="text--s">Notre boutique est adaptée pour vous accueillir dans les meilleurs conditions.</p>
            </div>
            <div class="flex col gap--2 align--center justify--start">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-parking.svg') }}" alt="Examen de vue">
                <p class="text--l">Parking</p>
                <p class="text--s">Un parking de 25 places est situé à proximité de la boutique.</p>
            </div>
            <div class="flex col gap--2 align--center justify--start">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-home.svg') }}" alt="Examen de vue">
                <p class="text--l">À Domicile</p>
                <p class="text--s">Nos équipes se déplacent depuis Bizanos au plus près de chez vous.</p>
            </div>
            <div class="flex col gap--2 align--center justify--start">
                <img loading="lazy" class="" src="{{ asset('/images/icon/large/icon-exam.svg') }}" alt="Examen de vue">
                <p class="text--l">Services en magasin</p>
                <p class="text--s">Bénéficiez des services de gravure, collecte et recyclage dans votre boutique.</p>
            </div>
        </div>
    </section>
    @include('main.layouts.template-parts.brands', ['title' => 'Nos marques adultes', 'locations' => 'bizanos,denguin'])
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--60 w-100-mobile text-center">Venez nous voir en magasin, nos opticiens sont là pour vous conseiller.</h2>
            <a href="{{ route('contact') }}" class="btn btn--main-light mt--2">Je prends contact</a>
        </div>
    </section>

@endsection
