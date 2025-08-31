@extends('layouts.admin')
@section('title', 'Tag')
@section('backend_content')
    <form action="{{ route('ai-ml-tag-gallery.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tag Titles</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
