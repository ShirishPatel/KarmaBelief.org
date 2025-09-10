@extends('layouts.admin')
@section('title', 'Initial Donations')
@section('backend_content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Initial Donations Create</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('client-stories-section.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        {{-- @isset($valueImg->image)
                        <x-form.image-upload name="client_image"
                            imagePath="{{ asset('storage/' . $valueImg->client_image) }}" :required="true" />
                        @else --}}
                        <x-form.image-upload name="client_image" :required="true" />
                        {{-- @endisset --}}
                    </div>

                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="mb-3">
                            <label>Name <x-required/></label>
                            <input type="text" name="client_name" class="form-control" value="{{ old('client_name') }}">
                            @error('client_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Role <x-required/></label>
                            <input type="text" name="client_role" class="form-control" value="{{ old('client_role') }}">
                            @error('client_role')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="w-100 mb-4">
                            <label>Descriptions <x-required/> </label>
                            <textarea name="client_heading" class="form-control"
                                rows="3">{{ old('client_heading') }}</textarea>
                            @error('client_heading')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('client-stories-section.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection