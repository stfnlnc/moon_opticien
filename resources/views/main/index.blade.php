@extends('base')

@section('subtitle', 'à Bizanos, aux portes de Pau')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')
<section class="relative w--100 h--100">
    <img loading="lazy" class="img img-header img-mobile w--100 h--100" src="{{ asset('/images/layers/2e68def2b88b.webp') }}" alt="Magasin de lunettes à Bizanos, proche de Pau">
    <div class="absolute pos-hor-center b--0 container flex col align--start justify--end gap--10">
        <h1 class="c--primary-light">
            MOON, <br>
            votre opticien lunetier indépendant <br>
            à Bizanos, aux portes de Pau
        </h1>
        <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-dark">Je prends rendez-vous</a>
    </div>
</section>
<section class="container__full-width c--primary-light bg--secondary-dark flex col align--center">
        <div class="container grid grid--4 grid--2-mobile grid-gap--5 text-center pt--10 pb--10">
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--primary-light"></x-icon.dot-medium>
                <p class="text--m">Des prix justes pour tous.tes</p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--primary-light"></x-icon.dot-medium>
                <p class="text--m">Service France garanti</p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--primary-light"></x-icon.dot-medium>
                <p class="text--m">Opticiens diplômés & passionnés</p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--primary-light"></x-icon.dot-medium>
                <p class="text--m">Au plus proche de vous</p>
            </div>
        </div>
</section>
<section class="container__full-width c--secondary-dark bg--secondary-color-4 flex col align--center">
    <div class="container">
        <div class="border--top border--secondary-color-3 c--secondary-color-3 pt--4 pb--4 flex row align--center justify--start gap--2 hide-mobile">
            <x-icon.dot-small class="icon__dot-small icon--secondary-color-3"></x-icon.dot-small>
            <p class="text--s">Nos services</p>
        </div>
        <div class="grid grid--2 grid-gap--14 grid--1-mobile grid-gap--8-mobile pt--10 pb--20">
            <h2>Des opticiens passionnés à votre service</h2>
            <p class="text--m">
                Moon Opticien Lunetier est un magasin d’optique indépendant situé dans le centre ville de
                Bizanos. Nous sommes trois opticiens diplômés, passionnés par notre métier et déterminés
                à vous offrir le meilleur service possible. <br>
            </p>
        </div>
        <div class="flex row align--start justify--end gap--2 w-100-mobile">
            <div class="flex col align--start justify--start gap--3 w-100-mobile reveal-right">
                <a class="link-img" hx-boost="true" href="{{ route('shop_service') }}">
                    <img loading="lazy" class="img img__service" src="{{ asset('/images/layers/728ebaf8666162f73edf66e0bd3146d5.webp') }}" alt="Choisir vos lunettes ou vos lentilles de contact">
                </a>
                <div class="flex col gap--3 img__service h--fit-content">
                    <p class="text--l">Services en Magasin</p>
                    <p class="text--m">Venez découvrir une expertise unique dans notre magasin à Bizanos.</p>
                    <a hx-boost="true" href="{{ route('shop_service') }}" class="btn btn--secondary-light">Découvrir</a>
                </div>
            </div>
            <div class="flex col align--start justify--start gap--3 w-100-mobile reveal-right">
                <a class="link-img" hx-boost="true" href="{{ route('home_service') }}">
                    <img loading="lazy" class="img img__service" src="{{ asset('/images/layers/a7e72401fb434c9febabc88ff04202ae.webp') }}" alt="Consultation et prescription à domicile">
                </a>
                <div class="flex col gap--3 img__service h--fit-content">
                    <p class="text--l">Services à Domicile</p>
                    <p class="text--m">Pour votre confort et votre tranquillité, nous nous déplaçons au plus près de vous.</p>
                    <a hx-boost="true" href="{{ route('home_service') }}" class="btn btn--secondary-light">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container__full-width c--secondary-dark bg--primary-light flex col align--center">
    <div class="container">
        <div class="hide-mobile border--top border--secondary-color-3 c--secondary-color-3 pt--4 pb--4 flex row align--center justify--start gap--2">
            <x-icon.dot-small class="icon__dot-small icon--secondary-color-3"></x-icon.dot-small>
            <p class="text--s">À propos</p>
        </div>
        <div class="grid grid--2 grid-gap--14 grid--1-mobile grid-gap--8-mobile pt--10 pb--20">
            <h2>Un opticien indépendant, c’est un opticien au plus proche de vous.</h2>
            <div class="flex col align--start gap--10">
                <p class="text--m">
                    Forts de nos expériences variées et complémentaires, nous mettons à votre disposition
                    notre expertise pour vous guider dans le choix de vos lunettes, lentilles de contact et autres
                    solutions optiques. <br>
                </p>
                <a hx-boost="true" href="{{ route('about') }}" class="btn btn--main-light">Qui sommes-nous ?</a>
            </div>
        </div>
        <div class="flex row align--start justify--space-between gap--4 w--100">
                <img loading="lazy" class="img img-left w-100-mobile w--30 reveal-0" src="{{ asset('/images/layers/d6f527b6d5f28d685792184f72ccd2ae.webp') }}" alt="Magasin d'optique centre ville de Bizanos">
                <img loading="lazy" class="img img-center hide-mobile w--30 reveal-1" src="{{ asset('/images/layers/1624725b99dc68b3e6c2bc9dd5722146.webp') }}" alt="Conseil, ajustement et réparation de lunettes aux portes de Pau">
                <img loading="lazy" class="img img-right hide-mobile w--30 reveal-2" src="{{ asset('/images/layers/5c3d15465775ba42a138b0208f4474f2.webp') }}" alt="Lunettes de vue, solaire ou de sport">
        </div>
    </div>
