<x-app-layout>
    @section('title', 'Les paramètres')
    <x-slot name="header">
        @yield('title')
    </x-slot>

    <section class="container flex col gap--12-mobile">
        <div id="search-results" class="grid grid--2 grid-gap--6">
            <!-- Show all options -->
            <div>
                <div class="p--2">
                    <h5>Adresse</h5>
                </div>
                @foreach($options as $key => $option)
                    @if($option->options_category === 'address')
                        <div class="w--100 p--2 border--rounded {{ ($key % 2 != 0) ? 'bg--secondary-light' : '' }}">
                            <div class="flex row align--center gap--1 text--s hide-mobile w--100">
                                <form method="post" action="{{ route('options.update', $option) }}" class="flex col gap--2 w--100">
                                    @csrf
                                    @method('patch')
                                    <x-input-label for="{{ $option->options_key }}" :value="__($option->options_name)"/>
                                    <x-text-input class="w--100" id="{{ $option->options_key }}" name="options_value" type="text" :value="old('options_value', $option->options_value)" required
                                                  autofocus autocomplete="options_value"/>
                                    <x-input-error :messages="$errors->get('options_value')"/>
                                    <x-primary-button>{{ __('Modifier') }}</x-primary-button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="p--2">
                    <h5>Informations</h5>
                </div>
                @foreach($options as $key => $option)
                    @if($option->options_category === 'informations')
                        <div class="w--100 p--2 border--rounded {{ ($key % 2 != 0) ? 'bg--secondary-light' : '' }}">
                            <div class="flex row align--center gap--1 text--s hide-mobile w--100">
                                <form method="post" action="{{ route('options.update', $option) }}" class="flex col gap--2 w--100">
                                    @csrf
                                    @method('patch')
                                    <x-input-label for="{{ $option->options_key }}" :value="__($option->options_name)"/>
                                    <x-text-input class="w--100" id="{{ $option->options_key }}" name="options_value" type="text" :value="old('options_value', $option->options_value)" required
                                                  autofocus autocomplete="options_value"/>
                                    <x-input-error :messages="$errors->get('options_value')"/>
                                    <x-primary-button>{{ __('Modifier') }}</x-primary-button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="p--2">
                    <h5>Réseaux sociaux</h5>
                </div>
                @foreach($options as $key => $option)
                    @if($option->options_category === 'social')
                        <div class="w--100 p--2 border--rounded {{ ($key % 2 != 0) ? 'bg--secondary-light' : '' }}">
                            <div class="flex row align--center gap--1 text--s hide-mobile w--100">
                                <form method="post" action="{{ route('options.update', $option) }}" class="flex col gap--2 w--100">
                                    @csrf
                                    @method('patch')
                                    <x-input-label for="{{ $option->options_key }}" :value="__($option->options_name)"/>
                                    <x-text-input class="w--100" id="{{ $option->options_key }}" name="options_value" type="text" :value="old('options_value', $option->options_value)" required
                                                  autofocus autocomplete="options_value"/>
                                    <x-input-error :messages="$errors->get('options_value')"/>
                                    <x-primary-button>{{ __('Modifier') }}</x-primary-button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="p--2">
                    <h5>SMTP</h5>
                </div>
                @foreach($options as $key => $option)
                    @if($option->options_category === 'smtp')
                        <div class="w--100 p--2 border--rounded {{ ($key % 2 != 0) ? 'bg--secondary-light' : '' }}">
                            <div class="flex row align--center gap--1 text--s hide-mobile w--100">
                                <form method="post" action="{{ route('options.update', $option) }}" class="flex col gap--2 w--100">
                                    @csrf
                                    @method('patch')
                                    <x-input-label for="{{ $option->options_key }}" :value="__($option->options_name)"/>
                                    <x-text-input class="w--100" id="{{ $option->options_key }}" name="options_value" type="text" :value="old('options_value', $option->options_value)" required
                                                  autofocus autocomplete="options_value"/>
                                    <x-input-error :messages="$errors->get('options_value')"/>
                                    <x-primary-button>{{ __('Modifier') }}</x-primary-button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div>
                <div class="p--2">
                    <h5>Horaires</h5>
                </div>
                @foreach($options as $key => $option)
                    @if($option->options_category === 'schedule')
                        <div class="w--100 p--2 border--rounded {{ ($key % 2 != 0) ? 'bg--secondary-light' : '' }}">
                            <div class="flex row align--center gap--1 text--s hide-mobile w--100">
                                <form method="post" action="{{ route('options.update', $option) }}" class="flex col gap--2 w--100">
                                    @csrf
                                    @method('patch')
                                    <x-input-label for="{{ $option->options_key }}" :value="__($option->options_name)"/>
                                    <x-text-input class="w--100" id="{{ $option->options_key }}" name="options_value" type="text" :value="old('options_value', $option->options_value)" required
                                                  autofocus autocomplete="options_value"/>
                                    <x-input-error :messages="$errors->get('options_value')"/>
                                    <x-primary-button>{{ __('Modifier') }}</x-primary-button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>

</x-app-layout>
