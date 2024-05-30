<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

        <form class="flex col align--start gap--4 border border--stroke-light border--rounded p--8" method="POST"
              action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')"/>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                              required autofocus autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <!-- Remember Me -->
            <div class="form-check">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <label for="remember_me" class="form-label">{{ __('Se souvenir de moi') }}</label>
            </div>

            <div class="flex col gap--4">
                @if (Route::has('password.request'))
                    <a class="underline form-label" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié') }}
                    </a>
                @endif

                <x-primary-button>
                    {{ __('Se connecter') }}
                </x-primary-button>
            </div>
        </form>
</x-guest-layout>
