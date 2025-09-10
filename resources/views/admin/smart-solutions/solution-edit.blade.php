@extends('layouts.admin')
@section('title', 'Featured Causes')
@section('backend_content')

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Featured Causes Edit</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('solutions.update', $record->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="w-100">
                        @isset($record->smart_image)
                            <x-form.image-upload name="smart_image"
                                imagePath="{{ asset('storage/' . $record->smart_image) }}" />
                        @else
                            <x-form.image-upload name="smart_image" />
                        @endisset
                    </div>

                    <div class="col">
                        <label>Heading</label>
                        <form action="{{ route('solutions.update', $record->id) }}" method="POST"
                            enctype="multipart/form-data">
                            <input type="text" name="smart_heading" class="form-control"
                                value="{{ old('smart_heading', $record->smart_heading) }}">
                            @error('smart_heading')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                    </div>

                    <div class="col">
                        <label>Donor Tag</label>
                        <input type="text" name="smart_title" class="form-control"
                            value="{{ old('smart_title', $record->smart_title) }}">
                        @error('smart_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Button Label</label>
                        <input name="btn_label" class="form-control" value="{{ old('btn_label', $record->btn_label) }}" />
                        @error('btn_label')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Button Link</label>
                        <input name="btn_link" class="form-control" value="{{ old('btn_link', $record->btn_link) }}" />
                        @error('btn_link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="w-100">
                        <label for="description">Description</label>
                        <div id="description-wrapper">
                            <div class="input-group mb-2">
                                <textarea name="description" class="form-control"
                                    rows="3">{{ old('description', $record->data) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-success">Update</button>
            </form>
        </div>
    </div>

@endsection

@push('backend_scripts')
    <script>
        document.getElementById('add-description').addEventListener('click', function () {
            const wrapper = document.getElementById('description-wrapper');

            const newField = document.createElement('div');
            newField.classList.add('input-group', 'mb-2');

            newField.innerHTML = `
                                        <textarea name="description[]" class="form-control" rows="3"></textarea>
                                        <button type="button" class="btn btn-danger remove-btn">Remove</button>
                                    `;

            wrapper.appendChild(newField);
        });

        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('remove-btn')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endpush