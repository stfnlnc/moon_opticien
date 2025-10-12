@php
    $route = '';
    if (request()->route()) {
        $route = request()->route()->getName();
    }
    $mode ??= 'dark';
@endphp

<nav class="fixed t--0 l--0 w--100">
    <div id="nav-pop"
         class="container__full-width flex col align--center bg--secondary-dark c--primary-light">
        <div class="container pt--2 pb--2 flex row align--center justify--space-between">
            <div class="flex row gap--2 align--center justify--start">
                <a aria-label="instagram" target="_blank" href="{{ $options[14]['options_value'] }}">
                    <x-icon.instagram class="icon--ver icon--primary-light"></x-icon.instagram>
                </a>
                <a aria-label="facebook" target="_blank" href="{{ $options[15]['options_value'] }}">
                    <x-icon.fb class="icon--ver icon--primary-light"></x-icon.fb>
                </a>
            </div>
            <a href="{{ route('shops') }}" class="flex row gap--2 align--center text--m">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon--ver" viewBox="0 0 13 15" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99604 8.50008C6.52664 8.50008 7.03552 8.28937 7.41081 7.91427C7.78609 7.53917 7.99706 7.03039 7.99732 6.49979C7.99732 5.96902 7.78647 5.45998 7.41116 5.08467C7.03585 4.70935 6.52681 4.4985 5.99604 4.4985C5.46526 4.4985 4.95623 4.70935 4.58091 5.08467C4.2056 5.45998 3.99475 5.96902 3.99475 6.49979C3.99502 7.03039 4.20598 7.53917 4.58127 7.91427C4.95655 8.28937 5.46544 8.50008 5.99604 8.50008Z" stroke="white" stroke-linecap="square"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9999 6.49986C11.9999 11.5001 6.99669 14.5 5.99605 14.5C4.9954 14.5 -0.0078125 11.5001 -0.0078125 6.49986C-0.00701653 4.90815 0.625914 3.38192 1.7518 2.25678C2.87768 1.13165 4.40434 0.499735 5.99605 0.5C9.31118 0.5 11.9999 3.18673 11.9999 6.49986Z" stroke="white" stroke-linecap="square"/>
                </svg>
                Nos boutiques
            </a>
        </div>
    </div>
    <div id="nav" data-mode="{{ $mode }}" class="container__full-width flex col align--center">
        <div class="container pt--4 pb--4 flex row align--center justify--space-between">
            <a aria-label="Moon Opticien Lunetier" href="{{ route('index') }}">
                <img class="nav__logo" src="{{ asset('/images/logo/logo-full-' . $mode . '.svg') }}"
                     alt="Moon Opticien Lunetier">
            </a>
            <div class="hide-mobile">
                @include('main.layouts.template-parts.menu')
            </div>
            <a href="{{ route('contact') }}" class="btn btn--main-{{ $mode }} hide-mobile">Contact</a>
            <div class="mobile-menu p--1 display-mobile">
                <span class="mobile-menu-{{ $mode }}">
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                </span>
            </div>
            <div class="mobile-dropdown flex col gap--6">
                <div class="container flex pt--4 pb--4 row align--center justify--space-between">
                    <img class="nav__logo" src="{{ asset('/images/logo/logo-full-dark.svg') }}" alt="">
                    <div class="mobile-menu mobile-menu-close p--1">
                        <span class="">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="line-3"></span>
                        </span>
                    </div>
                </div>
                <div class="pl--1">
                    @include('main.layouts.template-parts.menu-mobile', ['mode' => 'dark'])
                </div>
                <div class="container pt--0 pb--0">
                    <a href="{{ route('contact') }}" class="btn btn--main-dark">Contact</a>
                </div>
                <div class="container c--primary-light text--xs">
                    <div class="flex col gap--2">
                        <div
                                class="flex col text--s border--top border--bottom border--secondary-color-3 pt--3 pb--3 lowercase">
                            @foreach ($schedule as $value)
                                <p>{{ array_keys($value)[0] }} :
                                    {{ array_values($value)[0] }}</p>
                            @endforeach
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
