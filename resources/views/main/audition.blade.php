@extends('base')

@section('title', 'Audition')

@section('meta')
    <meta property="og:description" content="Que ce soit pour des ajustements de lunettes, des conseils personnalisés pour choisir la monture idéale, ou des examens de vue complets, notre équipe se déplace au plus proche de vous."/>
    <meta name="description" content="Que ce soit pour des ajustements de lunettes, des conseils personnalisés pour choisir la monture idéale, ou des examens de vue complets, notre équipe se déplace au plus proche de vous.">
    <meta property="og:url" content="{{ route('home_service') }}"/>
@endsection

@section('content')

    <section class="container__full-width c--primary-light bg--secondary-color-3 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Nos solutions <br> auditives</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Que vous ayez besoin d’un simple contrôle ou d’un appareil auditif, nous avons la solution adaptée à votre profil et à vos besoins quotidiens. Notre audioprothésiste vous accompagne dans le choix, l’essai et l’adaptation de votre équipement, en veillant à votre confort et à la
                qualité de votre écoute.
            </p>
        </div>
    </section>
    <section
            class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Nous vous accompagnons pour préserver votre audition</h2>
                <p class="text--m">
                    Nous proposons un service complet pour prendre soin de votre santé auditive : bilan gratuit, essais d’appareils, adaptation, suivi, nettoyage et réparation. Chaque mercredi dans notre magasin de Denguin, notre audioprothésiste vous conseille et vous guide vers la solution
                    auditive la plus adaptée à votre mode de vie.
                    <br><br>
                    Nous mettons un point d’honneur à vous offrir un accompagnement personnalisé et des conseils experts afin de garantir votre confort d’écoute au quotidien et de vous permettre de profiter pleinement de chaque moment.
                </p>
            </div>
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-right" src="{{ asset('/images/layers/audition-1.jpg') }}" alt="Service à domicile">
            </div>
        </div>
    </section>
    <section class="container__full-width c--primary-dark bg--secondary-light flex col align--center">
        <div class="container flex col align--center gap--10 border--top">
            <h2>Nos marques de solutions auditives</h2>
            <a target="_blank" href="https://www.starkey.fr/"><img width="200" src="{{ asset('/images/brand/starkey.webp') }}" alt="Starkey"></a>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <div class="container pt--10 pb--10 flex col align--center gap--8">
            <div class="grid grid--2 grid--1-mobile grid-gap--10 text-center w--80 w-100-mobile">
                <div class="flex col align--center gap--2">
                    <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                    <p class="text--l">Tiers payant *</p>
                    <p class="text--s c--secondary-color-3">
                        N'avancez plus les frais de vos solutions auditives, on s'occupe de tout.
                    </p>
                </div>
                <div class="flex col align--center gap--2">
                    <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                    <p class="text--l">100% santé *</p>
                    <p class="text--s c--secondary-color-3">
                        Bénéficiez de solutions auditives de qualité sans aucun reste à charge.
                    </p>
                </div>
            </div>
            <p class="align--self-start border--top border--secondary-color-3 c--secondary-color-3 pt--1">*Conditions de prise en charge: Pour un premier appareillage, une ordonnance d’un ORL est nécessaire. Pour les renouvellements, une prescription de votre médecin généraliste suffit. Le
                remplacement de
                vos appareils
                auditifs est possible tous les 4
                ans ou avec
                dérogation en cas de perte auditive importante.</p>
        </div>
    </section>
    <section class="container__full-width m--0 p--0">
        <img class="w--100 img img-banner reveal-0" src="{{ asset('/images/layers/6687eaa5d6cb2.webp') }}" alt="Livraison à domicile">
    </section>
    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <div class="container pt--10 pb--10 flex col align--center gap--8">
            <div class="grid grid--2 grid--1-mobile grid-gap--10 text-center w--80 w-100-mobile">
                <div class="flex col align--center gap--2">
                    <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                    <p class="text--l">Une sélection de produits pour tous.tes</p>
                    <p class="text--s c--secondary-color-3">
                        Piles, produits d'entretien, bouchons d'oreilles pour le bruit, la musique, la piscine...
                    </p>
                </div>
                <div class="flex col align--center gap--2">
                    <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                    <p class="text--l">Garantie électronique
                        de 4 ans</p>
                    <p class="text--s c--secondary-color-3">
                        Profitez d’une garantie électronique pouvant aller jusqu’à 4 ans sur tous vos appareils auditifs
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container__full-width c--primary-dark bg--secondary-color-4 flex col align--center">
        <div class="container flex col gap--10">
            <h2>Nos services</h2>
            <div class="flex col w--100">
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Bilan auditif gratuit</p>
                    </div>
                    <p class="text--m w--70">
                        Profitez d’un contrôle complet de votre audition gratuitement dans notre magasin de Denguin.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">1 mois d’essai gratuit</p>
                    </div>
                    <p class="text--m w--70">
                        Testez vos appareils et bénéficiez d’un essai gratuit durant 1 mois.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Un audioprothésiste diplômé</p>
                    </div>
                    <p class="text--m w--70">
                        Nous faisons appel à un audioprothésiste qualifié, présent sur rendez-vous chaque mercredi à Denguin, pour vous guider vers la solution la plus adaptée.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Suivi, nettoyage et réparation</p>
                    </div>
                    <p class="text--m w--70">
                        Nous assurons le suivi, le nettoyage et la réparation de vos appareils pour garantir leur performance et votre confort au quotidien.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
            class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--50 text-center w-100-mobile">Venez nous voir en magasin, notre équipe est là pour vous conseiller.</h2>
            <p class="text--l">Rendez-vous uniquement les mercredis à Denguin</p>
            <a href="{{ route('contact') }}" class="btn btn--main-light mt--2">Je prends rendez-vous</a>
        </div>
    </section>
@endsection
