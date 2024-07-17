@extends('base')

@section('title', 'Nos lentilles')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')

    <section class="container__full-width c--primary-dark bg--secondary-color-1 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Découvrez toutes <br> nos lentilles</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Que vous optiez pour des lentilles journalières ou mensuelles, nous avons une solution adaptée à votre prescription et à votre mode de vie.
                Nos opticiens expérimentés sont disponibles pour vous guider dans le choix et l'adaptation de vos lentilles.
            </p>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Nous vous accompagnons pour bien choisir vos lentilles</h2>
                <p class="text--m">
                    Nous offrons une gamme complète de lentilles de contact (toriques, multi-focales ou sphériques) ainsi que des conseils
                    personnalisés pour vous aider à choisir et à adapter les lentilles qui correspondent le mieux
                    à vos besoins.
                    <br><br>
                    Nous nous engageons à vous fournir des conseils experts pour assurer votre confort et vous permettre de profiter pleinement de chaque journée avec vos lentilles.
                </p>
            </div>
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-right" src="{{ asset('/images/layers/b68c4d79b0cc54636969cdf1621e00ae.webp') }}" alt="Adaptation lentilles de contact">
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center">
        <div class="pt--10 pb--10 flex col align--center gap--8">
            <h3>Nos marques de lentilles</h3>
            <div class="wrapper hide-mobile">
                <div class="infinite-scroll flex row align--center justify--start pb--10 pt--10">
                    @include('main.layouts.template-parts.lenses-brand')
                    @include('main.layouts.template-parts.lenses-brand')
                    @include('main.layouts.template-parts.lenses-brand')
                </div>
            </div>
            <div class="wrapper-mobile display-mobile">
                <div class="flex row align--center justify--start pb--5 pt--5">
                    @include('main.layouts.template-parts.lenses-brand')
                </div>
            </div>
        </div>
    </section>
    <section class="container__full-width">
        <img class="w--100 img img-banner reveal-0" src="{{ asset('/images/layers/6687e96b4cd98.webp') }}" alt="Test de la vue">
    </section>
    <section class="container__full-width c--primary-dark bg--secondary-color-4 flex col align--center">
        <div class="container flex col gap--10">
            <h2>Notre accompagnement</h2>
            <div class="flex col w--100">
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Conseil</p>
                    </div>
                    <p class="text--m">
                        Recevez des conseils personnalisés pour choisir les lentilles parfaites.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Manipulation</p>
                    </div>
                    <p class="text--m">
                        Nous vous accompagnons pour la pose et le retrait de vos lentilles.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Adaptation</p>
                    </div>
                    <p class="text--m">
                        Nous nous assurons que vos lentilles soient adaptées à vos besoins.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Examen de vue</p>
                    </div>
                    <p class="text--m">
                        Planifiez un examen de vue complet pour ajuster vos lentilles selon votre correction.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-left" src="{{ asset('/images/layers/6696d216229aa.webp') }}" alt="Large choix d'accessoires de lunettes">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Nos produits d'entretien</h2>
                <p class="text--m">
                    Découvrez notre gamme complète de produits d'entretien pour lentilles de contact, disponibles dès maintenant dans nos magasins.
                    <br>(AO SEPT PLUS , MENICARE PURE et PROGENT, BINOVA NATURAL PLUS)
                    <br><br>
                    Que vous recherchiez des solutions de nettoyage, des étuis, ou des produits spécifiques pour lentilles souples ou rigides, vous trouverez tout ce dont vous avez besoin pour en prendre soin.
                </p>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--60 w-100-mobile text-center">Commander et récupérer vos lentilles en magasin</h2>
            <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-light mt--2">Je commande mes lentilles</a>
        </div>
    </section>

@endsection
