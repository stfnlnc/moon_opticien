@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-input']) !!}>
    <option value=""> Choisir l'option </option>
    {{ $slot }}
</select>
