@extends('base')

@section('title', 'Nos lunettes')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')

    <section class="container__full-width c--primary-light bg--secondary-dark flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Découvrez toutes <br> nos lunettes</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
            </p>
        </div>
    </section>
    <section id="eyeglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Nos lunettes de vue</h2>
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
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/968ddc13459111bd78a5dc6a36d64e52.webp') }}" alt="">
            </div>
        </div>
    </section>
    <section id="sunglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/35cc4e12541ea3cb3bbe1aaac6b31993.webp') }}" alt="">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Nos lunettes de soleil</h2>
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
        </div>
    </section>
    <section id="sportglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Sport & Sécurité</h2>
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
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/5c035aad11e5c237f6dfafd1636c2b4f.webp') }}" alt="">
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center">
        <div class="pt--10 pb--10 flex col align--center gap--8 w--100">
            <h3>Nos marques adultes</h3>
            <div class="wrapper hide-mobile">
                <div class="infinite-scroll flex row align--center justify--start pb--10 pt--10">
                    <a href=""><img src="{{ asset('/images/brand/rayban.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/ralph.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/osmose.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/vogue.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/octika.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/marlone.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/frenchretro.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/etnia.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/andybrook.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/demetz.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/rayban.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/ralph.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/osmose.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/vogue.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/octika.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/marlone.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/frenchretro.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/etnia.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/andybrook.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/demetz.svg') }}" alt=""></a>
                </div>
            </div>
            <div class="wrapper-mobile display-mobile">
                <div class="flex row align--center justify--start pb--5 pt--5">
                    <a href=""><img src="{{ asset('/images/brand/rayban.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/ralph.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/osmose.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/vogue.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/octika.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/marlone.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/frenchretro.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/etnia.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/andybrook.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/demetz.svg') }}" alt=""></a>
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
    <section id="childglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/e2e1072acc6b5a86d3aeb59767ec0861.webp') }}" alt="">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Enfants</h2>
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
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center">
        <div class="pt--10 pb--10 flex col align--center gap--8 w--100">
            <h3>Nos marques enfants</h3>
            <div class="wrapper hide-mobile">
                <div class="infinite-scroll flex row align--center justify--start pb--10 pt--10">
                    <a href=""><img src="{{ asset('/images/brand/disney.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/rayban.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/avengers.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/kietla.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/reine-des-neiges.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/frenchretro.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/spiderman.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/demetz.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/disney.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/rayban.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/avengers.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/kietla.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/reine-des-neiges.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/frenchretro.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/spiderman.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/demetz.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/disney.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/rayban.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/avengers.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/kietla.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/reine-des-neiges.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/frenchretro.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/spiderman.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/demetz.svg') }}" alt=""></a>
                </div>
            </div>
            <div class="wrapper-mobile display-mobile">
                <div class="flex row align--center justify--start pb--5 pt--5">
                    <a href=""><img src="{{ asset('/images/brand/disney.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/rayban.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/avengers.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/kietla.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/reine-des-neiges.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/frenchretro.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/spiderman.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/images/brand/demetz.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--3 text-center align--center">
            <h3>Besoin de refaire contrôler votre vue ?</h3>
            <p class="text--s">passer l’examen de vue directement en magasin</p>
            <a hx-boost="true" href="{{ route('contact') }}#booking" class="btn btn--main-light mt--2">Je prends rendez-vous gratuitement</a>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/5cfa910ae28ccf873283e27b12f812cc.webp') }}" alt="">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Accessoires</h2>
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
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--60 w-100-mobile text-center">Venez nous voir en magasin, nos opticiens sont là pour vous conseiller.</h2>
            <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-light mt--2">Je prends contact</a>
        </div>
    </section>

@endsection
