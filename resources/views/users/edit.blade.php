<x-app-layout>
    @section('title', $user->name)
    <x-slot name="header">
        Éditer le profil de @yield('title')
    </x-slot>

    <section class="container flex col w--100">
        <card>
            <form method="post" action="{{ route('users.update', [$user]) }}" class="flex col gap--2">
                @csrf
                @method('patch')
                <!-- Selected user role -->
                <p class="tag tag--info">
                    {{ $user->role->title }}
                </p>

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" />
                </div>

                <!-- Phone -->
                <div>
                    <x-input-label for="phone" :value="__('Téléphone')" />
                    <x-text-input id="phone" name="phone" type="text" :value="old('phone', $user->phone)" autofocus autocomplete="phone" />
                    <x-input-error :messages="$errors->get('phone')" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" />

                    <!-- Email verify -->
                    @if (!$user->hasVerifiedEmail())
                        <div class="flex col gap--1  mt--2">
                            <p class="text--s tag tag--danger">
                                {{ __('L\'adresse email n\'est pas vérifiée') }}
                            </p>
                            <button form="send-verification" class="btn btn--small btn--dark">
                                {{ __('Renvoyer le lien de vérification') }}
                            </button>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt--2 text--s">
                                    {{ __('Un nouveau lien a été envoyé à votre adresse email') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Only admin can select permissions -->
                @if($user->role->name === 'admin')
                <div class="flex col gap--1">
                    <x-input-label for="role" :value="__('Permissions')" />
                    <x-select-input id="role" name="role" >
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if($role->name === $user->role->name) {{ 'selected' }} @endif>{{ $role->title }}</option>
                        @endforeach
                    </x-select-input>
                    <x-input-error :messages="$errors->get('role')" />
                </div>
                @endif

                <div class="flex col gap--2 mt--2">
                    <x-primary-button>{{ __('Modifier') }}</x-primary-button>
                </div>
            </form>
        </card>
    </section>

</x-app-layout>
