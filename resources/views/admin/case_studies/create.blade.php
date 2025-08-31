@extends('layouts.admin')
@section('title', 'Add Case Studies')
@section('backend_content')
    <div class="card mb-6">
        <div class="card-body">
            @include('admin.case_studies.form')
        </div>
    </div>
@endsection

@push('backend_scripts')
@endpush