@extends('base')

@section('title', 'Nos lunettes')

@section('meta')
    <meta property="og:description" content="Que vous recherchiez des lunettes de vue élégantes, des lunettes de soleil tendance ou des montures sportives, nous avons ce qu'il vous faut. Notre équipe d'opticiens qualifiés est là pour vous guider dans le choix des montures qui correspondent à votre style de vie et à votre personnalité." />
    <meta name="description" content="Que vous recherchiez des lunettes de vue élégantes, des lunettes de soleil tendance ou des montures sportives, nous avons ce qu'il vous faut. Notre équipe d'opticiens qualifiés est là pour vous guider dans le choix des montures qui correspondent à votre style de vie et à votre personnalité.">
    <meta property="og:url" content="{{ route('glasses') }}" />
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
                <img loading="lazy" class="img reveal-right" src="{{ asset('/images/layers/968ddc13459111bd78a5dc6a36d64e52.webp') }}" alt="Large choix de lunettes de vue">
            </div>
        </div>
    </section>
    <section id="sunglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-left" src="{{ asset('/images/layers/35cc4e12541ea3cb3bbe1aaac6b31993.webp') }}" alt="Large choix de lunettes de soleil">
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
                <img loading="lazy" class="img reveal-right" src="{{ asset('/images/layers/5c035aad11e5c237f6dfafd1636c2b4f.webp') }}" alt="Large choix de lunettes de sport et sécurité">
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center">
        <div class="pt--10 pb--10 flex col align--center gap--8 w--100">
            <h3>Nos marques adultes</h3>
            <div class="wrapper hide-mobile">
                <div class="infinite-scroll flex row align--center justify--start pb--10 pt--10">
                    @include('main.layouts.template-parts.adult-brand')
                    @include('main.layouts.template-parts.adult-brand')
                </div>
            </div>
            <div class="wrapper-mobile display-mobile">
                <div class="flex row align--center justify--start pb--5 pt--5">
                    @include('main.layouts.template-parts.adult-brand')
                </div>
            </div>
        </div>
    </section>
    @include('main.layouts.template-parts.engagement', ['mode' => 'dark'])
    @include('main.layouts.template-parts.service')
    <section id="childglasses"
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-left" src="{{ asset('/images/layers/e2e1072acc6b5a86d3aeb59767ec0861.webp') }}" alt="Large choix de lunettes enfant">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Enfants</h2>
                <p class="text--m">
                    Découvrez notre sélection de lunettes pour enfants, conçues pour allier style, confort et durabilité.
                    <br><br>
                    Nos montures pour enfants sont spécialement conçues pour résister à leur quotidien dynamique tout en assurant une vision claire. Nous proposons une variété de designs colorés et amusants, adaptés à tous les âges et toutes les aventures.
                    <br><br>
                    <strong>La gravure est offerte</strong> pour ajouter leur nom sur les branches afin que les lunettes de vos enfants ne soient plus perdues dans la cour de récré.
                </p>
            </div>
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center">
        <div class="pt--10 pb--10 flex col align--center gap--8 w--100">
            <h3>Nos marques enfants</h3>
            <div class="wrapper hide-mobile">
                <div class="infinite-scroll flex row align--center justify--start pb--10 pt--10">
                    @include('main.layouts.template-parts.child-brand')
                    @include('main.layouts.template-parts.child-brand')
                    @include('main.layouts.template-parts.child-brand')
                </div>
            </div>
            <div class="wrapper-mobile display-mobile">
                <div class="flex row align--center justify--start pb--5 pt--5">
                    @include('main.layouts.template-parts.child-brand')
                </div>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--3 text-center align--center">
            <h3>Besoin de faire contrôler votre vue ?</h3>
            <p class="text--s">Passer l’examen de vue directement en magasin</p>
            <a hx-boost="true" href="{{ route('contact') }}#booking" class="btn btn--main-light mt--2">Je prends rendez-vous gratuitement</a>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img reveal-left" src="{{ asset('/images/layers/5cfa910ae28ccf873283e27b12f812cc.webp') }}" alt="Large choix d'accessoires de lunettes">
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
