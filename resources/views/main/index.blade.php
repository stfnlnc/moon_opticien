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
    <div class="absolute t--0 l--0 w--100 h--100" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0.6))"></div>
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
        <p class="align--self-end">* Voir conditions en magasin</p>
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
        @include('main.layouts.template-parts.home_service')
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
                    <p class="text--m">Des montures pour accompagner leurs aventures.</p>
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
@include('main.layouts.template-parts.review')
@endsection
