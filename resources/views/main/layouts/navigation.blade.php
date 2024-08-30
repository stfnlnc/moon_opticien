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
                <a aria-label="instagram" target="_blank" href="{{ $options[14]['options_value'] }}">
                    <x-icon.instagram class="icon--ver icon--primary-light"></x-icon.instagram>
                </a>
                <a aria-label="facebook" target="_blank" href="{{ $options[15]['options_value'] }}">
                    <x-icon.fb class="icon--ver icon--primary-light"></x-icon.fb>
                </a>
            </div>
            <div class="flex row gap--6 align--center justify--start">
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.pin class="icon--ver icon-stroke--primary-light"></x-icon.pin>
                    <p class="text--s">{{ $options[0]['options_value'] }}, {{ $options[1]['options_value'] }} {{ $options[2]['options_value'] }}</p>
                </div>
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.phone class="icon--ver icon--primary-light"></x-icon.phone>
                    <a href="tel:{{ str_replace(' ', '', $options[4]['options_value']) }}" class="text--s">{{ $options[4]['options_value'] }}</a>
                </div>
                <div class="flex row gap--2 align--center justify--start">
                    <x-icon.mail class="icon--hor icon--primary-light"></x-icon.mail>
                    <a href="mailto:{{ $options[3]['options_value'] }}" class="text--s">{{ $options[3]['options_value'] }}</a>
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
            <a href="{{ route('contact') }}" class="btn btn--main-{{ $mode }} hide-mobile">Contact</a>
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
                    <a href="{{ route('contact') }}" class="btn btn--main-dark">Contact</a>
                </div>
                <div class="container c--primary-light text--xs">
                    <div class="flex col gap--2">
                        <div class="flex col gap--4 border--top border--bottom border--secondary-color-3 pt--3 pb--3 lowercase">
                            @foreach($schedule as $value)
                                <p>{{ array_keys($value)[0] }} : {{ array_values($value)[0] }}</p>
                            @endforeach
                        </div>
                        <div class="flex col gap--6 pt--3">
                            <p>{{ $options[0]['options_value'] }}, {{ $options[1]['options_value'] }} {{ $options[2]['options_value'] }}</p>
                            <a href="tel:{{ str_replace(' ', '', $options[4]['options_value']) }}">{{ $options[4]['options_value'] }}</a>
                            <a href="mailto:{{ $options[3]['options_value'] }}">{{ $options[3]['options_value'] }}</a>
                        </div>
                        <div class="flex row gap--2 align--center justify--start pt--4">
                            <a aria-label="instagram" target="_blank" href="{{ $options[14]['options_value'] }}">
                                <x-icon.instagram class="icon--ver icon--primary-light"></x-icon.instagram>
                            </a>
                            <a aria-label="facebook" target="_blank" href="{{ $options[15]['options_value'] }}">
                                <x-icon.fb class="icon--ver icon--primary-light"></x-icon.fb>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
