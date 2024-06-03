<x-app-layout>
    @section('title', 'Mon profil')
    <x-slot name="header">
        @yield('title')
        <p class="tag tag--primary-dark mt--1">{{ Auth::user()->email }}</p>
    </x-slot>

    <div class="container pt--8 pb--8 flex col gap--4">
        <div class="flex row col-mobile gap--4 w--fit-content">
            <card>
                    @include('admin.profile.partials.update-profile-information-form')
            </card>

            <card>
                    @include('admin.profile.partials.update-password-form')
            </card>
        </div>
        <card>
            @include('admin.profile.partials.delete-user-form')
        </card>
    </div>
</x-app-layout>
