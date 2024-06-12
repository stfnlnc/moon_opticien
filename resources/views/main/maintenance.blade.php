@extends('base')

@section('content')

    <div class="container flex col align--center pt--16">
        <img class="logo__head" src="{{ asset('/images/logo/moon-logo-primary-gold.svg') }}" alt="">
    </div>
    <div class="container__full-width">
        <h3 class="c--secondary-color-2 text-center pb--16">
            Notre site arrive très prochainement. <br>
            En attendant, retrouvez-nous en magasin.
        </h3>
        <div class="bg--secondary-color-2 flex row justify--center pt--6 pb--6">
            <div class="container flex row col-mobile gap--4-mobile align--start justify--space-between">
                <div class="flex col gap--2 align--start justify--start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.97638 9.00011C7.50699 9.00011 8.01587 8.7894 8.39115 8.4143C8.76644 8.0392 8.97741 7.53042 8.97767 6.99982C8.97767 6.46905 8.76682 5.96001 8.39151 5.5847C8.01619 5.20938 7.50716 4.99854 6.97638 4.99854C6.44561 4.99854 5.93657 5.20938 5.56126 5.5847C5.18595 5.96001 4.9751 6.46905 4.9751 6.99982C4.97536 7.53042 5.18633 8.0392 5.56161 8.4143C5.9369 8.7894 6.44578 9.00011 6.97638 9.00011Z" stroke="#1E3A3D" stroke-linecap="square"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9804 6.99986C12.9804 12.0001 7.97716 15 6.97652 15C5.97587 15 0.972656 12.0001 0.972656 6.99986C0.973452 5.40815 1.60638 3.88192 2.73227 2.75678C3.85815 1.63165 5.38481 0.999735 6.97652 1C10.2916 1 12.9804 3.68673 12.9804 6.99986Z" stroke="#1E3A3D" stroke-linecap="square"/>
                    </svg>
                    <a target="_blank" href="https://maps.app.goo.gl/ZyfbcUGjv2jdakru7" class="text--m">
                        3 Pl. Gambetta <br>
                        64320 Bizanos
                    </a>
                </div>
                <div class="flex col gap--2 align--start justify--start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                        <path d="M12.793 0C13.3731 0 13.9295 0.22287 14.3398 0.619582C14.75 1.01629 14.9805 1.55435 14.9805 2.11538V8.88462C14.9805 9.44565 14.75 9.98371 14.3398 10.3804C13.9295 10.7771 13.3731 11 12.793 11H3.16797C2.58781 11 2.03141 10.7771 1.62117 10.3804C1.21094 9.98371 0.980469 9.44565 0.980469 8.88462V2.11538C0.980469 1.55435 1.21094 1.01629 1.62117 0.619582C2.03141 0.22287 2.58781 0 3.16797 0H12.793ZM14.1055 3.35162L8.20272 6.71085C8.14691 6.74253 8.08454 6.76185 8.02008 6.76741C7.95562 6.77297 7.89069 6.76463 7.82997 6.743L7.75822 6.71085L1.85547 3.35331V8.88462C1.85547 9.22124 1.99375 9.54407 2.23989 9.7821C2.48603 10.0201 2.81987 10.1538 3.16797 10.1538H12.793C13.1411 10.1538 13.4749 10.0201 13.721 9.7821C13.9672 9.54407 14.1055 9.22124 14.1055 8.88462V3.35162ZM12.793 0.846154H3.16797C2.81987 0.846154 2.48603 0.979876 2.23989 1.2179C1.99375 1.45593 1.85547 1.77876 1.85547 2.11538V2.37092L7.98047 5.85538L14.1055 2.36923V2.11538C14.1055 1.77876 13.9672 1.45593 13.721 1.2179C13.4749 0.979876 13.1411 0.846154 12.793 0.846154Z" fill="#1E3A3D"/>
                    </svg>
                    <p class="text--m">
                        <a href="tel:0559531722">05 59 53 17 22</a> <br>
                        <a href="mailto:contact@moonopticienlunetier.com">contact@moonopticienlunetier.com</a>
                    </p>
                </div>
                <div class="flex col gap--2 align--start justify--start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                        <path d="M8.94444 9.66667L7.5 7.5V3.88889M1 7.5C1 8.35359 1.16813 9.19883 1.49478 9.98744C1.82144 10.7761 2.30022 11.4926 2.90381 12.0962C3.50739 12.6998 4.22394 13.1786 5.01256 13.5052C5.80117 13.8319 6.64641 14 7.5 14C8.35359 14 9.19883 13.8319 9.98744 13.5052C10.7761 13.1786 11.4926 12.6998 12.0962 12.0962C12.6998 11.4926 13.1786 10.7761 13.5052 9.98744C13.8319 9.19883 14 8.35359 14 7.5C14 6.64641 13.8319 5.80117 13.5052 5.01256C13.1786 4.22394 12.6998 3.50739 12.0962 2.90381C11.4926 2.30023 10.7761 1.82144 9.98744 1.49478C9.19883 1.16813 8.35359 1 7.5 1C6.64641 1 5.80117 1.16813 5.01256 1.49478C4.22394 1.82144 3.50739 2.30023 2.90381 2.90381C2.30022 3.50739 1.82144 4.22394 1.49478 5.01256C1.16813 5.80117 1 6.64641 1 7.5Z" stroke="#1E3A3D" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="text--m">
                        lundi : 14:00 - 19:00 <br>
                        du mardi au vendredi : 09:30 - 12:30, 14:00 - 19:00 <br>
                        samedi : 09:30 - 18:00
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
