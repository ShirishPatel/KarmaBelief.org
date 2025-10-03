@extends('layouts.admin')
@section('title', 'Edit Certificate')

@section('backend_content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Certificate</h5>
            <a href="{{ route('certificates.index') }}" class="btn btn-secondary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('certificates.update', $record->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $record->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="sort_desc" rows="3" class="form-control">{{ $record->sort_desc }}</textarea>
                </div>

                {{-- <div class="mb-3">
                    <label class="form-label">Current File</label><br>
                    @if ($record->file)
                        <a href="{{ asset('uploads/certificates/' . $record->file) }}" target="_blank"
                            class="btn btn-info btn-sm">View File</a>
                    @endif
                </div> --}}

                <div class="mb-3">
                    <label class="form-label">Upload New File (optional)</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
