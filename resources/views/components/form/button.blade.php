@props([
    'model' => null,
    'label' => 'Submit', 
    'class' => 'btn btn-primary', 
])

<button type="submit" {{ $attributes->merge(['class' => $class]) }}>
    {{ $model ? 'Update' : $label }}
</button>
