@extends('layouts.admin')
@section('title', 'Testimonials Edit')
@section('backend_content')
    <div class="card mb-6">
        <div class="card-body">
            @include('admin.testimonials.form')
        </div>
    </div>
@endsection

@push('backend_scripts')
@endpush
