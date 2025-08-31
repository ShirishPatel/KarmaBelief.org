@extends('layouts.admin')
@section('title', 'Our Progress Section')

@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Our Progress Content Management</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                        Our Progress
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-section" aria-controls="navs-top-section" aria-selected="false">
                        Our Progress Section
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                    <div class="container mt-4">
                        <h4>Update Our Progress</h4>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('our-progress.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ old('heading', $progress->heading ?? '') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control">{{ old('description', $progress->description ?? '') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="btn_label">Button Label</label>
                                <input type="text" name="btn_label" class="form-control"
                                    value="{{ old('btn_label', $progress->btn_label ?? '') }}">
                                @error('btn_label')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="btn_link">Button Link</label>
                                <input type="text" name="btn_link" class="form-control"
                                    value="{{ old('btn_link', $progress->btn_link ?? '') }}">
                                @error('btn_link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="navs-top-section" role="tabpanel">
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Progress Items</h5>
                                <a href="{{ route('our-progress-section.create') }}"
                                    class="btn btn-success btn-sm">Create</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($progressSections)
                                            @foreach ($progressSections as $item)
                                                <tr>
                                                    <td>
                                                        @if ($item->image)
                                                            <img src="{{ asset('storage/' . $item->image ?? '') }}"
                                                                height="50">
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->heading }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>
                                                        <form action="{{ route('our-progress-section.status', $item->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="button"
                                                                class="btn btn-sm updateStatus {{ $item->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                                                {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td class="d-flex gap-2 align-items-center">
                                                        <a href="{{ route('our-progress-section.edit', $item->id) }}"
                                                            class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1 d-flex align-items-center"
                                                            data-toggle="tooltip" data-placement="top" title="Edit Record">
                                                            <i class="tf-icons bx bxs-edit"></i>
                                                        </a>
                                                        <form action="{{ route('our-progress-section.destroy', $item->id) }}"
                                                            method="POST" class="delete-form m-0 p-0 d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm shadow-sm btn-flat mx-1 delete-button d-flex align-items-center"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Delete Record">
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
