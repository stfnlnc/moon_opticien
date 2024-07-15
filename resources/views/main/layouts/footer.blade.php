<footer class="container__full-width c--primary-light bg--secondary-dark flex col align--center">
    <div class="container flex col align--start justify--start gap--6 gap--8-mobile">
        <a href="{{ route('contact') }}" class="btn btn--main-dark">Je prends rendez-vous</a>
        <div class="flex row col-mobile gap--12">
            <div class="flex col gap--3">
                <p class="text--m">Horaires du magasin</p>
                <p class="text--s lowercase">
                    @foreach($schedule as $value)
                        {{ array_keys($value)[0] }} : {{ array_values($value)[0] }} <br>
                    @endforeach
                </p>
            </div>
            <div class="flex col gap--3">
                <p class="text--m">Nous contacter</p>
                <p class="text--s">
                    {{ $options[0]['options_value'] }}, {{ $options[1]['options_value'] }} {{ $options[2]['options_value'] }} <br>
                    <a href="tel:{{ str_replace(' ', '', $options[4]['options_value']) }}">{{ $options[4]['options_value'] }}</a> <br>
                    <a href="mailto:{{ $options[3]['options_value'] }}">{{ $options[3]['options_value'] }}</a>
                </p>
                <div class="flex row gap--2 align--center justify--start">
                    <a aria-label="instagram" target="_blank" href="{{ $options[14]['options_value'] }}">
                        <x-icon.instagram class="icon--ver icon--primary-light"></x-icon.instagram>
                    </a>
                    <a aria-label="facebook" target="_blank" href="{{ $options[15]['options_value'] }}">
                        <x-icon.fb class="icon--ver icon--primary-light"></x-icon.fb>
                    </a>
                </div>
            </div>
            <div class="flex col gap--3">
                <p class="text--m">Plan du site</p>
                <p class="text--s">
                    <a hx-boost="true" href="{{ route('index') }}" class="btn--footer">Home</a> <br>
                    <a hx-boost="true" href="{{ route('shop_service') }}" class="btn--footer">En magasin</a> <br>
                    <a hx-boost="true" href="{{ route('home_service') }}" class="btn--footer">À domicile</a> <br>
                    <a hx-boost="true" href="{{ route('glasses') }}" class="btn--footer">Nos lunettes</a> <br>
                    <a hx-boost="true" href="{{ route('lenses') }}" class="btn--footer">Nos lentilles</a> <br>
                    <a hx-boost="true" href="{{ route('about') }}" class="btn--footer">À propos</a> <br>
                </p>
            </div>
        </div>
        <div class="flex row align--center justify--end justify-mobile--center justify--end w--100">
            <img class="img__footer" src="{{ asset('/images/logo/logo-full.svg') }}" alt="">
        </div>
        <div class="flex row col-mobile gap--1-mobile align--start justify--space-between w--100 border--top border--secondary-color-3 mt--4 pt--4">
            <p class="text--s">
                © 2024 - <a target="_blank" href="https://studiokhi.com">Un site réalisé par Studio Khi</a>
            </p>
            <div class="flex row col-mobile gap--1-mobile align--start justify--start gap--5">
                <a hx-boost="true" href="{{ route('privacy_policy') }}" class="btn--footer">Politique de confidentialité</a>
                <a hx-boost="true" href="{{ route('legal_notice') }}" class="btn--footer">Mentions légales</a>
                <a href="{{ route('login') }}" class="btn--footer">Connexion</a>
            </div>
        </div>
    </div>
</footer>
