@extends('layouts.admin')
@section('title', 'Home Hero Section')

@section('backend_content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Home Hero Section</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('home-hero-sections.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        @isset($record->image)
                            <x-form.image-upload name="image" imagePath="{{ asset('storage/' . $record->image) }}" />
                        @else
                            <x-form.image-upload name="image" />
                        @endisset
                    </div>
                    <div class="w-100">
                        <label>Tag Line</label>
                        <input type="text" name="tag_line" class="form-control"
                            value="{{ old('tag_line', $record->tag_line ?? '') }}">
                        @error('tag_line')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
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
                        <label>Button Label</label>
                        <input type="text" name="btn_label_1" class="form-control"
                            value="{{ old('btn_label_1', $record->btn_label_1 ?? '') }}">
                        @error('btn_label_1')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Button Link</label>
                        <input type="url" name="btn_link_1" class="form-control"
                            value="{{ old('btn_link_1', $record->btn_link_1 ?? '') }}">
                        @error('btn_link_1')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="w-100">
                        <label>Description</label>
                        <textarea name="description" class="form-control"
                            rows="4">{{ old('description', $record->description ?? '') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Save</button>
            </form>
        </div>
    </div>
@endsection