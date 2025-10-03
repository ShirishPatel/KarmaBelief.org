@extends('layouts.admin')
@section('title', 'Videos')
@section('backend_content')
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="{{ route('gallery-categories.index') }}" class="btn btn-danger btn-sm">Back</a>
        </div>

        <div class="card-body">
            <div class="col-6">
                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.gallery.form', ['video' => null])
                </form>
            </div>
        </div>
    </div>
@endsection
