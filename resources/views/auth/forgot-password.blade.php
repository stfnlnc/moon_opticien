<x-guest-layout>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="flex col align--start gap--4 border border--stroke-light border--rounded p--8" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-label">
            Vous avez oublié votre mot de passe ?
        </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Votre adresse email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Envoyer le lien') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
