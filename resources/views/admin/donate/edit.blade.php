@extends('layouts.admin')
@section('title', 'Edit Donor')
@section('backend_content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Donor</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('donate.update', $donor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if ($donor->image)
                        <img src="{{ asset('storage/' . $donor->image) }}" width="100" class="mt-2" alt="Donor Image">
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $donor->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ $donor->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update Donor</button>
            </form>
        </div>
    </div>
@endsection
