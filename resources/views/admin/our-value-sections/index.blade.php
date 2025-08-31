@extends('layouts.admin')
@section('title', 'Our Values Section')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Value Section</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">Our Values
                        Section</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false"
                        tabindex="-1">Our Values</button>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                    <div class="container mt-4">
                        <h2>Our Values Section</h2>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('our-value-sections.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="tag_title">Tag Title</label>
                                <input type="text" class="form-control" name="tag_title" id="tag_title"
                                    value="{{ old('tag_title', $value->tag_title ?? '') }}">
                                @error('tag_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="heading">Heading</label>
                                <input type="text" class="form-control" name="heading" id="heading"
                                    value="{{ old('heading', $value->heading ?? '') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $value->description ?? '') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Our Value List</h5>
                                <a href="{{ route('our-value.create') }}" class="btn btn-success btn-sm">Create</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($valueImg as $key => $value)
                                            <tr>
                                                <td>
                                                    @if ($value->image)
                                                        <img src="{{ asset('storage/' . $value->image) }}" height="50">
                                                    @endif
                                                </td>
                                                <td>{{ $value->heading }}</td>
                                                <td>{{ $value->description }}</td>
                                                <td class="d-flex gap-2 align-items-center">
                                                    <a href="{{ route('our-value.edit', $value->id) }}"
                                                        class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1 d-flex align-items-center"
                                                        data-toggle="tooltip" data-placement="top" title="Edit Record">
                                                        <i class="tf-icons bx bxs-edit"></i>
                                                    </a>
                                                    <form action="{{ route('our-value.destroy', $value->id) }}"
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
    </script>
@endpush
