@extends('layouts.admin')
@section('title', 'Blog')
@section('backend_content')
    <div class="card">
        <div class="card-header mb-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 px-2 ">Donation Policy/Tex Exemption</h5>
            <small class="text-body float-end">
                <a href="{{ route('donation-policy.create') }}" class="btn btn-primary">Create</a>
            </small>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover align-top">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Page</th>
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
                                    {{ $record->title }}
                                </td>
                                <td>
                                    <span>{{ ucwords(str_replace('_', ' ', $record->is_display)) }}</span>
                                </td>

                                <td>
                                    @if ($record->status == 1)
                                        <form action="{{ route('donation-policy.status', $record->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="button" class="btn btn-success badge btn-sm updateStatus"
                                                data-id="{{ $record->id }}">
                                                Active
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('donation-policy.status', $record->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="button" class="btn btn-danger badge btn-sm updateStatus"
                                                data-id="{{ $record->id }}">
                                                In-Active
                                            </button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('donation-policy.edit', $record->id) }}" type="button"
                                            class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1"
                                            data-toggle="tooltip" data-placement="top" title="Edit Record">
                                            <i class="tf-icons bx bxs-edit"></i>
                                        </a>
                                        <form action="{{ route('donation-policy.destroy', $record->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                class="btn btn-danger btn-sm shadow-sm btn-flat delete-button"
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
        // Updating Records Status
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-button').forEach(button => {
                button.addEventListener('click', function(e) {
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
