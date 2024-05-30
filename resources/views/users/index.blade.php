<x-app-layout>
    @section('title', 'Utilisateurs')
    <x-slot name="header">
        @yield('title')
    </x-slot>

    <div class="">
        {{ __("Vous êtes connecté") }}
    </div>
</x-app-layout>
