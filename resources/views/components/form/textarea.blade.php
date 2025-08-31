@props([
    'label' => '',
    'name' => '',
    'value' => '',
    'rows' => 5,
    'required' => false,
    'placeholder' => '',
    'class' => '',
])

<div class="form-group">
    <label class="form-label" for="{{ $name }}">
        {{ $label }}
        @if ($required)
            <x-required />
        @endif
    </label>

    <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}"
        class="form-control {{ $class }}" placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
