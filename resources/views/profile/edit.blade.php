<x-app-layout>
    @section('title', 'Mon profil')
    <x-slot name="header">
        @yield('title') - {{ Auth::user()->name }}
    </x-slot>

    <div class="flex col gap--4 w--70 w-100-mobile">
        <div class="flex row col-mobile gap--4 w--100">
            <div class="border border--stroke-light border--rounded p--4 w--50 w-100-mobile">
                    @include('profile.partials.update-profile-information-form')
            </div>

            <div class="border border--stroke-light border--rounded p--4 w--50 w-100-mobile">
                    @include('profile.partials.update-password-form')
            </div>
        </div>
        <div class="border border--stroke-light border--rounded p--4 w--fit-content w--100">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
