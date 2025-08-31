@props([
    'label' => '',
    'name' => '',
    'type' => 'text',
    'required' => false,
    'value' => '',
    'placeholder' => '',
])

<div class="form-group">
    <label class="form-label" for="{{ $name }}">
        {{ $label }}
        @if ($required)
            <x-required />
        @endif
    </label>

    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'form-control']) }}>

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
