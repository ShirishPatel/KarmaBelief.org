@extends('layouts.admin')
@section('title', 'Blog')
@section('backend_content')
    <div class="card">
        <div class="card-header mb-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 px-2 ">Blog List</h5>
            <small class="text-body float-end">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create</a>
            </small>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover align-top">
                <thead>
                    <tr>
                        <th>S.No</th>
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
                                    <img src="{{ asset('storage/' . $record->featured_image) }}" width="auto"
                                        height="50px" class="" alt="">
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
                                                data-id="{{ $record->id }}" data-toggle="tooltip" data-placement="top"
                                                title="Delete Record">
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
                                    'error'
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
                                    'error'
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

    </script>
@endpush
