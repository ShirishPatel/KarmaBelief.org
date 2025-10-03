@extends('layouts.admin')
@section('title', 'Donors')
@section('backend_content')
    <div class="card">
        <div class="card-header mb-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 px-2">Donors</h5>
            <small class="text-body float-end">
                <a href="{{ route('donate.create') }}" class="btn btn-primary">Create Donor</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover align-top">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($donors as $key => $donor)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                @if ($donor->image)
                                    <img src="{{ asset('storage/' . $donor->image) }}" width="50" alt="Donor Image">
                                @endif
                            </td>
                            <td>{{ $donor->name }}</td>
                            <td>{{ $donor->description }}</td>
                            <td>
                                @if ($donor->status == 1)
                                    <form action="{{ route('donate.status', $donor->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="button" class="btn btn-success badge btn-sm updateStatus"
                                            data-id="{{ $donor->id }}">
                                            Active
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('donate.status', $donor->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="button" class="btn btn-danger badge btn-sm updateStatus"
                                            data-id="{{ $donor->id }}">
                                            In-Active
                                        </button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('donate.edit', $donor->id) }}"
                                        class="btn btn-outline-success btn-sm mx-1 " title="Edit">
                                        <i class="tf-icons bx bxs-edit"></i>
                                    </a>
                                    <form action="{{ route('donate.destroy', $donor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm delete-button" title="Delete">
                                            <i class="tf-icons bx bxs-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No donors found.</td>
                        </tr>
                    @endforelse
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
