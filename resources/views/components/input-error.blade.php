@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'errors']) }}>
        @foreach ((array) $messages as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif
