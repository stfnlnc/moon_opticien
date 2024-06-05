@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text--s underline'
                : 'text--s';
@endphp

<div>
    <a {{ $attributes->merge(['class' => $classes]) }}>

    </a>
    {{ $slot }}
</div>
