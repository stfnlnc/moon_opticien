<footer class="container__full-width c--primary-light bg--secondary-dark flex col align--center">
    <div class="container flex col align--start justify--start gap--6 gap--8-mobile">
        <a href="{{ route('contact') }}" class="btn btn--main-dark">Je prends rendez-vous</a>
        <div class="flex row col-mobile gap--12">
            <div class="flex col gap--3">
                <p class="text--m">Horaires du magasin</p>
                <p class="text--s">
                    lundi : 14:00–19:00 <br>
                    du mardi au vendredi : 09:30–12:30, 14:00–19:00 <br>
                    samedi : 09:30–18:00 <br>
                    dimanche : Fermé
                </p>
            </div>
            <div class="flex col gap--3">
                <p class="text--m">Nous contacter</p>
                <p class="text--s">
                    3 Pl. Gambetta, 64320 Bizanos <br>
                    <a href="tel:0559531722">05 59 53 17 22</a> <br>
                    <a href="mailto:contact@moonopticienlunetier.com">contact@moonopticienlunetier.com</a>
                </p>
                <div class="flex row gap--2">
                    <a href="">
                        <x-icon.instagram class="icon--small icon--primary-light"></x-icon.instagram>
                    </a>
                    <a href="">
                        <x-icon.fb class="icon--small icon--primary-light"></x-icon.fb>
                    </a>
                </div>
            </div>
            <div class="flex col gap--3">
                <p class="text--m">Plan du site</p>
                <p class="text--s">
                    <a href="{{ route('index') }}" class="btn--footer">Home</a> <br>
                    <a href="{{ route('shop_service') }}" class="btn--footer">En magasin</a> <br>
                    <a href="{{ route('home_service') }}" class="btn--footer">À domicile</a> <br>
                    <a href="{{ route('glasses') }}" class="btn--footer">Nos lunettes</a> <br>
                    <a href="{{ route('lenses') }}" class="btn--footer">Nos lentilles</a> <br>
                    <a href="{{ route('about') }}" class="btn--footer">À propos</a> <br>

                </p>
            </div>
        </div>
        <div class="flex row align--center justify--end w--100">
            <img class="img__footer" src="{{ asset('/images/logo/logo-full.svg') }}" alt="">
        </div>
        <div class="flex row col-mobile gap--1-mobile align--start justify--space-between w--100 border--top border--secondary-color-3 mt--4 pt--4">
            <p class="text--s">
                © 2024 - <a href="https://studiokhi.com">Un site réalisé par Studio Khi</a>
            </p>
            <div class="flex row col-mobile gap--1-mobile align--start justify--start gap--5">
                <a href="" class="btn--footer">Politique de confidentialité</a>
                <a href="" class="btn--footer">Mentions légales</a>
                <a href="{{ route('login') }}" class="btn--footer">Connexion</a>
            </div>
        </div>
    </div>
</footer>
