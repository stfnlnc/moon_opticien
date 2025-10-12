<div class="flex row col-mobile align-mobile--start align--center justify--center gap--4 gap--4-mobile">
    <a href="{{ route('index') }}"
       class="btn--navbar-{{ $mode }} @if (str_contains($route, 'index')) btn--navbar-{{ $mode }}--active @endif">Home</a>
    <a href="{{ route('shop_service') }}"
       class="btn--navbar-{{ $mode }} @if (str_contains($route, 'shop_service')) btn--navbar-{{ $mode }}--active @endif">En
        Magasin</a>
    <a href="{{ route('home_service') }}"
       class="btn--navbar-{{ $mode }} @if (str_contains($route, 'home_service')) btn--navbar-{{ $mode }}--active @endif">À
        Domicile</a>
    <div class="relative btn--dropdown btn--navbar-{{ $mode }} @if (str_contains($route, 'glasses') OR str_contains($route, 'lenses') OR str_contains($route, 'audition')) btn--navbar-{{ $mode }}--active @endif">
        Nos Produits
        <div class="btn--item absolute t--0">
            <div class="p--4 mt--8 w--fit-content bg--primary-light border--rounded flex col gap--2">
                <a href="{{ route('glasses') }}"
                   class="w-100 btn--navbar-light @if (str_contains($route, 'glasses')) btn--navbar-light--active @endif">Lunettes</a>
                <a href="{{ route('lenses') }}"
                   class="w-100 btn--navbar-light @if (str_contains($route, 'lenses')) btn--navbar-light--active @endif">Lentilles</a>
                <a href="{{ route('audition') }}"
                   class="w-100 btn--navbar-light @if (str_contains($route, 'audition')) btn--navbar-light--active @endif">Audition</a>
            </div>
        </div>
    </div>
    <a href="{{ route('about') }}"
       class="btn--navbar-{{ $mode }} @if (str_contains($route, 'about')) btn--navbar-{{ $mode }}--active @endif">À
        Propos</a>
</div>
