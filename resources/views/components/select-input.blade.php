@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-input']) !!}>
    <option value="">-- Choisir le statut --</option>
    {{ $slot }}
</select>
