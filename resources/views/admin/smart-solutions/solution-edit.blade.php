@extends('layouts.admin')
@section('title', 'Edit Smart Solution')
@section('backend_content')

    <div class="col-xl-8 mx-auto">
        <h4>Edit Smart Solution</h4>
        <form action="{{ route('solutions.update', $record->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="smart_image" class="form-control">
                @if ($record->smart_image)
                    <img src="{{ asset('storage/' . $record->smart_image) }}" alt="Image" height="100" class="mt-2">
                @endif
                @error('smart_image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Heading</label>
                <input type="text" name="smart_heading" class="form-control"
                    value="{{ old('smart_heading', $record->smart_heading) }}">
                @error('smart_heading')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Smart Title</label>
                <input type="text" name="smart_title" class="form-control"
                    value="{{ old('smart_title', $record->smart_title) }}">
                @error('smart_title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button Label</label>
                <textarea name="btn_label" class="form-control" rows="4">{{ old('btn_label', $record->btn_label) }}</textarea>
                @error('btn_label')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button Link</label>
                <textarea name="btn_link" class="form-control" rows="4">{{ old('btn_link', $record->btn_link) }}</textarea>
                @error('btn_link')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Solution Description</label>
                <div id="description-wrapper">
                    @php
                        $descriptions = json_decode($record->data, true) ?? [];
                    @endphp

                    @if (!empty($descriptions))
                        @foreach ($descriptions as $desc)
                            <div class="input-group mb-2">
                                <textarea name="description[]" class="form-control" rows="3">{{ $desc }}</textarea>
                                <button type="button" class="btn btn-danger remove-btn">Remove</button>
                            </div>
                        @endforeach
                    @else
                        <div class="input-group mb-2">
                            <textarea name="description[]" class="form-control" rows="3"></textarea>
                            <button type="button" class="btn btn-danger remove-btn">Remove</button>
                        </div>
                    @endif
                </div>
                <button type="button" class="btn btn-primary mt-2" id="add-description">Add More</button>
            </div>

            <button class="btn btn-success">Update</button>
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
