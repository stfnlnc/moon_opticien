@extends('base')

@section('content')

    <section class="container__full-width c--primary-dark bg--secondary-color-1 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5">
            <h1 class="uppercase">Découvrez toutes <br> nos lentilles</h1>
            <p class="text--m w--50 align--self-end">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
            </p>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pr--0 flex row gap--30">
            <div class="flex col align--start justify--center gap--8 container pl--0">
                <h2>Nous vos accompagnons pour bien choisir vos lentilles</h2>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.Highlight the Unique Selling Proposition (USP) with a short
                    summary of the main feature and how it benefits customers. The idea here is to keep it short and
                    direct. If the visitor wishes to learn more they will hit the button.
                    <br><br>
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it
                    benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn
                    more they will hit the button.
                </p>
            </div>
            <div class="img__hero w--60">
                <img class="img" src="{{ asset('/images/layers/exam-store.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center">
        <div class="pt--10 pb--10 flex col align--center gap--8">
            <h3>Nos marques de lentilles</h3>
            <div>

            </div>
        </div>
    </section>
    <section class="container__full-width c--primary-dark bg--secondary-color-4 flex col align--center">
        <div class="container flex col gap--10">
            <h2>Notre accompagnement</h2>
            <div class="flex col w--100">
                <div class="flex row gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Conseil</p>
                    </div>
                    <p class="text--m">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
                <div class="flex row gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Manipulation</p>
                    </div>
                    <p class="text--m">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
                <div class="flex row gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Adaptation</p>
                    </div>
                    <p class="text--m">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
                <div class="flex row gap--25 pt--4 pb--4 border--bottom border--secondary-dark">
                    <div class="flex row gap--3 align--center w--30">
                        <x-icon.dot-small class="icon__dot-small icon--primary-dark"></x-icon.dot-small>
                        <p class="text--l">Examen de vue</p>
                    </div>
                    <p class="text--m">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--60 text-center">Commander et récupérer vos lentilles en magasin</h2>
            <a href="" class="btn btn--main-light mt--2">Je commande mes lentilles</a>
        </div>
    </section>

@endsection
