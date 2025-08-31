@extends('layouts.admin')
@section('title', 'Our Values Create')
@section('backend_content')
    <form action="{{ route('our-value.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Create Our Value</h5>
            <a href="{{ route('our-value-sections.index') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
        <div class="mb-3">
            <label for="image">image</label>
            <input type="file" class="form-control" name="image" id="image">
            @if (!empty($valueImg->image))
                <img src="{{ asset('storage/' . $valueImg->image) }}" class="mt-2" style="max-height: 150px;">
            @endif
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="heading">Heading</label>
            <input type="text" class="form-control" name="heading" id="heading"
                value="{{ old('heading', $valueImg->heading ?? '') }}">
            @error('heading')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $valueImg->description ?? '') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
