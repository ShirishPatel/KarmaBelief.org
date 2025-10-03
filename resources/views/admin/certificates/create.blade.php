@extends('layouts.admin')
@section('title', 'Create Certificate')

@section('backend_content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Certificate</h5>
            <a href="{{ route('certificates.index') }}" class="btn btn-secondary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Certificate Title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="sort_desc" rows="3" class="form-control" placeholder="Enter short description"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload File (PDF/Image)</label>
                    <input type="file" name="file" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
