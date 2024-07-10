@php
    $route = '';
    if(request()->route()) {
        $route = request()->route()->getName();
    }
    $mode ??= 'dark';
@endphp

<nav class="fixed t--0 l--0 w--100">
    <div id="nav-pop" class="container__full-width flex col align--center bg--secondary-dark c--primary-light hide-mobile">
        <div class="container pt--2 pb--2 flex row align--center justify--space-between">
            <div class="flex row gap--2 align--center justify--start">
                <a aria-label="instagram" target="_blank" href="https://www.instagram.com/moon.opticienlunetier/">
                    <x-icon.instagram class="icon--ver icon--primary-light"></x-icon.instagram>
                </a>
                <a aria-label="facebook" target="_blank" href="https://www.facebook.com/profile.php?id=61556269374737">
                    <x-icon.fb class="icon--ver icon--primary-light"></x-icon.fb>
                </a>
            </div>
            <div class="flex row gap--6 align--center justify--start">
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.pin class="icon--ver icon-stroke--primary-light"></x-icon.pin>
                    <p class="text--s">3 Pl. Gambetta, 64320 Bizanos</p>
                </div>
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.phone class="icon--ver icon--primary-light"></x-icon.phone>
                    <a href="tel:0559531722" class="text--s">05 59 53 17 22</a>
                </div>
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.mail class="icon--hor icon--primary-light"></x-icon.mail>
                    <a href="mailto:contact@moonopticienlunetier.com" class="text--s">contact@moonopticienlunetier.com</a>
                </div>
            </div>
        </div>
    </div>
    <div id="nav" data-mode="{{ $mode }}" class="container__full-width flex col align--center">
        <div class="container pt--4 pb--4 flex row align--center justify--space-between">
            <a aria-label="Moon Opticien Lunetier" hx-boost="true" href="{{ route('index') }}">
                <img class="nav__logo" src="{{ asset('/images/logo/logo-full-' . $mode . '.svg') }}" alt="Moon Opticien Lunetier">
            </a>
            <div class="hide-mobile">
                @include('main.layouts.template-parts.menu')
            </div>
            <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-{{ $mode }} hide-mobile">Contact</a>
            <span class="mobile-menu mobile-menu-{{ $mode }} display-mobile">
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
            </span>
            <div class="mobile-dropdown flex col gap--6">
                <div class="container flex pt--4 pb--4 row align--center justify--space-between">
                    <img class="nav__logo" src="{{ asset('/images/logo/logo-full-dark.svg') }}" alt="">
                    <span class="mobile-menu mobile-menu-close">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </span>
                </div>
                <div class="pl--1">
                    @include('main.layouts.template-parts.menu', ['mode' => 'dark'])
                </div>
                <div class="container pt--0 pb--0">
                    <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-dark">Contact</a>
                </div>
                <div class="container mt--10 c--primary-light text--xs">
                    <div class="flex col gap--2">
                        <p class="border--top border--bottom border--secondary-color-3 pt--3 pb--3">
                            lundi : 14:00-19:00 <br>
                            du mardi au vendredi : 09:30-12:30, 14:00-19:00 <br>
                            samedi : 09:30-18:00 <br>
                            dimanche : Fermé
                        </p>
                        <p class="pt--3">
                            3 Pl. Gambetta, 64320 Bizanos <br>
                            <a href="tel:0559531722">05 59 53 17 22</a> <br>
                            <a href="mailto:contact@moonopticienlunetier.com">contact@moonopticienlunetier.com</a>
                        </p>
                        <div class="flex row gap--2 align--center justify--start">
                            <a aria-label="instagram" target="_blank" href="https://www.instagram.com/moon.opticienlunetier/">
                                <x-icon.instagram class="icon--ver icon--primary-light"></x-icon.instagram>
                            </a>
                            <a aria-label="facebook" target="_blank" href="https://www.facebook.com/profile.php?id=61556269374737">
                                <x-icon.fb class="icon--ver icon--primary-light"></x-icon.fb>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
