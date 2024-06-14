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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
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
                        Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn more they will hit the button.
                    </p>
                </div>
            </div>
            <div class="flex row justify--end w--100">
                <div class="grid grid--3 grid--1-mobile  grid-gap--8-mobile grid-gap--2">
                    <div class="flex col align--start justify--start gap--3 block__about">
                        <img loading="lazy" class="img img__about" src="{{ asset('/images/layers/c9dc6aa53b4e6659a4484a3cbc012d58.webp') }}" alt="">
                        <p class="text--l">Laure</p>
                        <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="flex col align--start justify--start gap--3 block__about">
                        <img loading="lazy" class="img img__about" src="{{ asset('/images/layers/c9dc6aa53b4e6659a4484a3cbc012d58.webp') }}" alt="">
                        <p class="text--l">Quentin</p>
                        <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="flex col align--start justify--start gap--3 block__about">
                        <img loading="lazy" class="img img__about" src="{{ asset('/images/layers/c9dc6aa53b4e6659a4484a3cbc012d58.webp') }}" alt="">
                        <p class="text--l">Paul</p>
                        <p class="text--m">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-light">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-light"></x-icon.dot-small>
                        <p class="text--l">Service France Garanti</p>
                    </div>
                    <p class="text--m">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-light">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-light"></x-icon.dot-small>
                        <p class="text--l">Tiers payant & 100% santé</p>
                    </div>
                    <p class="text--m">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
                <div class="flex row col-mobile grid-gap--4-mobile gap--25 pt--4 pb--4 border--bottom border--primary-light">
                    <div class="flex row gap--3 align--center w--30 w-100-mobile">
                        <x-icon.dot-small class="icon__dot-small icon--primary-light"></x-icon.dot-small>
                        <p class="text--l">Facilités de paiement</p>
                    </div>
                    <p class="text--m">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <div class="container grid grid--3 grid--1-mobile grid-gap--10 text-center pt--10 pb--10 w--70 w-100-mobile">
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">Gravure des branches</p>
                <p class="text--s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">Verrier français</p>
                <p class="text--s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="flex col align--center gap--2">
                <x-icon.dot-medium class="icon__dot-medium icon--secondary-dark"></x-icon.dot-medium>
                <p class="text--l">2è paire offerte</p>
                <p class="text--s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
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
                <a href="" class="btn btn--main-light">Voir tous les avis</a>
            </div>
            <a href="" class="btn btn--main-light display-mobile">Voir tous les avis</a>
        </div>
    </section>

@endsection
