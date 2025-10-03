@extends('layouts.admin')
@section('title', 'Blog')
@section('backend_content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <a href="{{ route('blogs.index') }}" class="btn btn-danger btn-sm ms-auto">Back</a>
        </div>
        <div class="card-body">
            @include('admin.blogs.form')
        </div>
    </div>
@endsection
