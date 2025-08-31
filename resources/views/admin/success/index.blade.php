@extends('layouts.admin')
@section('title', 'Success Form')

@section('backend_content')
    <div class="container mt-4">
        <form action="{{ route('success.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="background_image" class="form-label">Background Image</label>
                <input type="file" name="background_image" class="form-control">
                @if (!empty($record->background_image))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $record->background_image) }}" height="100">
                    </div>
                @endif
                @error('smart_image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="poster_image" class="form-label">Poster Image</label>
                <input type="file" name="poster_image" class="form-control">
                @if (!empty($record->poster_image))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $record->poster_image) }}" height="100">
                    </div>
                @endif
                @error('poster_image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="success_title" class="form-label">Success Title</label>
                <input type="text" name="success_title" class="form-control"
                    value="{{ old('success_title', $record->success_title ?? '') }}">
                @error('success_title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="success_heading" class="form-label">Success Heading</label>
                <input type="text" name="success_heading" class="form-control"
                    value="{{ old('success_heading', $record->success_heading ?? '') }}">
                @error('success_heading')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="success_disc" class="form-label">Success Description</label>
                <textarea name="success_disc" class="form-control" rows="4">{{ old('success_disc', $record->success_disc ?? '') }}</textarea>
                @error('success_disc')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="btn_label" class="form-label">Button Label</label>
                <input type="text" name="btn_label" class="form-control"
                    value="{{ old('btn_label', $record->btn_label ?? '') }}">
                @error('btn_label')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="btn_link" class="form-label">Button Link</label>
                <input type="url" name="btn_link" class="form-control"
                    value="{{ old('btn_link', $record->btn_link ?? '') }}">
                @error('btn_link')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
