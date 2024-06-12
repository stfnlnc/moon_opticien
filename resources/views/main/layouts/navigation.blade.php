@php
    $route = request()->route()->getName();
@endphp
<nav class="fixed t--0 l--0 w--100">
    <div id="nav-pop" class="container__full-width flex col align--center bg--secondary-dark c--primary-light hide-mobile">
        <div class="container pt--2 pb--2 flex row align--center justify--space-between">
            <div class="flex row gap--2 align--center justify--start">
                <x-icon.instagram class="icon--ver icon--primary-light"></x-icon.instagram>
                <x-icon.fb class="icon--ver icon--primary-light"></x-icon.fb>
            </div>
            <div class="flex row gap--6 align--center justify--start">
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.pin class="icon--ver icon-stroke--primary-light"></x-icon.pin>
                    <p class="text--s">3 Pl. Gambetta, 64320 Bizanos</p>
                </div>
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.phone class="icon--ver icon-stroke--primary-light"></x-icon.phone>
                    <a href="tel:0559531722" class="text--s">05 59 53 17 22</a>
                </div>
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.mail class="icon--hor icon-stroke--primary-light"></x-icon.mail>
                    <a href="mailto:contact@moonopticienlunetier.com" class="text--s">contact@moonopticienlunetier.com</a>
                </div>
            </div>
        </div>
    </div>
    <div id="nav" class="container__full-width flex col align--center">
        <div class="container pt--4 pb--4 flex row align--center justify--space-between">
            <img class="nav__logo" src="{{ asset('/images/logo/logo-full-dark.svg') }}" alt="">
            <div class="flex row align--center justify--center gap--4 hide-mobile">
                <a href="" class="btn--navbar-dark @if(str_contains($route, 'home')) btn--navbar-dark--active @endif">Home</a>
                <a href="" class="btn--navbar-dark @if(str_contains($route, 'shop_service')) btn--navbar-dark--active @endif">En Magasin</a>
                <a href="" class="btn--navbar-dark @if(str_contains($route, 'home_service')) btn--navbar-dark--active @endif">À Domicile</a>
                <a href="" class="btn--navbar-dark @if(str_contains($route, 'glasses')) btn--navbar-dark--active @endif">Nos Lunettes</a>
                <a href="" class="btn--navbar-dark @if(str_contains($route, 'lenses')) btn--navbar-dark--active @endif">Nos Lentilles</a>
                <a href="" class="btn--navbar-dark @if(str_contains($route, 'about')) btn--navbar-dark--active @endif">À Propos</a>
            </div>
            <a href="" class="btn btn--main-dark hide-mobile">Contact</a>
        </div>
    </div>
</nav>
