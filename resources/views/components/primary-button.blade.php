<button hx-boost="true" {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn--dark']) }}>
    {{ $slot }}
</button>
