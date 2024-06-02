<section class="flex col gap--2">
    @if (session('status') === 'profile-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="alert alert--success"
        >{{ __('Enregistré.') }}</p>
    @endif
    <header>
            <h4>
                {{ __('Vos informations') }}
            </h4>

            <p class="c--secondary-light text--s">
                {{ __("Modifier les informations de votre profil") }}
            </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="flex col gap--2">
        @csrf
        @method('patch')
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
                    <p class="text--s tag tag--warning">
                        {{ __('Votre adresse email n\'est pas vérifiée') }}
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

        <div class="flex col gap--2 mt--2">
            <x-primary-button>{{ __('Modifier') }}</x-primary-button>
        </div>
    </form>
</section>
