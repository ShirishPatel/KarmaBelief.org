@extends('layouts.admin')
@section('title', 'Client Stories Section Create')
@section('backend_content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Create Client Story</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('client-stories-section.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Client Image</label>
                        <input type="file" name="client_image" class="form-control">
                        @error('client_image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Client Name</label>
                        <input type="text" name="client_name" class="form-control" value="{{ old('client_name') }}">
                        @error('client_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Client Role</label>
                        <input type="text" name="client_role" class="form-control" value="{{ old('client_role') }}">
                        @error('client_role')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Heading</label>
                        <input type="text" name="client_heading" class="form-control"
                            value="{{ old('client_heading') }}">
                        @error('client_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('client-stories-section.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
