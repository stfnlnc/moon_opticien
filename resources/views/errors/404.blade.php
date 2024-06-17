@extends('base')

@section('content')
    <section class="container__full-width h--100 pb--20 bg--secondary-color-3 flex row align--center justify--center">
        <div class="container flex col gap--16 align--center text-center pt--16 c--primary-light">
            <h3>Oups, on s'est trompés de chemin</h3>
            <a hx-boost="true" class="btn btn--main-dark" href="{{ route('index') }}">Retourner au site</a>
        </div>
    </section>
@endsection
