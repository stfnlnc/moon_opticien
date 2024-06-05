<x-app-layout>
    @section('title', 'Modifier les options du site')
    <x-slot name="header">
        @yield('title')
    </x-slot>

    <section class="container flex col gap--12-mobile">

        <card>
            <h4>Options</h4>
            <form method="POST" action="{{ route('options.store') }}">
                @csrf
                <div class="grid grid--2 grid--1-mobile grid-gap--4">
                    <!-- URL -->
                    <div>
                        <x-input-label for="site_url" :value="__('URL du site')"/>
                        <x-text-input id="site_url" name="site_url" type="text" :value="old('site_url', $oldOption ? $oldOption->site_url : '')" required
                                      autofocus autocomplete="site_url"/>
                        <x-input-error :messages="$errors->get('site_url')"/>
                    </div>

                    <!-- Name -->
                    <div>
                        <x-input-label for="site_name" :value="__('Nom du site')"/>
                        <x-text-input id="site_name" name="site_name" type="text" :value="old('site_name', $oldOption ? $oldOption->site_name : '')"
                                      required autofocus autocomplete="site_name"/>
                        <x-input-error :messages="$errors->get('site_name')"/>
                    </div>

                    <!-- Keywords -->
                    <div>
                        <x-input-label for="site_keywords" :value="__('Mots clés du site')"/>
                        <x-text-input id="site_keywords" name="site_keywords" type="text" :value="old('site_keywords', $oldOption ? $oldOption->site_keywords : '')"
                                      required autofocus autocomplete="site_keywords"/>
                        <x-input-error :messages="$errors->get('site_keywords')"/>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="site_description" :value="__('Description du site')"/>
                    <x-textarea id="site_description" name="site_description" type="text"
                                :value="old('site_description', )" autofocus
                                autocomplete="site_description">
                        {{  $oldOption ? $oldOption->site_description : '' }}
                    </x-textarea>
                    <x-input-error :messages="$errors->get('site_description')"/>
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
