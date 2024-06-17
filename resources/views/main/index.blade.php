@extends('base')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')
<section class="relative w--100 h--100">
    <img loading="lazy" class="img w--100 h--100 absolute t--0 l--0" src="{{ asset('/images/layers/2e68def2b88b.webp') }}" alt="">
    <div class="absolute pos-hor-center b--0 container flex col align--start justify--end gap--10">
        <h1 class="c--primary-light">
            MOON, <br>
            votre opticien lunetier indépendant <br>
            aux portes de Pau
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
                Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn more they will hit the button.
            </p>
        </div>
        <div class="flex row align--start justify--end gap--2 w-100-mobile">
            <div class="flex col align--start justify--start gap--3 w-100-mobile">
                <a class="link-img" hx-boost="true" href="{{ route('shop_service') }}">
                    <img loading="lazy" class="img img__service" src="{{ asset('/images/layers/728ebaf8666162f73edf66e0bd3146d5.webp') }}" alt="">
                </a>
                <p class="text--l">Services en Magasin</p>
                <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a hx-boost="true" href="{{ route('shop_service') }}" class="btn btn--secondary-light">Découvrir</a>
            </div>
            <div class="flex col align--start justify--start gap--3 w-100-mobile">
                <a class="link-img" hx-boost="true" href="{{ route('home_service') }}">
                    <img loading="lazy" class="img img__service" src="{{ asset('/images/layers/a7e72401fb434c9febabc88ff04202ae.webp') }}" alt="">
                </a>
                <p class="text--l">Services à Domicile</p>
                <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a hx-boost="true" href="{{ route('home_service') }}" class="btn btn--secondary-light">Découvrir</a>
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
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn more they will hit the button.
                </p>
                <a hx-boost="true" href="{{ route('about') }}" class="btn btn--main-light">Qui sommes-nous ?</a>
            </div>
        </div>
        <div class="flex row align--start gap--4 w--100">
                <img loading="lazy" class="img w-100-mobile w--80" src="{{ asset('/images/layers/d6f527b6d5f28d685792184f72ccd2ae.webp') }}" alt="">
                <img loading="lazy" class="img hide-mobile w--100" src="{{ asset('/images/layers/1624725b99dc68b3e6c2bc9dd5722146.webp') }}" alt="">
                <img loading="lazy" class="img hide-mobile w--100" src="{{ asset('/images/layers/5c3d15465775ba42a138b0208f4474f2.webp') }}" alt="">
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
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn more they will hit the button.
                </p>
                <a hx-boost="true" href="{{ route('shop_service') }}" class="btn btn--main-light">je découvre les services en magasin</a>
            </div>
        </div>
        <div class="flex row align--end justify--start gap--16">
            <img loading="lazy" class="img img__shop hide-mobile" src="{{ asset('/images/layers/6a98c021ca22c8980f02f19c289b96de.webp') }}" alt="">
            <div class="grid grid--2 grid-gap--10 grid-gap--6-mobile">
                <div class="flex col gap--3">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-discuss.svg') }}" alt="">
                    <div class="flex col gap--1">
                        <p class="text--l">Être conseillé</p>
                        <p class="text--s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="flex col gap--3">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-rule.svg') }}" alt="">
                    <div class="flex col gap--1">
                        <p class="text--l">Ajuster</p>
                        <p class="text--s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="flex col gap--3">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-recycle.svg') }}" alt="">
                    <div class="flex col gap--1">
                        <p class="text--l">Recycler</p>
                        <p class="text--s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="flex col gap--3">
                    <img loading="lazy" class="icon--large" src="{{ asset('/images/icon/large/icon-favorite.svg') }}" alt="">
                    <div class="flex col gap--1">
                        <p class="text--l">Personnaliser</p>
                        <p class="text--s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
    <div class="container grid grid--2 grid-gap--10 text-center pt--10 pb--10 w--70 w-100-mobile">
        <div class="flex col align--center gap--2">
            <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
            <p class="text--l">Tiers payant</p>
            <p class="text--s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="flex col align--center gap--2">
            <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
            <p class="text--l">100% santé</p>
            <p class="text--s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
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
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn more they will hit the button.
                </p>
                <a hx-boost="true" href="{{ route('home_service') }}" class="btn btn--main-dark">je découvre les services à domicile</a>
            </div>
        </div>
        <div class="grid grid--3 grid-gap--10 grid--1-mobile c--secondary-dark mt--10">
            <card class="relative">
                <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-phone.svg') }}" alt="">
                <div class="flex row gap--4">
                    <p class="h2 c--secondary-color-2">1.</p>
                    <p class="text--l">Nous prenons rendez-vous ensemble</p>
                </div>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                </p>
            </card>
            <card class="relative">
                <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-car.svg') }}" alt="">
                <div class="flex row gap--4">
                    <p class="h2 c--secondary-color-2">2.</p>
                    <p class="text--l">Nous nous déplaçons chez vous</p>
                </div>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                </p>
            </card>
            <card class="relative">
                <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-exam.svg') }}" alt="">
                <div class="flex row gap--4">
                    <p class="h2 c--secondary-color-2">3.</p>
                    <p class="text--l">Nous faisons le point sur votre vue</p>
                </div>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                </p>
            </card>
            <card class="relative">
                <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-glasses.svg') }}" alt="">
                <div class="flex row gap--4">
                    <p class="h2 c--secondary-color-2">4.</p>
                    <p class="text--l">Vous choisissez vos lunettes</p>
                </div>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                </p>
            </card>
            <card class="relative">
                <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-delivery.svg') }}" alt="">
                <div class="flex row gap--4">
                    <p class="h2 c--secondary-color-2">5.</p>
                    <p class="text--l">Nous faisons fabriquer vos lunettes</p>
                </div>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                </p>
            </card>
            <card class="relative">
                <img loading="lazy" class="absolute t--0 l--0 img__icon" src="{{ asset('/images/icon/large/icon-repair.svg') }}" alt="">
                <div class="flex row gap--4">
                    <p class="h2 c--secondary-color-2">6.</p>
                    <p class="text--l">Vous êtes livrés ! Et on reste en contact</p>
                </div>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
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
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn more they will hit the button.
                </p>
                <a hx-boost="true" href="{{ route('glasses') }}" class="btn btn--main-light">Toutes les lunettes</a>
            </div>
        </div>
        <div class="flex row justify--end w--100">
            <div class="grid grid--4 grid-gap--2 grid--2-mobile">
                <div class="flex col align--start justify--start gap--3 block__glasses">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#eyeglasses">
                        <img loading="lazy" class="img img__glasses" src="{{ asset('/images/layers/ac59211ea58ee6b9259ed733452a040d.webp') }}" alt="">
                    </a>
                    <p class="text--l">Vue</p>
                    <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a hx-boost="true" href="{{ route('glasses') }}#eyeglasses" class="btn btn--secondary-light">Découvrir</a>
                </div>
                <div class="flex col align--start justify--start gap--3 block__glasses">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#sunglasses">
                        <img class="img img__glasses" src="{{ asset('/images/layers/0fef3d1f982b33e7b22c1571eecc4453.webp') }}" alt="">
                    </a>
                    <p class="text--l">Solaires</p>
                    <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a hx-boost="true" href="{{ route('glasses') }}#sunglasses" class="btn btn--secondary-light">Découvrir</a>
                </div>
                <div class="flex col align--start justify--start gap--3 block__glasses">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#sportglasses">
                        <img loading="lazy" class="img img__glasses" src="{{ asset('/images/layers/fb49e3f66990789c63e31a0c6cc6af7d.webp') }}" alt="">
                    </a>
                    <p class="text--l">Sport</p>
                    <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a hx-boost="true" href="{{ route('glasses') }}#sportglasses" class="btn btn--secondary-light">Découvrir</a>
                </div>
                <div class="flex col align--start justify--start gap--3 block__glasses">
                    <a class="link-img" hx-boost="true" href="{{ route('glasses') }}#childglasses">
                        <img loading="lazy" class="img img__glasses" src="{{ asset('/images/layers/5492d5c3f99aca5a8d72c79736f9317c.webp') }}" alt="">
                    </a>
                    <p class="text--l">Enfants</p>
                    <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn more they will hit the button.
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
    <div class="container">
        <div class="hide-mobile flex row align--center justify--space-between border--top border--secondary-color-3 ">
            <div class="c--secondary-color-3 pt--4 pb--4 flex row align--center justify--start gap--2">
                <x-icon.dot-small class="icon__dot-small icon--secondary-color-3"></x-icon.dot-small>
                <p class="text--s">Ce que disent nos clients</p>
            </div>
            <a hx-boost="true" target="_blank" href="https://maps.app.goo.gl/uD8mjQmQrdmfDVLTA" class="btn btn--main-light">Voir tous les avis</a>
        </div>
        <a hx-boost="true" target="_blank" href="https://maps.app.goo.gl/uD8mjQmQrdmfDVLTA" class="btn btn--main-light display-mobile">Voir tous les avis</a>
    </div>
</section>
@endsection
