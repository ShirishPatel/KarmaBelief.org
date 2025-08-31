@extends('layouts.admin')
@section('title', 'Our Values Edit')
@section('backend_content')
    <form action="{{ route('our-progress-section.update', $record->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="heading">Heading</label>
            <input type="text" name="heading" class="form-control" value="{{ old('heading', $record->heading) }}" required>
            @error('heading')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $record->description) }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if ($record->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $record->image) }}" height="80">
                </div>
            @endif
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>

@endsection
