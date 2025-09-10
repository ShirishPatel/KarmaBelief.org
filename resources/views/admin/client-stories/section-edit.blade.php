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

                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="w-100 mb-3">
                        <x-form.image-upload name="client_image" imagePath="{{ asset('storage/' . $data->client_image) }}"
                            :required="true" />
                    </div>
                    <div class="mb-3">
                        <label>Client Name</label>
                        <input type="text" name="client_name" value="{{ $data->client_name }}" class="form-control"
                            required>
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

                    <div class="w-100 mb-4">
                        <label>Descriptions <x-required /> </label>
                        <textarea name="client_heading" class="form-control" rows="5">{{$data->client_heading}}</textarea>
                        @error('client_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>

@endsection