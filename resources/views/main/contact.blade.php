@extends('base')

@section('title', 'Nous contacter')

@section('meta')
    <meta property="og:description"
        content="Nous vous offrons un conseil personnalisé, l’examen de vue et le café. Prenez rendez-vous avec nous, en magasin ou à domicile, en remplissant le formulaire de contact." />
    <meta name="description"
        content="Nous vous offrons un conseil personnalisé, l’examen de vue et le café. Prenez rendez-vous avec nous, en magasin ou à domicile, en remplissant le formulaire de contact.">
    <meta property="og:url" content="{{ route('contact') }}" />
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')

    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase w--80 w-100-mobile">Un conseil personnalisé, un examen de vue <br> et un café</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Nous vous offrons un conseil personnalisé, l’examen de vue et le café. Prenez rendez-vous avec nous, en
                magasin ou à domicile, en remplissant le formulaire de contact.
            </p>
        </div>
    </section>
    <section id="contact-form" class="container__full-width c--secondary-dark bg--primary-light flex col align--center">
        <div class="container">

            @if (session('success'))
                <p class="alert alert--success">{{ session('success') }}</p>
            @else
                <form method="post" action="{{ route('contact_store') }}#contact-form" class="flex col gap--4"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid--2 grid--1-mobile grid-gap--2">
                        <div class="flex col">
                            <label for="firstname" class="form-label">Prénom*</label>
                            <input id="firstname" name="firstname" type="text" class="form-input" placeholder="John"
                                value="{{ old('firstname') }}">
                            <x-input-error :messages="$errors->get('firstname')" />
                        </div>
                        <div class="flex col">
                            <label for="lastname" class="form-label">Nom*</label>
                            <input id="lastname" name="lastname" type="text" class="form-input" placeholder="Smith"
                                value="{{ old('lastname') }}">
                            <x-input-error :messages="$errors->get('firstname')" />
                        </div>
                    </div>
                    <div class="grid grid--2 grid--1-mobile grid-gap--2">
                        <div class="flex col">
                            <label for="email" class="form-label">Email*</label>
                            <input id="email" name="email" type="email" class="form-input"
                                placeholder="john.smith@mail.com" value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('firstname')" />
                        </div>
                        <div class="flex col">
                            <label for="phone" class="form-label">Téléphone*</label>
                            <input id="phone" name="phone" type="text" class="form-input" placeholder="0102030405"
                                value="{{ old('phone') }}">
                            <x-input-error :messages="$errors->get('firstname')" />
                        </div>
                    </div>
                    <div class="flex col">
                        <label class="form-label">Je choisis mon magasin*</label>
                        <select id="store" name="store" class="form-input w--fit-content">
                            <option value="" disabled selected hidden>Sélectionner un magasin</option>
                            <option value="Bizanos">Bizanos</option>
                            <option value="Denguin">Denguin</option>
                        </select>
                        <x-input-error :messages="$errors->get('store')" />
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
                        <textarea class="form-input" name="message" id="message" rows="5" placeholder="Laissez-nous votre message">{{ old('message') }}</textarea>
                    </div>
                    <div id="shop-content" class="content flex col gap--4 align--center form-content">
                        <div class="flex col align--self-start gap--2">
                            <p class="form-label">Vous souhaitez prendre rendez-vous pour ?*</p>
                            <div class="form-check">
                                <input type="checkbox" name="exam" id="exam" value="Faire vérifier ma vue" @if(old('exam')) checked @endif>
                                <label class="form-label" for="exam">Faire vérifier ma vue</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="glasses" id="glasses"
                                    value="Être conseillé dans le choix de mes lunettes" @if(old('glasses')) checked @endif>
                                <label class="form-label" for="glasses">Être conseillé dans le choix de mes
                                    lunettes</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="lenses" id="lenses"
                                    value="Être conseillé pour l'adaptation de mes lentilles" @if(old('lenses')) checked @endif>
                                <label class="form-label" for="lenses">Être conseillé pour l'adaptation de mes
                                    lentilles</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="buy" id="buy" value="Réceptionner mon achat" @if(old('buy')) checked @endif>
                                <label class="form-label" for="buy">Réceptionner mon achat</label>
                            </div>
                        </div>
                    </div>
                    <div id="home-content" class="content flex col gap--4 align--center form-content w--100">
                        <div class="flex col align--self-start gap--2 w--100">
                            <label for="address" class="form-label">Adresse ou lieu où vous souhaitez qu'on
                                intervienne*</label>
                            <input id="address" name="address" type="text" class="form-input"
                                placeholder="Adresse de votre domicile ou celui de votre proche" value="{{ old('address') }}">
                            <div class="flex row gap--2 align--center">
                                <p class="form-label">Avez-vous une ordonnance à jour ?*</p>
                                <div class="help">
                                    <svg class="help" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        viewBox="0 0 50 50">
                                        <path
                                            d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 25 11 A 3 3 0 0 0 22 14 A 3 3 0 0 0 25 17 A 3 3 0 0 0 28 14 A 3 3 0 0 0 25 11 z M 21 21 L 21 23 L 22 23 L 23 23 L 23 36 L 22 36 L 21 36 L 21 38 L 22 38 L 23 38 L 27 38 L 28 38 L 29 38 L 29 36 L 28 36 L 27 36 L 27 21 L 26 21 L 22 21 L 21 21 z">
                                        </path>
                                    </svg>
                                    <div class="help-text">
                                        <p class="text--s">
                                            - 1 an pour les moins de 16 ans <br>
                                            - 5 ans pour les 16 à 42 ans <br>
                                            - 3 ans pour les plus de 42 ans
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="form-check">
                                <input type="radio" name="prescription" value="Oui" id="yes" @if(old('prescription') === 'Oui') checked @endif>
                                <label class="form-label" for="yes">Oui</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="prescription" value="Non" id="no" @if(old('prescription') === 'Non') checked @endif>
                                <label class="form-label" for="no">Non</label>
                            </div>
                        </div>
                    </div>
                    <div id="lens-content"
                        class="content flex col gap--4 align--start form-content w--100 border--top border--secondary-color-3 pt--4">
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
                            <label for="prescription-file" class="form-label flex row align--center"><span
                                    class="text--xs">(Format JPG, PNG, PDF. Maximum 2mo)</span></label>
                            <input id="prescription-file" name="prescription-file" type="file">
                        </div>
                        <div id="information-send-content" class="content-sub flex col gap--2 form-sub-content w--100">
                            <div class="flex col align--self-start gap--2 w--100">
                                <label for="lens-model" class="form-label">Modèle de lentilles*</label>
                                <input id="lens-model" name="lens-model" type="text" class="form-input"
                                    placeholder="Modèle et marque de vos lentilles" value="{{  old('lens-model') }}">
                            </div>
                            <div class="grid grid--2 grid--1-mobile grid-gap--16 w--100 mt--8">
                                <div class="flex col gap--2">
                                    <p
                                        class="form-label text--m border--rounded bg--secondary-color-2 p--1 w--fit-content">
                                        Oeil gauche*</p>
                                    <label for="left-sphere" class="form-label">Sphère*</label>
                                    <select autocomplete="off" class="form-input" name="left-sphere" id="left-sphere">
                                        @for ($i = 20; $i >= -20; $i -= 0.25)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                        @endfor
                                    </select>
                                    <label for="left-cylinder" class="form-label">Cylindre*</label>
                                    <select autocomplete="off" class="form-input" name="left-cylinder"
                                        id="left-cylinder">
                                        @for ($i = 0; $i >= -5; $i -= 0.25)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                        @endfor
                                    </select>
                                    <label for="left-axis" class="form-label">Axe*</label>
                                    <select autocomplete="off" class="form-input" name="left-axis" id="left-axis">
                                        @for ($i = 0; $i <= 180; $i += 5)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}°</option>
                                        @endfor
                                    </select>
                                    <label for="left-add" class="form-label flex row align--center">Addition <span
                                            class="text--xs">(optionnel)</span></label>
                                    <select autocomplete="off" class="form-input" name="left-add" id="left-add">
                                        @for ($i = 0; $i <= 3; $i += 0.25)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                        @endfor
                                    </select>
                                    <label for="left-radius" class="form-label flex row align--center">Rayon et diamètre
                                        <span class="text--xs">(optionnel)</span></label>
                                    <input id="left-radius" name="left-radius" type="text" class="form-input">
                                </div>
                                <div class="flex col gap--2">
                                    <p
                                        class="form-label text--m border--rounded bg--secondary-color-2 p--1 w--fit-content">
                                        Oeil droit*</p>
                                    <label for="right-sphere" class="form-label">Sphère*</label>
                                    <select class="form-input" name="right-sphere" id="right-sphere">
                                        @for ($i = 20; $i >= -20; $i -= 0.25)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                        @endfor
                                    </select>
                                    <label for="right-cylinder" class="form-label">Cylindre*</label>
                                    <select autocomplete="off" class="form-input" name="right-cylinder"
                                        id="right-cylinder">
                                        @for ($i = 0; $i >= -5; $i -= 0.25)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                        @endfor
                                    </select>
                                    <label for="right-axis" class="form-label">Axe*</label>
                                    <select autocomplete="off" class="form-input" name="right-axis" id="right-axis">
                                        @for ($i = 0; $i <= 180; $i += 5)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}°</option>
                                        @endfor
                                    </select>
                                    <label for="right-add" class="form-label flex row align--center">Addition <span
                                            class="text--xs">(optionnel)</span></label>
                                    <select autocomplete="off" class="form-input" name="right-add" id="right-add">
                                        @for ($i = 0; $i <= 3; $i += 0.25)
                                            <option @if (strval($i) === '0') selected @endif
                                                value="{{ $i }}">{{ $i > 0 ? '+' . $i : $i }}</option>
                                        @endfor
                                    </select>
                                    <label for="right-radius" class="form-label flex row align--center">Rayon et diamètre
                                        <span class="text--xs">(optionnel)</span></label>
                                    <input id="right-radius" name="right-radius" type="text" class="form-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-recaptcha mt-4" data-sitekey={{ config('services.recaptcha.key') }}></div>
                    @if (session('danger'))
                        <p class="alert alert--danger">{{ session('danger') }}</p>
                    @endif
                    <button type="submit" class="btn btn--main-light">Envoyer le formulaire</button>
                </form>
            @endif
        </div>
    </section>
    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <div class="container">
            <div class="grid grid--3 grid--1-mobile grid-gap--8">
                <div class="flex col">
                    <p class="text--l mb--3"> Votre magasin à Bizanos</p>
                    <div class="flex col gap--2 align--start justify--start">
                        <a target="_blank" href="https://maps.app.goo.gl/ZyfbcUGjv2jdakru7" class="text--m">
                            {{ $options[0]['options_value'] }},
                            {{ $options[1]['options_value'] }} {{ $options[2]['options_value'] }}
                        </a>
                    </div>
                    <div class="flex col gap--2 align--start justify--start">
                        <p class="text--m">
                            <a
                                href="tel:{{ str_replace(' ', '', $options[4]['options_value']) }}">{{ $options[4]['options_value'] }}</a>
                            <br>
                            <a href="mailto:{{ $options[3]['options_value'] }}">{{ $options[3]['options_value'] }}</a>
                        </p>
                    </div>
                </div>
                <div class="flex col">
                    <p class="text--l mb--3"> Votre magasin à Denguin</p>
                    <div class="flex col gap--2 align--start justify--start">
                        <a target="_blank" href="https://maps.app.goo.gl/ZyfbcUGjv2jdakru7" class="text--m">
                            {{ $options[16]['options_value'] }},
                            {{ $options[17]['options_value'] }} {{ $options[18]['options_value'] }}
                        </a>
                    </div>
                    <div class="flex col gap--2 align--start justify--start">
                        <p class="text--m">
                            <a
                                href="tel:{{ str_replace(' ', '', $options[20]['options_value']) }}">{{ $options[20]['options_value'] }}</a>
                            <br>
                            <a href="mailto:{{ $options[19]['options_value'] }}">{{ $options[19]['options_value'] }}</a>
                        </p>
                    </div>
                </div>
                <div class="flex col align--start justify--start">
                    <p class="text--l mb--3"> Les horaires de vos magasins</p>
                    <p class="text--m lowercase">
                        @foreach ($schedule as $value)
                            {{ array_keys($value)[0] }} : {{ array_values($value)[0] }} <br>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
