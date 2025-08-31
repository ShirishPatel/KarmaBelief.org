@extends('layouts.admin')
@section('title', 'Blog Category')
@section('backend_content')

    <div class="container">
        <h2 class="mb-4">Blog Categories</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="text-end mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                Add Category
            </button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $row)
                    <tr>
                        <td>{{ $row->category_name }}</td>
                        <td>{{ $row->category_slug }}</td>
                        <td>
                            <form action="{{ route('blog-category.toggleStatus', $row->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="button"
                                    class="btn btn-sm updateStatus {{ $row->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                    {{ $row->status == 1 ? 'Active' : 'Deactive' }}
                                </button>
                            </form>
                        </td>

                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <button
                                    class="btn btn-outline-success btn-sm d-flex align-items-center justify-content-center p-1"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $row->id }}"
                                    style="width: 32px; height: 32px;">
                                    <i class="tf-icons bx bxs-edit"></i>
                                </button>

                                <form action="{{ route('blog-categories.destroy', $row->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="button"
                                        class="btn btn-danger btn-sm d-flex align-items-center justify-content-center p-1 delete-button"
                                        style="width: 32px; height: 32px;">
                                        <i class="tf-icons bx bxs-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="editModal{{ $row->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('blog-categories.update', $row->id) }}">
                                @csrf @method('PUT')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Edit Blog Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label>Category Name</label>
                                            <input type="text" name="category_name" value="{{ $row->category_name }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="createModal" tabindex="-1">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('blog-categories.store') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Add Blog Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Category Name</label>
                                <input type="text" name="category_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
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
