<x-app-layout>
    @section('title', 'Ajouter un utilisateur')
    <x-slot name="header">
        @yield('title')
    </x-slot>

    <section class="container flex col w--100">
        <card>
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="grid grid--2 grid-gap--4">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nom')"/>
                        <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                                      autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')"/>
                    </div>

                    <!-- Phone -->
                    <div>
                        <x-input-label for="phone" :value="__('Téléphone')"/>
                        <x-text-input id="phone" type="text" name="phone" :value="old('phone')" autofocus
                                      autocomplete="phone"/>
                        <x-input-error :messages="$errors->get('phone')"/>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required
                                      autocomplete="username"/>
                        <x-input-error :messages="$errors->get('email')"/>
                    </div>

                    <div></div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Mot de passe')"/>

                        <x-text-input id="password"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password"/>

                        <x-input-error :messages="$errors->get('password')"/>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')"/>

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" required autocomplete="new-password"/>

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                    </div>

                    <!-- Only admin can select permissions -->
                    @if(Auth::user()->role->name === 'admin')
                    <x-select-input id="role" name="role" >
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->title }}</option>
                        @endforeach
                    </x-select-input>
                    @endif
                </div>

                <div class="flex col gap--4">
                    <x-primary-button class="mt--4">
                        {{ __('Enregistrer') }}
                    </x-primary-button>
                </div>
            </form>
        </card>

    </section>

</x-app-layout>
