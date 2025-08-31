@extends('layouts.admin')
@section('title', 'Case Studies Technology Create')
@section('backend_content')
    <form action="{{ route('case-studies-technology.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name">Technology Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>


@endsection
