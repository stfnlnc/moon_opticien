@extends('base')

@section('title', 'Nous contacter')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')

    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase w--80 w-100-mobile">Un conseil personnalisé, un examen de vue <br> et un café</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Nous vous offrons un conseil personnalisé, l’examen de vue et le café. Prenez rendez-vous avec nous, en magasin ou à domicile, en remplissant le formulaire de contact.
            </p>
        </div>
    </section>
    <section id="contact-form" class="container__full-width c--secondary-dark bg--primary-light flex col align--center">
        <div class="container">
            @if(session('success'))
                <p class="alert alert--success">{{ session('success') }}</p>
            @else
            <form method="post" action="{{ route('contact_store') }}#contact-form" class="flex col gap--4" enctype="multipart/form-data">
                @csrf
                <div class="grid grid--2 grid--1-mobile grid-gap--2">
                    <div class="flex col">
                        <label for="firstname" class="form-label">Prénom*</label>
                        <input id="firstname" name="firstname" type="text" class="form-input" placeholder="John" value="TEST">
                        <x-input-error :messages="$errors->get('firstname')"/>
                    </div>
                    <div class="flex col">
                        <label for="lastname" class="form-label">Nom*</label>
                        <input id="lastname" name="lastname" type="text" class="form-input" placeholder="Smith" value="TEST">
                        <x-input-error :messages="$errors->get('firstname')"/>
                    </div>
                </div>
                <div class="grid grid--2 grid--1-mobile grid-gap--2">
                    <div class="flex col">
                        <label for="email" class="form-label">Email*</label>
                        <input id="email" name="email" type="email" class="form-input" placeholder="john.smith@mail.com" value="test@dev.com">
                        <x-input-error :messages="$errors->get('firstname')"/>
                    </div>
                    <div class="flex col">
                        <label for="phone" class="form-label">Téléphone*</label>
                        <input id="phone" name="phone" type="text" class="form-input" placeholder="0102030405" value="0102030405">
                        <x-input-error :messages="$errors->get('firstname')"/>
                    </div>
                </div>
                <div class="flex col gap--2">
                    <label class="form-label">Je souhaite*</label>
                    <div class="flex row col-mobile align--start gap--2">
                        <div id="message" class="filter filter--active">
                            Envoyer un message
                        </div>
                        <div id="shop" class="filter">
                            Prendre rdv en magasin
                        </div>
                        <div id="home" class="filter">
                            Prendre rdv à domicile
                        </div>
                        <div id="lens" class="filter">
                            Commander mes lentilles
                        </div>
                    </div>
                </div>
                <div id="message-content" class="content flex col gap--4 align--center">
                    <textarea class="form-input" name="message" id="message" rows="5" placeholder="Laissez-nous votre message"></textarea>
                </div>
                <div id="shop-content" class="content flex col gap--4 align--center form-content">
                    <div class="flex col align--self-start gap--2">
                        <p class="form-label">Vous souhaitez prendre rendez-vous pour ?*</p>
                        <div class="form-check">
                            <input type="checkbox" name="exam" id="exam" value="Faire vérifier ma vue">
                            <label class="form-label" for="exam">Faire vérifier ma vue</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="glasses" id="glasses" value="Être conseillé dans le choix de mes lunettes">
                            <label class="form-label" for="glasses">Être conseillé dans le choix de mes lunettes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="lenses" id="lenses" value="Être conseillé pour l'adaptation de mes lentilles">
                            <label class="form-label" for="lenses">Être conseillé pour l'adaptation de mes lentilles</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="buy" id="buy" value="Réceptionner mon achat">
                            <label class="form-label" for="buy">Réceptionner mon achat</label>
                        </div>
                    </div>
                </div>
                <div id="home-content" class="content flex col gap--4 align--center form-content w--100">
                    <div class="flex col align--self-start gap--2 w--100">
                        <label for="address" class="form-label">Adresse ou lieu où vous souhaitez qu'on
                            intervienne*</label>
                        <input id="address" name="address" type="text" class="form-input"
                               placeholder="Adresse de votre domicile ou celui de votre proche">
                        <div class="flex row gap--2 align--center">
                            <p class="form-label">Avez-vous une ordonnance à jour ?*</p>
                            <div class="help">
                                <svg class="help" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                     viewBox="0 0 50 50">
                                    <path
                                        d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 25 11 A 3 3 0 0 0 22 14 A 3 3 0 0 0 25 17 A 3 3 0 0 0 28 14 A 3 3 0 0 0 25 11 z M 21 21 L 21 23 L 22 23 L 23 23 L 23 36 L 22 36 L 21 36 L 21 38 L 22 38 L 23 38 L 27 38 L 28 38 L 29 38 L 29 36 L 28 36 L 27 36 L 27 21 L 26 21 L 22 21 L 21 21 z"></path>
                                </svg>
                                <div class="help-text">
                                    <p class="text--s">
                                        - 1 an pour les moins de 16 ans <br>
                                        - 3 ans pour les 16 à 42 ans <br>
                                        - 5 ans pour les plus de 42 ans
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="form-check">
                            <input type="radio" name="prescription" value="Oui" id="yes">
                            <label class="form-label" for="yes">Oui</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="prescription" value="Non" id="no">
                            <label class="form-label" for="no">Non</label>
                        </div>
                    </div>
                </div>
                <div id="lens-content" class="content flex col gap--4 align--start form-content w--100 border--top border--secondary-color-3 pt--4">
                    <div class="flex row col-mobile justify--start align--start gap--2">
                        <div id="prescription-send" class="filter-sub filter-sub--active">
                            Je transmets mon ordonnance
                        </div>
                        <p class="text--m">ou</p>
                        <div id="information-send" class="filter-sub">
                            Je remplis le formulaire
                        </div>
                    </div>
                    <div id="prescription-send-content" class="content-sub flex col gap--2 w--100">
                        <label for="prescription-file" class="form-label flex row align--center"><span class="text--xs">(Format JPG, PNG, PDF. Maximum 2mo)</span></label>
                        <input id="prescription-file" name="prescription-file" type="file">
                    </div>
                    <div id="information-send-content" class="content-sub flex col gap--2 form-sub-content w--100">
                        <div class="flex col align--self-start gap--2 w--100">
                            <label for="lens-model" class="form-label">Modèle de lentilles*</label>
                            <input id="lens-model" name="lens-model" type="text" class="form-input" placeholder="Modèle et marque de vos lentilles">
                        </div>
                        <div class="grid grid--2 grid--1-mobile grid-gap--16 w--100">
                            <div class="flex col gap--2">
                                <p class="form-label">Oeil gauche*</p>
                                <label for="left-sphere" class="form-label">Sphère*</label>
                                <select autocomplete="off" class="form-input" name="left-sphere" id="left-sphere">
                                    @for($i = 20; $i >= -20; $i -= 0.25)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                    @endfor
                                </select>
                                <label for="left-cylinder" class="form-label">Cylindre*</label>
                                <select autocomplete="off" class="form-input" name="left-cylinder" id="left-cylinder">
                                    @for($i = 0; $i >= -5; $i -= 0.25)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                    @endfor
                                </select>
                                <label for="left-axis" class="form-label">Axe*</label>
                                <select autocomplete="off" class="form-input" name="left-axis" id="left-axis">
                                    @for($i = 0; $i <= 180; $i += 5)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}°</option>
                                    @endfor
                                </select>
                                <label for="left-add" class="form-label flex row align--center">Addition <span class="text--xs">(optionnel)</span></label>
                                <select autocomplete="off" class="form-input" name="left-add" id="left-add">
                                    @for($i = 0; $i <= 3; $i += 0.25)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                    @endfor
                                </select>
                                <label for="left-radius" class="form-label flex row align--center">Rayon et diamètre <span class="text--xs">(optionnel)</span></label>
                                <input id="left-radius" name="left-radius" type="text" class="form-input">
                            </div>
                            <div class="flex col gap--2">
                                <p class="form-label">Oeil droit*</p>
                                <label for="right-sphere" class="form-label">Sphère*</label>
                                <select class="form-input" name="right-sphere" id="right-sphere">
                                    @for($i = 20; $i >= -20; $i -= 0.25)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                    @endfor
                                </select>
                                <label for="right-cylinder" class="form-label">Cylindre*</label>
                                <select autocomplete="off" class="form-input" name="right-cylinder" id="right-cylinder">
                                    @for($i = 0; $i >= -5; $i -= 0.25)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                    @endfor
                                </select>
                                <label for="right-add" class="form-label">Axe*</label>
                                <select autocomplete="off" class="form-input" name="right-add" id="right-add">
                                    @for($i = 0; $i <= 180; $i += 5)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}°</option>
                                    @endfor
                                </select>
                                <label for="right-axis" class="form-label flex row align--center">Addition <span class="text--xs">(optionnel)</span></label>
                                <select autocomplete="off" class="form-input" name="right-axis" id="right-axis">
                                    @for($i = 0; $i <= 3; $i += 0.25)
                                        <option @if(strval($i) === '0') selected @endif value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                    @endfor
                                </select>
                                <label for="right-radius" class="form-label flex row align--center">Rayon et diamètre <span class="text--xs">(optionnel)</span></label>
                                <input id="right-radius" name="right-radius" type="text" class="form-input">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn--main-light">Envoyer le formulaire</button>
            </form>
            @endif
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <div class="container">
            <div class="grid grid--3 grid--1-mobile grid-gap--8">
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
    </section>

@endsection
