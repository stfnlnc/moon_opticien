<x-app-layout>
    @section('title', 'Tableau de bord')
    <x-slot name="header">
        @yield('title')
    </x-slot>

    <div class="">
        {{ __("Vous êtes connecté") }}
    </div>
</x-app-layout>
