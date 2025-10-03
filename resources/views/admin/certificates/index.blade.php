@extends('layouts.admin')
@section('title', 'Certificates')
@section('backend_content')
    <div class="card">
        <div class="card-header mb-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 px-2">Certificates</h5>
            <small class="text-body float-end">
                <a href="{{ route('certificates.create') }}" class="btn btn-primary">Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover align-top">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Description</th>
                        {{-- <th>File</th> --}}
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if ($records->count())
                        @foreach ($records as $key => $record)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $record->title }}</td>
                                <td>{{ Str::limit($record->sort_desc, '35')  }}</td>
                                {{-- <td>
                                    @if ($record->file)
                                        <a href="{{ asset('storage/' . $record->file) }}" target="_blank"
                                            class="btn btn-sm btn-outline-info">View</a>
                                    @else
                                        <span class="text-muted">No file</span>
                                    @endif
                                </td> --}}
                                <td>
                                    @if ($record->status == 1)
                                        <form action="{{ route('certificates.status', $record->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="button" class="btn btn-success badge btn-sm updateStatus"
                                                data-id="{{ $record->id }}">
                                                Active
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('certificates.status', $record->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="button" class="btn btn-danger badge btn-sm updateStatus"
                                                data-id="{{ $record->id }}">
                                                Inactive
                                            </button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('certificates.edit', $record->id) }}"
                                            class="btn btn-outline-success btn-sm shadow-sm mx-1" data-toggle="tooltip"
                                            title="Edit Record">
                                            <i class="tf-icons bx bxs-edit"></i>
                                        </a>
                                        <form action="{{ route('certificates.destroy', $record->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm shadow-sm delete-button"
                                                data-id="{{ $record->id }}" data-toggle="tooltip" title="Delete Record">
                                                <i class="tf-icons bx bxs-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center text-muted">No records found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('backend_scripts')
    <script>
        // Delete confirmation
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

            // Status confirmation
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
