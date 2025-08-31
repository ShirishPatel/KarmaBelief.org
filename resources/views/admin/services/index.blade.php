@extends('layouts.admin')
@section('title', 'Our Services')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Our Services</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">Our
                        Services</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false"
                        tabindex="-1">Our Services Section </button>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                    <div class="container mt-4">
                        <h2>Our Services</h2>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('services.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="heading">Services Heading</label>
                                <input type="text" class="form-control" name="heading" id="heading"
                                    value="{{ old('heading', $value->heading ?? '') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="title">Services Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title', $value->title ?? '') }}">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Services Description</label>
                                <textarea name="disc" class="form-control" rows="4">{{ old('disc', $value->disc ?? '') }}</textarea>
                                @error('disc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                {{-- <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Our Services Section</h5>
                                <a href="{{ route('solutions.create') }}" class="btn btn-success btn-sm">Create</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Smart Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($valueImg as $key => $value)
                                            <tr>
                                                <td>
                                                    @if ($value->smart_image)
                                                        <img src="{{ asset('storage/' . $value->smart_image) }}"
                                                            height="50">
                                                    @endif
                                                </td>
                                                <td>{{ $value->smart_heading }}</td>
                                                <td>{{ $value->smart_title }}</td>
                                                <td>{{ $value->data }}</td>
                                                <td class="d-flex gap-2 align-items-center">
                                                    <a href="{{ route('solutions.edit', $value->id) }}"
                                                        class="btn btn-sm btn-primary d-flex align-items-center">
                                                        <i class="fas fa-edit me-1"></i> Edit
                                                    </a>
                                                    <form action="{{ route('solutions.destroy', $value->id) }}"
                                                        method="POST" class="delete-form m-0 p-0 d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger delete-button d-flex align-items-center">
                                                            <i class="fas fa-trash-alt me-1"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
    </script>
@endpush
