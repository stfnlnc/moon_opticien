<x-app-layout>
    @section('title', 'Modifier les options du site')
    <x-slot name="header">
        @yield('title')
    </x-slot>

    <section class="container flex col gap--12-mobile">

        <card class="flex col gap--4">
            <h4>Options</h4>
            <form class="flex col gap--4" method="POST" action="{{ route('options.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid grid--2 grid--1-mobile grid-gap--4">
                    <!-- URL -->
                    <div>
                        <x-input-label for="site_url" :value="__('URL')"/>
                        <x-text-input id="site_url" name="site_url" type="text" :value="old('site_url', $option ? $option->site_url : '')" required
                                      autofocus autocomplete="site_url"/>
                        <x-input-error :messages="$errors->get('site_url')"/>
                    </div>

                    <!-- Name -->
                    <div>
                        <x-input-label for="site_name" :value="__('Nom')"/>
                        <x-text-input id="site_name" name="site_name" type="text" :value="old('site_name', $option ? $option->site_name : '')"
                                      required autofocus autocomplete="site_name"/>
                        <x-input-error :messages="$errors->get('site_name')"/>
                    </div>

                    <!-- Keywords -->
                    <div>
                        <x-input-label for="site_keywords" :value="__('Mots clés')"/>
                        <x-text-input id="site_keywords" name="site_keywords" type="text" :value="old('site_keywords', $option ? $option->site_keywords : '')"
                                      required autofocus autocomplete="site_keywords"/>
                        <x-input-error :messages="$errors->get('site_keywords')"/>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="site_description" :value="__('Description')"/>
                    <x-textarea id="site_description" name="site_description" type="text"
                                :value="old('site_description', )" autofocus
                                autocomplete="site_description">
                        {{  $option ? $option->site_description : '' }}
                    </x-textarea>
                    <x-input-error :messages="$errors->get('site_description')"/>
                </div>

                <!-- Favicon -->
                <div>
                    <x-input-label for="site_favicon" :value="__('Favicon')"/>
                    <x-file-input id="site_favicon" name="site_favicon" />
                    <x-input-error :messages="$errors->get('site_favicon')"/>
                </div>

                <!-- Logo -->
                <div>
                    <x-input-label for="site_logo" :value="__('Logo')"/>
                    <x-file-input id="site_logo" name="site_logo" />
                    <x-input-error :messages="$errors->get('site_logo')"/>
                </div>

                <!-- Copyright -->
                <div>
                    <x-input-label for="site_copyright" :value="__('Copyright')"/>
                    <x-text-input id="site_copyright" name="site_copyright" type="text" :value="old('site_copyright', $option ? $option->site_copyright : '')"
                                  autofocus autocomplete="site_copyright"/>
                    <x-input-error :messages="$errors->get('site_copyright')"/>
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
