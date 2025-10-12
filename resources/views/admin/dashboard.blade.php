<x-app-layout>
    @section('title', 'Tableau de bord')
    <x-slot name="header">
        @yield('title')
        <p class="tag tag--primary-dark mt--1">{{ Auth::user()->email }}</p>
    </x-slot>

    <div class="">
        {{ __("Vous êtes connecté") }}

    </div>
</x-app-layout>
