@extends('layouts.admin')
@section('title', 'About Company')

@section('backend_content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">About Company</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('about-technologie.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="w-100">
                        @isset($record->image)
                            <x-form.image-upload name="image" imagePath="{{ asset('storage/' . $record->image) }}" />
                        @else
                            <x-form.image-upload name="image" />
                        @endisset
                    </div>

                    <div class="mb-3">
                        <label>Heading</label>
                        <input type="text" name="heading" class="form-control"
                            value="{{ old('heading', $record->heading ?? '') }}">
                        @error('heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Tag Line</label>
                        <input type="text" name="tag_line" class="form-control"
                            value="{{ old('tag_line', $record->tag_line ?? '') }}">
                        @error('tag_line')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Button Label</label>
                        <input type="text" name="btn_label" class="form-control"
                            value="{{ old('btn_label', $record->btn_label ?? '') }}">
                        @error('btn_label')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Button Link</label>
                        <input type="url" name="btn_link" class="form-control"
                            value="{{ old('btn_link', $record->btn_link ?? '') }}">
                        @error('btn_link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="w-100">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control"
                            rows="5">{{ Str::after($record->data ?? '', ':') }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </div>
@endsection