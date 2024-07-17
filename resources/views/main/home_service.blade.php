@extends('base')

@section('title', 'À domicile')

@section('meta')
    <meta property="og:description" content="Que ce soit pour des ajustements de lunettes, des conseils personnalisés pour choisir la monture idéale, ou des examens de vue complets, notre équipe se déplace au plus proche de vous." />
    <meta name="description" content="Que ce soit pour des ajustements de lunettes, des conseils personnalisés pour choisir la monture idéale, ou des examens de vue complets, notre équipe se déplace au plus proche de vous.">
    <meta property="og:url" content="{{ route('home_service') }}" />
@endsection

@section('content')

    <section class="container__full-width c--primary-light bg--secondary-color-3 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Nos services <br> à domicile</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Que ce soit pour des ajustements de lunettes, des conseils personnalisés pour choisir la monture idéale, ou des examens de vue complets, notre équipe se déplace au plus proche de vous.
                <br>
                Contactez-nous aujourd'hui pour une expérience optique pratique et personnalisée qui prend soin de votre vue où que vous soyez.
            </p>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Le déplacement à domicile, pour qui ? </h2>
                <p class="text--m">
                    Le déplacement à domicile est idéal pour toute personne qui cherche à bénéficier de services optiques sans avoir à se déplacer. Cela inclut les personnes âgées ou à mobilité réduite,  leur permettant ainsi d'accéder facilement à des examens de vue, des ajustements de lunettes et des conseils optiques professionnels sans contrainte de déplacement.
                    <br><br>
                    Notre équipe de professionnels se déplace à la demande, que ce soit à domicile ou en EHPAD, nous sommes là au plus proche de vous.
                </p>
            </div>
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-right" src="{{ asset('/images/layers/be8d0bb7d96fcf948680d017abe96fd7.webp') }}" alt="Service à domicile">
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--secondary-color-4 flex col align--center justify--center">
        <div class="container flex col align--start gap--10">
            <div class="grid grid--3 grid--1-mobile grid-gap--10 w--100 text--l">
                <div class="flex col gap--3 align--center text-center">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-home.svg') }}" alt="À domicile">
                    <p class="text--l">À domicile</p>
                    <p class="text--m">
                        Des services optiques à domicile, sans que vous ayez à vous déplacer.
                    </p>
                </div>
                <div class="flex col gap--3 align--center text-center">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-person.svg') }}" alt="EHPAD">
                    <p class="text--l">En EHPAD</p>
                    <p class="text--m">
                        Des services optiques personnalisés pour le bien-être des résidents.
                    </p>
                </div>
                <div class="flex col gap--3 align--center text-center">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-heart.svg') }}" alt="Sur demande">
                    <p class="text--l">À la demande</p>
                    <p class="text--m">
                        Des services optiques sur demande, quand vous en avez besoin, où que vous soyez.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container__full-width c--primary-light bg--secondary-dark flex col align--center">
        <div class="container">
            <div class="hide-mobile border--top border--secondary-color-2 c--secondary-color-2 pt--4 pb--4 flex row align--center justify--start gap--2">
                <x-icon.dot-small class="icon__dot-small icon--secondary-color-2"></x-icon.dot-small>
                <p class="text--s">À domicile</p>
            </div>
            <div class="grid grid--2 grid-gap--14 grid--1-mobile grid-gap--8-mobile pt--10 pb--20">
                <h2>Un opticien à domicile, pour vous ou vos proches.</h2>
                <div class="flex col align--start gap--10">
                    <p class="text--m">
                        Que ce soit pour des ajustements de lunettes, des conseils personnalisés pour choisir la monture idéale, ou des examens de vue complets, notre équipe se déplace à votre convenance.
                    </p>
                </div>
            </div>
            @include('main.layouts.template-parts.home_service')
        </div>
    </section>
    <section class="container__full-width">
        <img class="w--100 img img-banner reveal-0" src="{{ asset('/images/layers/6687eaa5d6cb2.webp') }}" alt="Livraison à domicile">
    </section>
    @include('main.layouts.template-parts.service')
    @include('main.layouts.template-parts.engagement', ['mode' => 'light'])
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--60 text-center w-100-mobile">Prenez rendez-vous dès maintenant pour vous ou pour votre proche</h2>
            <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-light mt--2">Je prends rendez-vous</a>
        </div>
    </section>
@endsection
