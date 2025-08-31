@extends('layouts.admin')
@section('title', 'Add Services')
@section('backend_content')
    <div class="card mb-6">
        <div class="card-body">
            @include('admin.projects.form')
        </div>
    </div>
@endsection

@push('backend_scripts')
@endpush
