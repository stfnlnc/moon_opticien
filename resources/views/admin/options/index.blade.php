<x-app-layout>
    @section('title', 'Les paramètres')
    <x-slot name="header">
        @yield('title')
    </x-slot>

    <section class="container flex col gap--12-mobile">
        <div id="search-results" class="grid grid--2 grid-gap--6">
            <!-- Show all options -->
            <div>
                <div class="p--2 border--rounded bg--secondary-light mb--8">
                    <div class="p--2">
                        <h5>Adresse</h5>
                    </div>
                    @foreach($options as $key => $option)
                        @if($option->options_category === 'address')
                            <div class="w--100 p--2">
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
                <div class="p--2 border--rounded bg--secondary-light mb--8">
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
                </div>
                <div class="p--2 border--rounded bg--secondary-light mb--8">
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
                </div>
                <div class="p--2 border--rounded bg--secondary-light mb--8">
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
            </div>
            <div class="p--2 border--rounded bg--secondary-light mb--8 h--fit-content">
                <div class="p--2">
                    <h5>Horaires</h5>
                </div>
                @foreach($options as $key => $option)
                    @if($option->options_category === 'schedule')
                        <div class="w--100 p--2">
                            <div class="flex row align--center gap--1 text--s hide-mobile w--100">
                                <form method="post" action="{{ route('options.update', $option) }}" class="flex col gap--2 w--100">
                                    @csrf
                                    @method('patch')
                                    <x-input-label for="{{ $option->options_key }}" :value="__($option->options_name)"/>
                                    <div class="flex row gap--2 align--center">
                                        @php
                                            $hours = $option->options_value;
                                            $hours = explode(', ', $hours);

                                            $openAm = '';
                                            $closeAm = '';
                                            $openPm = '';
                                            $closePm = '';
                                            $Am = '';
                                            $Pm = '';
                                            if($hours[0] !== '') {
                                                if(isset($hours) && count($hours) === 2) {
                                                    $Am = explode('–', $hours[0]);
                                                    $Pm = explode('–', $hours[1]);
                                                    $openAm = $Am[0];
                                                    $closeAm = $Am[1];
                                                    $openPm = $Pm[0];
                                                    $closePm = $Pm[1];
                                                } else if ($hours[0] !== 'Fermé' && count($hours) === 1) {
                                                    $hours = explode('–', $hours[0]);
                                                    if($hours[0] < 12) {
                                                        $openAm = $hours[0];
                                                        $closeAm = $hours[1];
                                                    } else {
                                                        $openPm = $hours[0];
                                                        $closePm = $hours[1];
                                                    }
                                                }
                                            }
                                        @endphp
                                        <input class="form-input w--fit-content" value="{{ $openAm }}" type="time" name="open_am_{{ $option->options_key }}" id="open_am_{{ $option->options_key }}">
                                        <p> - </p>
                                        <input class="form-input w--fit-content" value="{{ $closeAm }}" type="time" name="close_am_{{ $option->options_key }}" id="close_am_{{ $option->options_key }}">
                                        <p> et </p>
                                        <input class="form-input w--fit-content" value="{{ $openPm }}" type="time" name="open_pm_{{ $option->options_key }}" id="open_pm_{{ $option->options_key }}">
                                        <p> - </p>
                                        <input class="form-input w--fit-content" value="{{ $closePm }}" type="time" name="close_pm_{{ $option->options_key }}" id="close_pm_{{ $option->options_key }}">
                                        <script>
                                            addEventListener('submit', () => {
                                                let openAm = document.getElementById('open_am_{{ $option->options_key }}').value
                                                let closeAm = document.getElementById('close_am_{{ $option->options_key }}').value
                                                let openPm = document.getElementById('open_pm_{{ $option->options_key }}').value
                                                let closePm = document.getElementById('close_pm_{{ $option->options_key }}').value
                                                document.getElementById('{{ $option->options_key }}').value = (openAm ? (openAm + '–') : '') + closeAm + ((closeAm && openPm) ? ', ' : '') + (openPm ? (openPm + '–') : '') + (closePm ? closePm : '')
                                                if(document.getElementById('{{ $option->options_key }}').value === '') {
                                                    document.getElementById('{{ $option->options_key }}').value = 'Fermé'
                                                }
                                            })
                                        </script>
                                        <input hidden type="text" name="options_value" id="{{ $option->options_key }}">
                                    </div>
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
