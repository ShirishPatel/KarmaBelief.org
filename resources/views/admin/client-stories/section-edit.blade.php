@extends('layouts.admin')
@section('title', 'Edit Client Story')
@section('backend_content')

    <div class="card">
        <div class="card-header">Edit Client Story</div>
        <div class="card-body">
            <form action="{{ route('client-stories-section.update', $data->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Client Image</label>
                    <input type="file" name="client_image" class="form-control">
                    @if ($data->client_image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $data->client_image) }}" height="80">
                        </div>
                    @endif
                    @error('client_image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Client Name</label>
                    <input type="text" name="client_name" value="{{ $data->client_name }}" class="form-control" required>
                    @error('client_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Client Role</label>
                    <input type="text" name="client_role" value="{{ $data->client_role }}" class="form-control">
                    @error('client_role')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Client Heading</label>
                    <input type="text" name="client_heading" value="{{ $data->client_heading }}" class="form-control">
                    @error('client_heading')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>

@endsection
