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
                    <div class="flex col align--start justify--start gap--3 block__about">
                        <div class="img__about img__hover relative">
                            <img loading="lazy" class="img img__about img__display absolute" src="{{ asset('/images/layers/6687ec06ea590.webp') }}" alt="">
                            <img loading="lazy" class="img img__about img__hidden absolute" src="{{ asset('/images/layers/6687ec06ea590_hover.webp') }}" alt="">
                        </div>
                        <p class="text--l">Laure</p>
                        <p class="text--m">
                            Passionnée par l’optique et la vision, mon expérience m'a permis de développer une expertise approfondie et un savoir-faire reconnu dans ce domaine pour vous offrir des
                            solutions visuelles adaptées à vos besoins.
                        </p>
                    </div>
                    <div class="flex col align--start justify--start gap--3 block__about">
                        <div class="img__about img__hover relative">
                            <img loading="lazy" class="img img__about img__display absolute" src="{{ asset('/images/layers/6687ec2751070.webp') }}" alt="">
                            <img loading="lazy" class="img img__about img__hidden absolute" src="{{ asset('/images/layers/6687ec2751070_hover.webp') }}" alt="">
                        </div>
                        <p class="text--l">Quentin</p>
                        <p class="text--m">
                            Grâce à mes études et à ma passion pour l'optique, j'ai acquis des compétences approfondies en correction visuelle et choix de montures pour vous garantir un service de qualité, tout en alliant esthétique et confort
                        </p>
                    </div>
                    <div class="flex col align--start justify--start gap--3 block__about">
                        <div class="img__about img__hover relative">
                            <img loading="lazy" class="img img__about img__display absolute" src="{{ asset('/images/layers/6687ec39adea6.webp') }}" alt="">
                            <img loading="lazy" class="img img__about img__hidden absolute" src="{{ asset('/images/layers/6687ec39adea6_hover.webp') }}" alt="">
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
    <section class="container__full-width c--primary-light bg--secondary-dark flex col align--center">
        <div class="container flex col gap--10">
            <h2>Nos engagements</h2>
            <div class="flex col w--100">
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-light">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-light"></x-icon.dot-small>
                        <p class="text--l">Des prix justes</p>
                    </div>
                    <p class="text--m">
                        Nous vous proposons des prix justes pour des lunettes de qualité adaptées à votre budget.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-light">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-light"></x-icon.dot-small>
                        <p class="text--l">Service France Garanti</p>
                    </div>
                    <p class="text--m">
                        Profitez de notre engagement pour vous garantir des solutions optiques fiables.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-light">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-light"></x-icon.dot-small>
                        <p class="text--l">Tiers payant & 100% santé</p>
                    </div>
                    <p class="text--m">
                        Bénéficiez du tiers payant et du 100% santé pour des lunettes sans frais à votre charge.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-light">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-light"></x-icon.dot-small>
                        <p class="text--l">Facilités de paiement</p>
                    </div>
                    <p class="text--m">
                        Découvrez nos facilités de paiement pour rendre l'achat de vos lunettes plus accessible.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container__full-width">
        <img class="w--100 img img-banner" src="{{ asset('/images/layers/6687ea96244d9.webp') }}" alt="">
    </section>
    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <div class="container grid grid--3 grid--1-mobile grid-gap--10 text-center pt--10 pb--10 w--80 w-100-mobile">
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">Gravure des branches</p>
                <p class="text--s">
                    Un service unique et personnalisé : la gravure des
                    branches avec votre nom ou tout autre texte de votre choix.
                </p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">Verrier français</p>
                <p class="text--s">
                    Optez pour la qualité avec des verres fabriqués par des verriers français renommés.
                </p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">2e paire offerte</p>
                <p class="text--s">
                    Bénéficiez d'une deuxième paire offerte pour une vision toujours impeccable. <br>
                    (Voir détails en magasin)
                </p>
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex col align--center">
        <div class="container flex col align--center">
            <div class="hide-mobile flex row align--center justify--space-between border--top border--secondary-color-3 w--100">
                <div class="c--secondary-color-3 pt--4 pb--4 flex row align--center justify--start gap--2">
                    <x-icon.dot-small class="icon__dot-small icon--secondary-color-3"></x-icon.dot-small>
                    <p class="text--s">Ce que disent nos clients</p>
                </div>
                <a hx-boost="true" target="_blank" href="https://maps.app.goo.gl/uD8mjQmQrdmfDVLTA" class="btn btn--main-light">Voir tous les avis</a>
            </div>
            <div class="slider">
                <svg class="slider__prev" xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="none">
                    <path d="M8.40616 13.5108L17.114 21.8077C17.2593 21.9462 17.4523 22.0234 17.653 22.0234C17.8538 22.0234 18.0468 21.9462 18.1921 21.8077L18.2015 21.7983C18.2722 21.7311 18.3284 21.6503 18.3669 21.5607C18.4054 21.4712 18.4252 21.3747 18.4252 21.2772C18.4252 21.1797 18.4054 21.0832 18.3669 20.9937C18.3284 20.9041 18.2722 20.8232 18.2015 20.7561L10.0015 12.9436L18.2015 5.13423C18.2722 5.06708 18.3284 4.98626 18.3669 4.89668C18.4054 4.80709 18.4252 4.71062 18.4252 4.61313C18.4252 4.51564 18.4054 4.41917 18.3669 4.32959C18.3284 4.24001 18.2722 4.15918 18.2015 4.09204L18.1921 4.08266C18.0468 3.94415 17.8538 3.86689 17.653 3.86689C17.4523 3.86689 17.2593 3.94415 17.114 4.08266L8.40616 12.3795C8.32958 12.4525 8.26861 12.5403 8.22696 12.6375C8.1853 12.7347 8.16382 12.8394 8.16382 12.9452C8.16382 13.0509 8.1853 13.1556 8.22696 13.2528C8.26861 13.3501 8.32958 13.4378 8.40616 13.5108Z" fill="#1E3A3D"/>
                </svg>
                @if($reviews !== null)
                    @foreach($reviews as $k => $review)
                        @if($review['rating'] >= 4)
                            <div style="{{ 'left:' . ($k * 100)+50 . '%' }}" class="slider__review flex col gap--10 align--center justify--center w--70 w-100-mobile text-center">
                                <p class="text--l">
                                    {{ $review['text'] }}
                                </p>
                                <div class="flex col gap--2 align--center c--secondary-color-3">
                                    <div class="flex row gap--1">
                                        <x-icon.star-full class="icon--small icon--secondary-color-3"></x-icon.star-full>
                                        <x-icon.star-full class="icon--small icon--secondary-color-3"></x-icon.star-full>
                                        <x-icon.star-full class="icon--small icon--secondary-color-3"></x-icon.star-full>
                                        <x-icon.star-full class="icon--small icon--secondary-color-3"></x-icon.star-full>
                                        <x-icon.star-full class="icon--small icon--secondary-color-3"></x-icon.star-full>
                                    </div>
                                    <p class="text--m capitalize">{{ $review['author_name'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <p class="text--m">Aucun avis n'est disponible</p>
                @endif
                <svg class="slider__next" xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="none">
                    <path d="M16.5937 12.3798L7.8859 4.08296C7.74061 3.94445 7.54757 3.86719 7.34684 3.86719C7.1461 3.86719 6.95307 3.94445 6.80778 4.08296L6.7984 4.09234C6.72772 4.15948 6.67144 4.2403 6.63298 4.32989C6.59452 4.41947 6.57469 4.51594 6.57469 4.61343C6.57469 4.71092 6.59452 4.80739 6.63298 4.89697C6.67144 4.98656 6.72772 5.06738 6.7984 5.13452L14.9984 12.947L6.7984 20.7564C6.72772 20.8235 6.67144 20.9044 6.63298 20.9939C6.59452 21.0835 6.57469 21.18 6.57469 21.2775C6.57469 21.375 6.59452 21.4715 6.63298 21.561C6.67144 21.6506 6.72772 21.7314 6.7984 21.7986L6.80778 21.808C6.95307 21.9465 7.1461 22.0237 7.34684 22.0237C7.54757 22.0237 7.74061 21.9465 7.8859 21.808L16.5937 13.5111C16.6703 13.4381 16.7313 13.3504 16.7729 13.2531C16.8146 13.1559 16.8361 13.0512 16.8361 12.9455C16.8361 12.8397 16.8146 12.735 16.7729 12.6378C16.7313 12.5406 16.6703 12.4528 16.5937 12.3798Z" fill="#1E3A3D"/>
                </svg>
            </div>
            <a hx-boost="true" target="_blank" href="https://maps.app.goo.gl/uD8mjQmQrdmfDVLTA" class="btn btn--main-light display-mobile">Voir tous les avis</a>
        </div>
    </section>

@endsection
