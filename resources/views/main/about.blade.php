@extends('base')

@section('title', 'À propos')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')

    <section class="container__full-width c--primary-dark bg--secondary-color-4 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Une équipe <br> à taille humaine</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Forts de nos expériences variées et complémentaires, nous mettons à votre disposition
                notre expertise pour vous guider dans le choix de vos lunettes, lentilles de contact et autres
                solutions optiques.
                Notre objectif est de vous offrir un service de qualité, personnalisé et à la
                hauteur de vos attentes.
            </p>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex col align--center">
        <div class="container">
            <div class="hide-mobile border--top border--secondary-color-3 c--secondary-color-3 pt--4 pb--4 flex row align--center justify--start gap--2">
                <x-icon.dot-small class="icon__dot-small icon--secondary-color-3"></x-icon.dot-small>
                <p class="text--s">L'équipe</p>
            </div>
            <div class="grid grid--2 grid-gap--14 grid--1-mobile grid-gap--8-mobile pt--10 pb--20">
                <h2>Des opticiens passionnés à votre service</h2>
                <div class="flex col align--start gap--10">
                    <p class="text--m">
                        Moon Opticien Lunetier, est un magasin d’optique indépendant situé dans le centre ville de
                        Bizanos fondé par trois opticiens diplômés, passionnés par leur métier et déterminés
                        à vous offrir le meilleur service possible.
                    </p>
                </div>
            </div>
            <div class="flex row justify--end w--100">
                <div class="grid grid--3 grid--1-mobile  grid-gap--8-mobile grid-gap--2">
                    <div class="flex col align--start justify--start gap--3 block__about reveal-0">
                        <div class="img__about img__hover relative">
                            <img loading="lazy" class="img img__about img__display absolute" src="{{ asset('/images/layers/6687ec06ea590.webp') }}" alt="Laure, opticienne passionnée">
                            <img loading="lazy" class="img img__about img__hidden absolute" src="{{ asset('/images/layers/6687ec06ea590_hover.webp') }}" alt="Laure, opticienne passionnée">
                        </div>
                        <p class="text--l">Laure</p>
                        <p class="text--m">
                            Passionnée par l’optique et la vision, mon expérience m'a permis de développer une expertise approfondie et un savoir-faire reconnu dans ce domaine pour vous offrir des
                            solutions visuelles adaptées à vos besoins.
                        </p>
                    </div>
                    <div class="flex col align--start justify--start gap--3 block__about reveal-2">
                        <div class="img__about img__hover relative">
                            <img loading="lazy" class="img img__about img__display absolute" src="{{ asset('/images/layers/6687ec2751070.webp') }}" alt="Quentin, opticien passionné">
                            <img loading="lazy" class="img img__about img__hidden absolute" src="{{ asset('/images/layers/6687ec2751070_hover.webp') }}" alt="Quentin, opticienne passionné">
                        </div>
                        <p class="text--l">Quentin</p>
                        <p class="text--m">
                            Grâce à mes études et à ma passion pour l'optique, j'ai acquis des compétences approfondies en correction visuelle et choix de montures pour vous garantir un service de qualité, tout en alliant esthétique et confort
                        </p>
                    </div>
                    <div class="flex col align--start justify--start gap--3 block__about reveal-4">
                        <div class="img__about img__hover relative">
                            <img loading="lazy" class="img img__about img__display absolute" src="{{ asset('/images/layers/6687ec39adea6.webp') }}" alt="Paul, opticienne passionné">
                            <img loading="lazy" class="img img__about img__hidden absolute" src="{{ asset('/images/layers/6687ec39adea6_hover.webp') }}" alt="Paul, opticienne passionné">
                        </div>
                        <p class="text--l">Paul</p>
                        <p class="text--m">
                            Passionné par la santé visuelle, je m'engage à fournir des conseils personnalisés et des solutions adaptées à chaque besoin, des examens de la vue aux dernières innovations en matière de lentilles de contact.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('main.layouts.template-parts.engagement', ['mode' => 'dark'])
    <section class="container__full-width">
        <img class="w--100 img img-banner reveal-0" src="{{ asset('/images/layers/6687ea96244d9.webp') }}" alt="Une équipe d'opticien à votre service">
    </section>
    @include('main.layouts.template-parts.service')
    @include('main.layouts.template-parts.review')

@endsection
