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
                Que vous recherchiez des lunettes de vue élégantes, des lunettes de soleil tendance ou des montures sportives, nous avons ce qu'il vous faut. Notre équipe d'opticiens qualifiés est là pour vous guider dans le choix des montures qui correspondent à votre style de vie et à votre personnalité.
            </p>
        </div>
    </section>
    <section id="eyeglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Nos lunettes de vue</h2>
                <p class="text--m">
                    Découvrez notre large gamme de lunettes de vue, conçues pour allier style et confort visuel.
                    <br>
                    Que vous recherchiez des montures classiques et intemporelles ou des designs plus contemporains, nous avons ce qu'il vous faut.
                    <br><br>
                    Nos opticiens expérimentés sont là pour vous offrir des conseils personnalisés et vous aider à choisir la paire de lunettes qui correspond parfaitement à votre style.
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
                    Découvrez notre collection de lunettes de soleil, où le style rencontre la protection.
                    Que vous recherchiez des lunettes de soleil tendance pour affirmer votre style ou des modèles fonctionnels pour une protection efficace contre les rayons UV, nous avons ce qu'il vous faut.
                    <br><br>
                    Nos lunettes de soleil sont soigneusement sélectionnées par nos experts pour leur qualité, leur confort et leur design élégant. Que ce soit pour une escapade estivale ou pour une utilisation quotidienne, nos opticiens sont là pour vous aider à trouver la paire parfaite
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
                    Découvrez notre gamme spécialisée de lunettes sportives conçues pour allier performance et sécurité.
                    <br><br>
                    Nos lunettes sport offrent une protection optimale contre les impacts tout en garantissant un confort maximal et une vision claire. Que vous pratiquiez le cyclisme, la course à pied, le ski ou d'autres activités sportives, nous avons des modèles adaptés à vos besoins spécifiques.
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
    <section id="childglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/e2e1072acc6b5a86d3aeb59767ec0861.webp') }}" alt="">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Enfants</h2>
                <p class="text--m">
                    Découvrez notre sélection de lunettes pour enfants, conçues pour allier style, confort et durabilité.
                    <br><br>
                    Nos montures pour enfants sont spécialement conçues pour résister à leur quotidien dynamique tout en assurant une vision claire. Nous proposons une variété de designs colorés et amusants, adaptés à tous les âges et toutes les aventures.
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
                    Nous proposons une sélection variée d'accessoires tels que des étuis à lunettes, des cordons et chaînes pour lunettes, ainsi que des produits d'entretien pour garder vos lunettes en parfait état.
                    <br><br>
                    Venez nous rendre visite pour découvrir nos accessoires et ajouter une touche pratique et stylée à votre quotidien.
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
