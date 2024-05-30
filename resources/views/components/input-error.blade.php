@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'mt--1 alert alert--danger']) }}>
        @foreach ((array) $messages as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif
