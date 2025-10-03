@extends('layouts.admin')
@section('title', 'Create Donor')
@section('backend_content')
    <div class="card">
        <div class="card-header">
            <h5>Create Donor</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('donate.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Donor</button>
            </form>
        </div>
    </div>
@endsection
