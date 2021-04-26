@props(['value'])

<label {{ $attributes->merge(['class' => 'col-lg-3 col-form-label']) }}>
    {{ $value ?? $slot }}
</label>
