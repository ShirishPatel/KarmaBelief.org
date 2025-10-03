@extends('layouts.admin')
@section('title', 'Blog')
@section('backend_content')

    <div class="nav-align-top nav-tabs-shadow">
        <!-- Tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-categories" aria-controls="navs-top-categories" aria-selected="true">
                    Blog Categories
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"data-bs-target="#navs-top-blogs"
                    aria-controls="navs-top-blogs" aria-selected="false">
                    Blogs
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Blog Categories (active) -->
            <div class="tab-pane show active fade" id="navs-top-categories" role="tabpanel">
                <div class="card-header d-flex align-items-center mb-5">
                    <button class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal"
                        data-bs-target="#createCategoryModal">
                        Add Category
                    </button>
                </div>


                <div class="table-responsive text-nowrap">
                    <table class="table table-hover align-top">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->category_slug }}</td>
                                    <td>
                                        <form action="{{ route('blog-category.toggleStatus', $row->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="button" data-id="{{ $row->id }}"
                                                class="btn btn-sm updateStatuss {{ $row->status == '1' ? 'btn-success' : 'btn-danger' }}">
                                                {{ $row->status == '1' ? 'Active' : 'Deactive' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editCategoryModal{{ $row->id }}">
                                                <i class="tf-icons bx bxs-edit"></i>
                                            </button>
                                            <form action="{{ route('blog-categories.destroy', $row->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm delete-button">
                                                    <i class="tf-icons bx bxs-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Blogs -->
            <div class="tab-pane fade" id="navs-top-blogs" role="tabpanel">
                <div class="card-header d-flex align-items-center mb-5">
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm ms-auto">Create</a>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table align-top">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if (!empty($records))
                                @foreach ($records as $key => $record)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <textarea cols="40" rows="5" class="border-0 bg-transparent" readonly disabled>{{ $record->blog_title }}</textarea>
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/' . $record->featured_image) }}" width="70px"
                                                height="auto" class="" alt="">
                                        </td>
                                        <td>
                                            @if ($record->status == 1)
                                                <form action="{{ route('blogs.status', $record->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="button" class="btn btn-success badge btn-sm updateStatus"
                                                        data-id="{{ $record->id }}">
                                                        Active
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('blogs.status', $record->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="button" class="btn btn-danger badge btn-sm updateStatus"
                                                        data-id="{{ $record->id }}">
                                                        In-Active
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('blogs.edit', $record->id) }}" type="button"
                                                    class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1"
                                                    data-toggle="tooltip" data-placement="top" title="Edit Record">
                                                    <i class="tf-icons bx bxs-edit"></i>
                                                </a>
                                                <form action="{{ route('blogs.destroy', $record->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm shadow-sm btn-flat deleteRecords"
                                                        data-id="{{ $record->id }}" data-toggle="tooltip"
                                                        data-placement="top" title="Delete Record">
                                                        <i class="tf-icons bx bxs-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- CREATE CATEGORY MODAL (moved outside tab) -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1">
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

    @foreach ($categories as $row)
        <div class="modal fade" id="editCategoryModal{{ $row->id }}" tabindex="-1">
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection

@push('backend_scripts')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // Deleting Records
        $(document).ready(function() {
            $(document).on('click', '.deleteRecords', function() {
                var id = $(this).data('id');
                var token = $('meta[name="csrf-token"]').attr('content');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to delete this record?",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('blogs.destroy', ':id') }}'.replace(
                                ':id',
                                id),
                            type: 'DELETE',
                            data: {
                                _token: token,
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'The record has been deleted.',
                                    'success'
                                ).then(() => {
                                    location
                                        .reload();
                                });
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the record.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });

        // Updating Records Status
        $(document).ready(function() {
            $(document).on('click', '.updateStatus', function() {
                var id = $(this).data('id');
                var token = $('meta[name="csrf-token"]').attr('content');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to update this record?",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, update it!',
                    cancelButtonText: 'No, cancel!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('blogs.status', ':id') }}'.replace(
                                ':id',
                                id),
                            type: 'POST',
                            data: {
                                _token: token,
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Updated!',
                                    'The record has been updated.',
                                    'success'
                                ).then(() => {
                                    location
                                        .reload();
                                });
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while updating the record.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });

        $(document).ready(function() {
            $(document).on('click', '.blogCategoryStatus', function() {
                var id = $(this).data('id');
                var token = $('meta[name="csrf-token"]').attr('content');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to update this record?",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, update it!',
                    cancelButtonText: 'No, cancel!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('blog-category.toggleStatus', ':id') }}'
                                .replace(
                                    ':id',
                                    id),
                            type: 'POST',
                            data: {
                                _token: token,
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Updated!',
                                    'The record has been updated.',
                                    'success'
                                ).then(() => {
                                    location
                                        .reload();
                                });
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while updating the record.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
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
            document.querySelectorAll('.updateStatuss').forEach(function(button) {
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
