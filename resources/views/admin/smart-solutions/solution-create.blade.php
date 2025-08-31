@extends('layouts.admin')
@section('title', 'Create Smart Solution')
@section('backend_content')

    <div class="col-xl-8 mx-auto">
        <h4>Create Smart Solution</h4>
        <form action="{{ route('solutions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="smart_image" class="form-control" value="{{ old('smart_image') }}">
                @error('smart_image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Heading</label>
                <input type="text" name="smart_heading" class="form-control" value="{{ old('smart_heading') }}">
                @error('smart_heading')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Smart Title</label>
                <input type="text" name="smart_title" class="form-control" value="{{ old('smart_title') }}">
                @error('smart_title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button Label</label>
                <textarea name="btn_label" class="form-control" rows="4">{{ old('btn_label') }}</textarea>
                @error('btn_label')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button Link</label>
                <textarea name="btn_link" class="form-control" rows="4">{{ old('btn_link') }}</textarea>
                @error('btn_link')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Solution Description</label>
                <div id="description-wrapper">
                    <div class="input-group mb-2">
                        <textarea name="description[]" class="form-control" rows="3"></textarea>

                        <button type="button" class="btn btn-danger remove-btn">Remove</button>
                    </div>
                </div>
                <button type="button" class="btn btn-primary mt-2" id="add-description">Add More</button>
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection
@push('backend_scripts')
    <script>
        document.getElementById('add-description').addEventListener('click', function() {
            const wrapper = document.getElementById('description-wrapper');

            const newField = document.createElement('div');
            newField.classList.add('input-group', 'mb-2');

            newField.innerHTML = `
            <textarea name="description[]" class="form-control" rows="3"></textarea>
            <button type="button" class="btn btn-danger remove-btn">Remove</button>
        `;

            wrapper.appendChild(newField);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-btn')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endpush
