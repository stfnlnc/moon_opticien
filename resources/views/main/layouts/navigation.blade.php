@php
    $route = request()->route()->getName();
    $mode ??= 'dark';
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
    <div id="nav" data-mode="{{ $mode }}" class="container__full-width flex col align--center">
        <div class="container pt--4 pb--4 flex row align--center justify--space-between">
            <img class="nav__logo" src="{{ asset('/images/logo/logo-full-' . $mode . '.svg') }}" alt="">
            <div class="flex row align--center justify--center gap--4 hide-mobile">
                <a hx-boost="true" href="{{ route('index') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'index')) btn--navbar-{{ $mode }}--active @endif">Home</a>
                <a hx-boost="true" href="{{ route('shop_service') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'shop_service')) btn--navbar-{{ $mode }}--active @endif">En Magasin</a>
                <a hx-boost="true" href="{{ route('home_service') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'home_service')) btn--navbar-{{ $mode }}--active @endif">À Domicile</a>
                <a hx-boost="true" href="{{ route('glasses') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'glasses')) btn--navbar-{{ $mode }}--active @endif">Nos Lunettes</a>
                <a hx-boost="true" href="{{ route('lenses') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'lenses')) btn--navbar-{{ $mode }}--active @endif">Nos Lentilles</a>
                <a hx-boost="true" href="{{ route('about') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'about')) btn--navbar-{{ $mode }}--active @endif">À Propos</a>
            </div>
            <a href="{{ route('contact') }}" class="btn btn--main-{{ $mode }} hide-mobile">Contact</a>
        </div>
    </div>
</nav>
