@extends('layouts.admin')
@section('title', 'Home Hero Section')

@section('backend_content')
    <div class="container mt-4">
        <h2 class="mb-4">Home Hero Section</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('home-hero-sections.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
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
                <label>Description</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description', $record->description ?? '') }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button 1 Label</label>
                <input type="text" name="btn_label_1" class="form-control"
                    value="{{ old('btn_label_1', $record->btn_label_1 ?? '') }}">
                @error('btn_label_1')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button 1 Link</label>
                <input type="url" name="btn_link_1" class="form-control"
                    value="{{ old('btn_link_1', $record->btn_link_1 ?? '') }}">
                @error('btn_link_1')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button 2 Label</label>
                <input type="text" name="btn_label_2" class="form-control"
                    value="{{ old('btn_label_2', $record->btn_label_2 ?? '') }}">
                @error('btn_label_2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Button 2 Link</label>
                <input type="url" name="btn_link_2" class="form-control"
                    value="{{ old('btn_link_2', $record->btn_link_2 ?? '') }}">
                @error('btn_link_2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                @if (!empty($record->image))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $record->image) }}" height="100">
                    </div>
                @endif
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
