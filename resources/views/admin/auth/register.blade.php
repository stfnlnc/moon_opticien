<x-guest-layout>
    <form class="flex col align--start gap--4 border border--stroke-light border--rounded p--8" method="POST" action="{{ route('register') }}">
        @csrf
    <div class="grid grid--2 grid-gap--4">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- FirstName -->
        <div>
            <x-input-label for="firstname" :value="__('Prénom')" />
            <x-text-input id="firstname" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('Téléphone')" />
            <x-text-input id="phone" type="text" name="phone" :value="old('phone')" autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    </div>


        <div  class="flex col gap--4">
            <a class="underline form-label" href="{{ route('login') }}">
                {{ __('Déjà enregistré ?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('S\'enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
