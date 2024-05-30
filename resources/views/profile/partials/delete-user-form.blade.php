<section class="flex col gap--4">
    <header class="flex col gap--1">
        <h4>
            {{ __('Supprimer mon compte') }}
        </h4>

        <p class="c--secondary-light text--s">
            {{ __('Attention, une fois supprimé, vous ne pourrez pas récupérer les informations de votre compte') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Supprimer mon compte') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="flex col gap--2">
            @csrf
            @method('delete')

            <h4>
                {{ __('Êtes-vous sûr.e de vouloir supprimer votre compte ?') }}
            </h4>

            <p class="c--secondary-light text--s">
                {{ __('Une fois supprimé, vous ne pourrez pas récupérer les informations de ce compte.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Mot de passe') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Mot de passe') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex row col-mobile gap--2">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Annuler') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Supprimer mon compte') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
