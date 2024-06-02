@php
    $roles = [
        'admin' => 'Administrateur',
        'editor' => 'Éditeur',
        'user' => 'Utilisateur'
    ]
@endphp

<x-app-layout>
    @section('title', 'Les utilisateurs')
    <x-slot name="header">
        @yield('title')
        <a href="{{ route('users.create') }}" class="btn btn--small btn--primary-dark mt--1">+ Ajouter un utilisateur</a>
    </x-slot>

    <section class="container flex col w--100">
        <div class="grid grid--4 hide-mobile w--100 p--2 border--bottom border--stroke-light">
            <p class="text--m">Nom</p>
            <p class="text--m">Email</p>
            <p class="text--m">Permissions</p>
            <p class="text--m">Actions</p>
        </div>

        <!-- Show all users order by role -->
        @foreach($users as $user)
            <div class="grid grid--4 grid--1-mobile grid-gap--2 w--100 p--2 border--bottom border--stroke-light">
                <p class="text--s">{{ $user->name }}</p>
                <p class="text--s">{{ $user->email }}</p>
                <p class="text--s tag tag--info">{{ $user->role->title }}</p>
                <div class="flex row gap--2">
                    <a href="{{ route('users.edit', [$user]) }}" class="btn btn--small btn--dark">Éditer</a>
                    <form method="post" action="{{ route('users.destroy', [$user]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn--small btn--danger" onclick="alert('Supprimer cet utilisateur ?')">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
</x-app-layout>
