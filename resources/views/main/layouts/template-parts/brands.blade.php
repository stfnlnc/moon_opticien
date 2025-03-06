@props([
    'title' => 'Nos marques adultes',
    'locations' => ''
])

<section class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center">
    <div class="pt--10 pb--10 flex col align--center gap--12 w--100">
        <h3>{{ $title }}</h3>
        <div class="wrapper">
            @php
                $brands = [
                      'andybrook' => 'bizanos',
                      'arnette' => 'denguin',
                      'avengers' => 'b-kids',
                      'bananamoon' => 'denguin',
                      'bright-son' => 'denguin',
                      'clic' => 'bizanos,denguin',
                      'demetz' => 'bizanos,denguin,b-kids',
                      'disney' => 'b-kids',
                      'enricocecchi' => 'bizanos',
                      'etnia' => 'bizanos',
                      'frenchretro' => 'bizanos,b-kids',
                      'guess' => 'denguin',
                      'hypnotic' => 'denguin',
                      'karavan' => 'denguin',
                      'kietla' => 'b-kids,d-kids',
                      'lacoste' => 'denguin,d-kids',
                      'liujo' => 'denguin',
                      'longchamp' => 'bizanos',
                      'marlone' => 'bizanos',
                      'nike' => 'd-kids',
                      'octika' => 'bizanos,b-kids',
                      'osmose' => 'bizanos,denguin',
                      'ralph' => 'bizanos,denguin',
                      'rayban' => 'bizanos,denguin,b-kids,d-kids',
                      'reine-des-neiges' => 'b-kids',
                      'roussilhe' => 'denguin',
                      'schott' => 'bizanos',
                      'spiderman' => 'b-kids',
                      'tete-a-lunettes' => 'd-kids',
                      'vogue' => 'bizanos,denguin',
                     'cooper' => 'lenses',
                     'johnson-johnson' => 'lenses',
                     'bausch-lomb' => 'lenses',
                     'menicon' => 'lenses',
                     'ophtalmic' => 'lenses',
                ];
            @endphp
            <div class="flex row scroller">
                @foreach($brands as $key => $brand)
                    @if(str_contains($locations, ','))
                        @if(in_array(explode(',', $locations)[0], explode(',', $brand)) || in_array(explode(',', $locations)[1], explode(',', $brand)))
                            <img class="brand-img pl--12" data-location="{{ $brand }}" src="{{ asset('./images/brand/' . $key . '.svg') }}" alt="">
                        @endif
                    @else
                        @if(in_array($locations, explode(',', $brand)))
                            <img class="brand-img pl--12" data-location="{{ $brand }}" src="{{ asset('./images/brand/' . $key . '.svg') }}" alt="">
                        @endif
                    @endif
                @endforeach
                @foreach($brands as $key => $brand)
                    @if(str_contains($locations, ','))
                        @if(in_array(explode(',', $locations)[0], explode(',', $brand)) || in_array(explode(',', $locations)[1], explode(',', $brand)))
                            <img class="brand-img pl--12" data-location="{{ $brand }}" src="{{ asset('./images/brand/' . $key . '.svg') }}" alt="">
                        @endif
                    @else
                        @if(in_array($locations, explode(',', $brand)))
                            <img class="brand-img pl--12" data-location="{{ $brand }}" src="{{ asset('./images/brand/' . $key . '.svg') }}" alt="">
                        @endif
                    @endif
                @endforeach
                @foreach($brands as $key => $brand)
                    @if(str_contains($locations, ','))
                        @if(in_array(explode(',', $locations)[0], explode(',', $brand)) || in_array(explode(',', $locations)[1], explode(',', $brand)))
                            <img class="brand-img pl--12" data-location="{{ $brand }}" src="{{ asset('./images/brand/' . $key . '.svg') }}" alt="">
                        @endif
                    @else
                        @if(in_array($locations, explode(',', $brand)))
                            <img class="brand-img pl--12" data-location="{{ $brand }}" src="{{ asset('./images/brand/' . $key . '.svg') }}" alt="">
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
