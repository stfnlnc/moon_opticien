@section('menu')
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Tableau de bord') }}
    </x-nav-link>
    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
        {{ __('Mon profil') }}
    </x-nav-link>
@endsection

<nav x-data="{ open: false }" class=" border--bottom border--stroke-light">
    <!-- Primary Navigation Menu -->
    <div class="container pt--4 pb--4">
        <div class="flex row align--center justify--space-between w--100">
            <div class="flex row align--center gap--8">
                <!-- Logo -->
                <div>
                    <a class="hide-mobile" href="{{ route('dashboard') }}">
                        <svg class="icon--dark" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                             viewBox="0 0 68 68">
                            <path
                                d="M38.7113 45.4466L67.7316 16.3267L51.8726 0.413254L22.8534 29.5321L22.8532 0.400201L0.424805 0.400024V45.82C0.424805 49.8009 2.00075 53.619 4.806 56.4342L11.901 63.5543C14.7068 66.3698 18.5123 67.9517 22.4804 67.9517L67.7466 67.9512L67.7468 45.4464L38.7113 45.4466Z"></path>
                        </svg>
                    </a>
                    <a class="display-mobile" href="{{ route('dashboard') }}">
                        <svg class="icon--dark" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                             viewBox="0 0 68 68">
                            <path
                                d="M38.7113 45.4466L67.7316 16.3267L51.8726 0.413254L22.8534 29.5321L22.8532 0.400201L0.424805 0.400024V45.82C0.424805 49.8009 2.00075 53.619 4.806 56.4342L11.901 63.5543C14.7068 66.3698 18.5123 67.9517 22.4804 67.9517L67.7466 67.9512L67.7468 45.4464L38.7113 45.4466Z"></path>
                        </svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="flex row gap--4 hide-mobile">
                    @yield('menu')
                </div>
            </div>
            <form class="hide-mobile" method="POST" action="{{ route('logout') }}">
                @csrf
                <x-primary-button class="btn--danger" :href="route('logout')"
                                  onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Se déconnecter') }}
                </x-primary-button>
            </form>
            <div class="display-mobile">
                <span class="mobile-menu">
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                </span>
                <div class="mobile-dropdown p--5 flex col align--start gap--8 c--primary-light">
                    <p class="btn btn--dark btn--small align--self-center pointer mobile-close">
                        Fermer le menu
                    </p>
                    <div class="flex col align--start gap--4">
                        @yield('menu')
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
