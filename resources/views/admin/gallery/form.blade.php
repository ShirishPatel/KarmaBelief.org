@php
    $categories = DB::table('gallery_categories')->where('status', '1')->get();

    $selectedCategories = old('category_id', isset($record) ? json_decode($record->category_id, true) : []);
@endphp

<div class="col">
    <div class="form-group">
        <label for="category_id" class="form-label">Blog Category</label>
        <select class="form-control selectpicker" name="category_id[]" id="category_id" multiple data-live-search="true"
            data-actions-box="true" data-size="5">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ in_array($category->id, $selectedCategories) ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>
        <div class="form-text text-danger">{{ $errors->first('category_id') }}</div>
    </div>
</div>

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" value="{{ old('title', $record->title ?? '') }}" class="form-control">
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="type" class="form-label">Upload Type</label>
    <select name="upload_type" id="uploadType" class="form-control" required>
        {{-- <option value="url" {{ old('upload_type', $record->type ?? '') == 'url' ? 'selected' : '' }}>Video URL
        </option>
        <option value="video" {{ old('upload_type', $record->type ?? '') == 'video' ? 'selected' : '' }}>Video Upload
        </option>
        <option value="image" {{ old('upload_type', $record->type ?? '') == 'image' ? 'selected' : '' }}>Image Upload
        </option> --}}
        <option value="url" {{ old('upload_type', $record->upload_type ?? '') == 'url' ? 'selected' : '' }}>Video URL
        </option>
        <option value="video" {{ old('upload_type', $record->upload_type ?? '') == 'video' ? 'selected' : '' }}>Video
            Upload</option>
        <option value="image" {{ old('upload_type', $record->upload_type ?? '') == 'image' ? 'selected' : '' }}>Image
            Upload</option>

    </select>
    @error('upload_type')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3" id="urlField" style="display: none;">
    <label for="video_url" class="form-label">Video URL</label>
    <input type="url" name="video_url"
        value="{{ old('video_url', isset($record) && $record->upload_type === 'url' ? $record->path : '') }}"
        class="form-control">

    @error('video_url')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3" id="videoField" style="display: none;">
    <label for="video_file" class="form-label">Upload Video</label>
    <input type="file" name="video_file" class="form-control">
    @if (!empty($record?->path) && $record->upload_type === 'video')
        <small>Current: <a href="{{ asset($record->path) }}" target="_blank">View</a></small>
    @endif
    @error('video_file')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3" id="imageField" style="display: none;">
    <label for="image_file" class="form-label">Upload Image</label>
    <input type="file" name="image_file" class="form-control">
    @if (!empty($record->path) && $record->upload_type === 'image')
        <small>Current: <a href="{{ asset($record->path) }}" target="_blank">View</a></small>
    @endif
    @error('image_file')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $record->desc ?? '') }}</textarea>
</div>

<div class="card-footer d-flex justify-content-end align-items-center px-0">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<script>
    function toggleFields(reset = false) {
        let type = document.getElementById('uploadType').value;

        // Show/Hide fields
        document.getElementById('urlField').style.display = type === 'url' ? 'block' : 'none';
        document.getElementById('videoField').style.display = type === 'video' ? 'block' : 'none';
        document.getElementById('imageField').style.display = type === 'image' ? 'block' : 'none';

        // Reset other inputs when type changes
        if (reset) {
            if (type !== 'url') document.querySelector('input[name="video_url"]').value = '';
            if (type !== 'video') document.querySelector('input[name="video_file"]').value = '';
            if (type !== 'image') document.querySelector('input[name="image_file"]').value = '';
        }
    }

    // Listen for changes
    document.getElementById('uploadType').addEventListener('change', function() {
        toggleFields(true);
    });

    // On page load
    window.onload = function() {
        toggleFields(false);
    }
</script>
