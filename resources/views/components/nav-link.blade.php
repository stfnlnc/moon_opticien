@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text--s underline'
            : 'text--s';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
