<div class="flex row col-mobile align-mobile--start align--center justify--center gap--4 gap--4-mobile">
    <a hx-boost="true" href="{{ route('index') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'index')) btn--navbar-{{ $mode }}--active @endif">Home</a>
    <a hx-boost="true" href="{{ route('shop_service') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'shop_service')) btn--navbar-{{ $mode }}--active @endif">En Magasin</a>
    <a hx-boost="true" href="{{ route('home_service') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'home_service')) btn--navbar-{{ $mode }}--active @endif">À Domicile</a>
    <a hx-boost="true" href="{{ route('glasses') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'glasses')) btn--navbar-{{ $mode }}--active @endif">Nos Lunettes</a>
    <a hx-boost="true" href="{{ route('lenses') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'lenses')) btn--navbar-{{ $mode }}--active @endif">Nos Lentilles</a>
    <a hx-boost="true" href="{{ route('about') }}" class="btn--navbar-{{ $mode }} @if(str_contains($route, 'about')) btn--navbar-{{ $mode }}--active @endif">À Propos</a>
</div>
