@extends('base')

@section('title', 'À domicile')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')

    <section class="container__full-width c--primary-light bg--secondary-color-3 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Nos services <br> à domicile</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Que ce soit pour des ajustements de lunettes, des conseils personnalisés pour choisir la monture idéale, ou des examens de vue complets, notre équipe se déplace à votre convenance.
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
                        Des services optiques personnalisés pour le bien-être de vos résidents.
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
            <div class="grid grid--3 grid-gap--10 grid--1-mobile c--secondary-dark mt--10">
                <card class="relative reveal-0">
                    <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-phone.svg') }}" alt="Rendez-vous">
                    <div class="flex row gap--4">
                        <p class="h2 c--secondary-color-2">1.</p>
                        <p class="text--l">Nous prenons rendez-vous ensemble</p>
                    </div>
                    <p class="text--m">
                        Planifions ensemble votre rendez-vous pour une expérience optique personnalisée. Nous nous assurons de choisir un moment qui vous convient, pour vous offrir un service dédié et attentif.
                    </p>
                </card>
                <card class="relative reveal-1">
                    <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-car.svg') }}" alt="À domicile">
                    <div class="flex row gap--4">
                        <p class="h2 c--secondary-color-2">2.</p>
                        <p class="text--l">Nous nous déplaçons chez vous</p>
                    </div>
                    <p class="text--m">
                        Profitez de la commodité d'un service optique à domicile. Nous nous rendons chez vous pour vous fournir une consultation optique sans que vous ayez à vous déplacer.
                    </p>
                </card>
                <card class="relative reveal-2">
                    <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-exam.svg') }}" alt="Examen de vue">
                    <div class="flex row gap--4">
                        <p class="h2 c--secondary-color-2">3.</p>
                        <p class="text--l">Nous faisons le point sur votre vue</p>
                    </div>
                    <p class="text--m">
                        Lors de notre visite, nous effectuons un examen complet de votre vue. Nous évaluons avec précision votre correction et discutons de vos besoins spécifiques en matière de correction optique.
                    </p>
                </card>
                <card class="relative reveal-3">
                    <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-glasses.svg') }}" alt="Choisir vos lunettes">
                    <div class="flex row gap--4">
                        <p class="h2 c--secondary-color-2">4.</p>
                        <p class="text--l">Vous choisissez vos lunettes</p>
                    </div>
                    <p class="text--m">
                        Explorez notre large sélection de montures et de lentilles. Nous vous guidons dans le choix des lunettes qui correspondent à votre style, votre confort et vos préférences esthétiques.
                    </p>
                </card>
                <card class="relative reveal-4">
                    <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-delivery.svg') }}" alt="Fabrication des lunettes">
                    <div class="flex row gap--4">
                        <p class="h2 c--secondary-color-2">5.</p>
                        <p class="text--l">Nous faisons fabriquer vos lunettes</p>
                    </div>
                    <p class="text--m">
                        Une fois votre choix fait, nous nous occupons de faire fabriquer vos lunettes sur mesure. Nous veillons à ce que chaque détail soit pris en compte pour garantir une qualité optimale.
                    </p>
                </card>
                <card class="relative reveal-5">
                    <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-repair.svg') }}" alt="Livraison à domicile">
                    <div class="flex row gap--4">
                        <p class="h2 c--secondary-color-2">6.</p>
                        <p class="text--l">Vous êtes livrés ! Et on reste en contact</p>
                    </div>
                    <p class="text--m">
                        Dès que vos lunettes sont prêtes, nous vous les livrons personnellement. Nous nous assurons que vous êtes entièrement satisfait de votre équipement optique et nous restons disponibles pour les ajustements nécessaires.
                    </p>
                </card>
            </div>
        </div>
    </section>
    <section class="container__full-width">
        <img class="w--100 img img-banner reveal-0" src="{{ asset('/images/layers/6687eaa5d6cb2.webp') }}" alt="Livraison à domicile">
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
        <div class="container flex col gap--10">
            <h2>Nos engagements</h2>
            <div class="flex col w--100">
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--secondary-dark"></x-icon.dot-small>
                        <p class="text--l">Des prix justes</p>
                    </div>
                    <p class="text--m">
                        Nous vous proposons des prix justes pour des lunettes de qualité adaptées à votre budget.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--secondary-dark"></x-icon.dot-small>
                        <p class="text--l">Service France Garanti</p>
                    </div>
                    <p class="text--m">
                        Profitez de notre engagement pour vous garantir des solutions optiques fiables.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--secondary-dark"></x-icon.dot-small>
                        <p class="text--l">Tiers payant & 100% santé</p>
                    </div>
                    <p class="text--m">
                        Bénéficiez du tiers payant et du 100% santé pour des lunettes sans frais à votre charge.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--secondary-dark"></x-icon.dot-small>
                        <p class="text--l">Facilités de paiement</p>
                    </div>
                    <p class="text--m">
                        Découvrez nos facilités de paiement pour rendre l'achat de vos lunettes plus accessible.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--60 text-center w-100-mobile">Prenez rendez-vous dès maintenant pour vous ou pour votre proche</h2>
            <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-light mt--2">Je prends rendez-vous</a>
        </div>
    </section>
@endsection