</section>
<section class="container__full-width c--secondary-dark bg--secondary-color-4 flex col align--center">
    <div class="container">
        <div class="hide-mobile border--top border--secondary-color-3 c--secondary-color-3 pt--4 pb--4 flex row align--center justify--start gap--2">
            <x-icon.dot-small class="icon__dot-small icon--secondary-color-3"></x-icon.dot-small>
            <p class="text--s">En magasin</p>
        </div>
        <div class="grid grid--2 grid-gap--14 grid--1-mobile grid-gap--8-mobile pt--10 pb--20">
            <h2>Des conseils personnalisés dans notre magasin, à Bizanos.</h2>
            <div class="flex col align--start gap--10">
                <p class="text--m">
                    Notre objectif est de vous offrir un service de qualité, personnalisé et à la hauteur de vos attentes. Chaque client est unique et mérite une attention particulière. Nous prenons le temps de comprendre vos besoins et préférences pour vous proposer des solutions sur mesure.
                </p>
                <a hx-boost="true" href="{{ route('shop_service') }}" class="btn btn--main-light">je découvre les services en magasin</a>
            </div>
        </div>
        <div class="flex row align--end justify--start gap--16">
            <img loading="lazy" class="img img__shop hide-mobile" src="{{ asset('/images/layers/6a98c021ca22c8980f02f19c289b96de.webp') }}" alt="Examen de la vue et prescription de lunettes">
            <div class="grid grid--2 grid-gap--10 grid-gap--6-mobile">
                <div class="flex col gap--3 reveal-0">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-discuss.svg') }}" alt="Conseil">
                    <div class="flex col gap--1">
                        <p class="text--l">Être conseillé</p>
                        <p class="text--s">
                            Nous offrons des conseils personnalisés pour vous aider à trouver la monture idéale.
                        </p>
                    </div>
                </div>
                <div class="flex col gap--3 reveal-1">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-rule.svg') }}" alt="Ajustement">
                    <div class="flex col gap--1">
                        <p class="text--l">Ajuster</p>
                        <p class="text--s">
                            Nous ajustons vos lunettes, lentilles de contact et autres solutions optiques pour un confort optimal.
                        </p>
                    </div>
                </div>
                <div class="flex col gap--3 reveal-2">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-recycle.svg') }}" alt="Recyclage">
                    <div class="flex col gap--1">
                        <p class="text--l">Recycler</p>
                        <p class="text--s">
                            Nous offrons un service de collecte de lunettes afin de donner une seconde vie à vos anciennes montures.
                        </p>
                    </div>
                </div>
                <div class="flex col gap--3 reveal-3">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-favorite.svg') }}" alt="Personnalisation">
                    <div class="flex col gap--1">
                        <p class="text--l">Personnaliser</p>
                        <p class="text--s">
                            Nous proposons la gravure et des accessoires qui s'adaptent parfaitement à votre style.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
    <div class="container pt--10 pb--10 flex col align--center gap--8">
        <div class="grid grid--2 grid-gap--10 text-center w--70 w-100-mobile">
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">Tiers payant</p>
                <p class="text--s">N'avancez plus les frais de vos lunettes, on s'occupe de tout. *</p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">100% santé</p>
                <p class="text--s">Bénéficiez de lunettes de qualité sans aucun reste à charge. *</p>
            </div>
        </div>
        <p class="align--self-end">* Voir détails en magasin</p>
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
                <a hx-boost="true" href="{{ route('home_service') }}" class="btn btn--main-dark">je découvre les services à domicile</a>
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
<section class="container__full-width c--secondary-dark bg--secondary-color-4 flex col align--center">
    <div class="container">
        <div class="hide-mobile border--top border--secondary-color-3 c--secondary-color-3 pt--4 pb--4 flex row align--center justify--start gap--2">
            <x-icon.dot-small class="icon__dot-small icon--secondary-color-3"></x-icon.dot-small>
            <p class="text--s">Nos lunettes</p>
        </div>
        <div class="grid grid--2 grid-gap--14 grid--1-mobile grid-gap--8-mobile pt--10 pb--20">
            <h2>Découvrez notre sélection de plus grandes marques</h2>
            <div class="flex col align--start gap--10">
                <p class="text--m">
                    Nous mettons un point d'honneur à vous offrir un choix diversifié et de qualité supérieure, allant des classiques intemporels aux dernières tendances. Que vous recherchiez des lunettes de vue élégantes, des lunettes de soleil haut de gamme ou des montures innovantes, notre collection saura combler vos attentes.
                </p>
                <a hx-boost="true" href="{{ route('glasses') }}" class="btn btn--main-light">Toutes les lunettes</a>
            </div>
        </div>
        <div class="flex row justify--end w--100">
            <div class="grid grid--4 grid-gap--2 grid--2-mobile">
                <div class="flex col align--start justify--start gap--3 block__glasses reveal-0">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#eyeglasses">
                        <img loading="lazy" class="img img__glasses" src="{{ asset('/images/layers/ac59211ea58ee6b9259ed733452a040d.webp') }}" alt="Lunettes de vue">
                    </a>
                    <p class="text--l">Vue</p>
                    <p class="text--m">Associez confort et style pour le quotidien.</p>
                    <a hx-boost="true" href="{{ route('glasses') }}#eyeglasses" class="btn btn--secondary-light">Découvrir</a>
                </div>
                <div class="flex col align--start justify--start gap--3 block__glasses reveal-1">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#sunglasses">
                        <img class="img img__glasses" src="{{ asset('/images/layers/0fef3d1f982b33e7b22c1571eecc4453.webp') }}" alt="Lunettes de soleil">
                    </a>
                    <p class="text--l">Solaires</p>
                    <p class="text--m">Protégez vos yeux du soleil avec style.</p>
                    <a hx-boost="true" href="{{ route('glasses') }}#sunglasses" class="btn btn--secondary-light">Découvrir</a>
                </div>
                <div class="flex col align--start justify--start gap--3 block__glasses reveal-2">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#sportglasses">
                        <img loading="lazy" class="img img__glasses" src="{{ asset('/images/layers/fb49e3f66990789c63e31a0c6cc6af7d.webp') }}" alt="Lunettes de sport et sécurité">
                    </a>
                    <p class="text--l">Sport</p>
                    <p class="text--m">Performez dans toutes vos activités.</p>
                    <a hx-boost="true" href="{{ route('glasses') }}#sportglasses" class="btn btn--secondary-light">Découvrir</a>
                </div>
                <div class="flex col align--start justify--start gap--3 block__glasses reveal-3">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#childglasses">
                        <img loading="lazy" class="img img__glasses" src="{{ asset('/images/layers/5492d5c3f99aca5a8d72c79736f9317c.webp') }}" alt="Lunettes pour enfant">
                    </a>
                    <p class="text--l">Enfants</p>
                    <p class="text--m">Des montures accompagner leurs aventures.</p>
                    <a hx-boost="true" href="{{ route('glasses') }}#childglasses" class="btn btn--secondary-light">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-image: linear-gradient(rgba(94,117,103,0.98), rgba(94,117,103,0.98)), url('{{ asset('/images/layers/a7e72401fb434c9febabc88ff04202aeL.webp') }}'); background-size: cover; background-position: 100% 30%;" class="relative container__full-width c--primary-light bg--secondary-color-3 flex col align--center">
    <div class="container">
        <div class="hide-mobile border--top border--secondary-color-2 c--secondary-color-2 pt--4 pb--4 flex row align--center justify--start gap--2">
            <x-icon.dot-small class="icon__dot-small icon--secondary-color-2"></x-icon.dot-small>
            <p class="text--s">Nos lentilles</p>
        </div>
        <div class="grid grid--2 grid-gap--14 grid--1-mobile grid-gap--8-mobile pt--10 pb--20">
            <h2>Commander et récupérer vos lentilles en magasin</h2>
            <div class="flex col align--start gap--10">
                <p class="text--m">
                    Pour une commande rapide et pratique, remplissez notre formulaire et récupérez vos lentilles directement en magasin.
                </p>
                <div class="flex col gap--2">
                    <a hx-boost="true" href="{{ route('contact') }}#orderlenses" class="btn btn--main-dark">Je commande mes lentilles</a>
                    <a hx-boost="true" href="{{ route('lenses') }}" class="btn btn--secondary-dark">En savoir plus</a>
                </div>
            </div>
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
                    @if(strlen($review['text']) < 300)
                        {{ $review['text'] }}
                    @else
                        {{ substr($review['text'], 0, strpos($review['text'], ' ', 280)) }} [...]
                    @endif
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
