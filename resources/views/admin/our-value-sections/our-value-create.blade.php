@extends('layouts.admin')
@section('title', 'Causes')
@section('backend_content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title">Create Causes</h5>
            <a href="{{ route('our-value-sections.index') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('our-value.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    @isset($valueImg->image)
                        <x-form.image-upload name="image" imagePath="{{ asset('storage/' . $valueImg->image) }}" :required="true" />
                    @else
                        <x-form.image-upload name="image" :required="true"/>
                    @endisset
                </div>
                <div class="mb-3">
                    <label for="heading">Heading <x-required/> </label>
                    <input type="text" class="form-control" name="heading" id="heading"
                        value="{{ old('heading', $valueImg->heading ?? '') }}">
                    @error('heading')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description">Description <x-required/> </label>
                    <textarea name="description" id="description" class="form-control"
                        rows="4">{{ old('description', $valueImg->description ?? '') }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection