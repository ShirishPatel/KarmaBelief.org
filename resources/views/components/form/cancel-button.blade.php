@props([
    'href' => '#',
    'label' => 'Cancel',
    'class' => 'btn btn-outline-danger',
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $label }}
</a>
