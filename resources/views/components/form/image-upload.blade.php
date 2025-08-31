@props([
    'label' => 'Image',
    'name' => 'image',
    'required' => false,
    'imagePath' => null, // Full image path like asset('storage/...') or default
    'imageId' => null, // for preview image ID
    'note' => 'Allowed: JPG, JPEG, PNG.',
    'size' => '300px X 300px',
])

<div class="col d-flex align-items-start align-items-sm-center gap-6">
    <img src="{{ $imagePath ?? asset('assets/backend/img/avatars/1.png') }}" alt="preview-image"
        class="d-block w-px-100 h-px-100 rounded border" id="{{ $imageId ?? $name . 'Preview' }}" />

    <div class="button-wrapper">
        <label for="{{ $name }}" class="btn btn-primary me-3 mb-4" tabindex="0">
            <span class="d-none d-sm-block small">{{ $label }}
                @if ($required)
                    <x-required class="text-white" />
                @endif
            </span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input type="file" name="{{ $name }}" id="{{ $name }}" class="account-file-input" hidden
                accept="image/png, image/jpeg" />
        </label>

        <div class="small">
            <b>{{ $note }}</b><br>
            <x-image-size>{{ $size }}</x-image-size>
        </div>

        @error($name)
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
