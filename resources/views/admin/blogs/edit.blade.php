@extends('layouts.admin')
@section('title', 'Blog Edit')
@section('backend_content')
    <div class="card mb-6">
        <div class="card-body">
            @include('admin.blogs.form')
        </div>
    </div>
@endsection

@push('backend_scripts')
@endpush
