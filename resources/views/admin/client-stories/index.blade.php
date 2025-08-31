@extends('layouts.admin')
@section('title', 'Our Client Stories')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Our Client Stories</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#main-section" aria-controls="main-section" aria-selected="true">
                        Client Stories
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#list-section" aria-controls="list-section" aria-selected="false">
                        Client Stories Section
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane fade active show" id="main-section" role="tabpanel">
                    <div class="container mt-4">
                        <h5>Client Stories</h5>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('client-stories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Heading </label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ old('heading', $value->heading ?? '') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $value->title ?? '') }}">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Description </label>
                                <textarea name="disc" class="form-control" rows="4">{{ old('disc', $value->disc ?? '') }}</textarea>
                                @error('disc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="list-section" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Client Stories Section</h5>
                                <a href="{{ route('client-stories-section.create') }}"
                                    class="btn btn-success btn-sm">Create</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>client Name</th>
                                            <th>Heading</th>
                                            <th>client Role</th>
                                            <th>client Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($clientValue)
                                            @foreach ($clientValue as $value)
                                                <tr>
                                                    <td>
                                                        @if ($value->client_image)
                                                            <img src="{{ asset('storage/' . $value->client_image) }}"
                                                                height="50">
                                                        @endif
                                                    </td>
                                                    <td>{{ $value->client_name }}</td>
                                                    <td>{{ $value->client_heading }}</td>
                                                    <td>{{ $value->client_role }}</td>
                                                    <td>
                                                        <form action="{{ route('client-stories-section.status', $value->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="button"
                                                                class="btn btn-sm updateStatus {{ $value->client_status == 1 ? 'btn-success' : 'btn-danger' }}">
                                                                {{ $value->client_status == 1 ? 'Active' : 'Inactive' }}
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td class="d-flex gap-2 align-items-center">
                                                        <a href="{{ route('client-stories-section.edit', $value->id) }}"
                                                            class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1 d-flex align-items-center"
                                                            data-toggle="tooltip" data-placement="top" title="Edit Record">
                                                            <i class="tf-icons bx bxs-edit"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('client-stories-section.destroy', $value->id) }}"
                                                            method="POST" class="delete-form m-0 p-0 d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm shadow-sm btn-flat mx-1 delete-button d-flex align-items-center"
                                                                data-id="{{ $value->id }}" data-toggle="tooltip"
                                                                data-placement="top" title="Delete Record">
                                                                <i class="tf-icons bx bxs-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('backend_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-button').forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.closest('form');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This action cannot be undone!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.updateStatus').forEach(function(button) {
                button.addEventListener('click', function() {
                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'Do you want to update this status?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, update it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endpush
