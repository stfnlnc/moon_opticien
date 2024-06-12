@extends('base')

@section('content')
    <section class="container__full-width h--100 pb--20 bg--secondary-dark flex row align--center justify--center">
        <div class="container flex col gap--16 align--center text-center pt--16 c--secondary-color-2">
            <img class="logo__head" src="{{ asset('/images/logo/moon-logo-primary-gold.svg') }}" alt="">
            <h3>Oups, on s'est trompés de chemin</h3>
            <a class="text--m underline" href="{{ route('home') }}">Retourner au site</a>
        </div>
    </section>
@endsection
