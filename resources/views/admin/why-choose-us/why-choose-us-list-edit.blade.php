@extends('layouts.admin')
@section('title', 'Edit Why Choose Us List Item')

@section('backend_content')
<div class="col-md-10 offset-md-1 mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Why Choose Us List Item</h5>
            <a href="{{ route('why-choose-us-list.index') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('why-choose-us-list.update', $record->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Heading</label>
                    <input type="text" name="list_heading" value="{{ old('list_heading', $record->list_heading) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="list_description" class="form-control" rows="4" required>{{ old('list_description', $record->list_description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="list_image" class="form-control">
                    @if ($record->list_image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $record->list_image) }}" width="120" class="img-thumbnail">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
