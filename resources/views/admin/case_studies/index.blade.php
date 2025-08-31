@extends('layouts.admin')
@section('title', 'Site Support')

@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Case Studies Content</h6>

        <div class="nav-align-top nav-tabs-shadow">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                        Case Studies
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-section" aria-controls="navs-top-section" aria-selected="false">
                        Case Studies Technologies
                    </button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Case Studies Tab -->
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Case Studies</h5>
                                <a href="{{ route('case-studies.create') }}" class="btn btn-primary">Create</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $key => $record)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $record->name }}</td>
                                                <td>
                                                    <textarea class="form-control border-0 bg-transparent" rows="4" readonly>{{ $record->description }}</textarea>
                                                </td>
                                                <td>
                                                    <form action="{{ route('case-studies.status', $record->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="button"
                                                            class="btn btn-{{ $record->status ? 'success' : 'danger' }} badge btn-sm updateStatus"
                                                            data-id="{{ $record->id }}">
                                                            {{ $record->status ? 'Active' : 'In-Active' }}
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('case-studies.edit', $record->id) }}"
                                                            class="btn btn-outline-success btn-sm mx-1"
                                                            data-toggle="tooltip" title="Edit">
                                                            <i class="tf-icons bx bxs-edit"></i>
                                                        </a>
                                                        <form action="{{ route('case-studies.destroy', $record->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm deleteRecords"
                                                                data-id="{{ $record->id }}" data-toggle="tooltip"
                                                                title="Delete">
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
                    </div>
                </div>

                <!-- Case Studies Technologies Tab -->
                <div class="tab-pane fade" id="navs-top-section" role="tabpanel">
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Case Studies Technologies</h5>
                                <a href="{{ route('case-studies-technology.create') }}" class="btn btn-primary">Create</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Technology Name</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tech as $key => $tcng)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $tcng->name }}</td>
                                                <td>
                                                    <form action="{{ route('case-studies-technology.status', $tcng->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="button"
                                                            class="btn btn-sm changeStatus {{ $tcng->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                                            {{ $tcng->status == 1 ? 'Active' : 'Inactive' }}
                                                        </button>
                                                    </form>

                                                </td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('case-studies-technology.edit', $tcng->id) }}"
                                                            class="btn btn-outline-success btn-sm mx-1"
                                                            data-toggle="tooltip" title="Edit">
                                                            <i class="tf-icons bx bxs-edit"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('case-studies-technology.destroy', $tcng->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm deleteRecords"
                                                                data-id="{{ $tcng->id }}" data-toggle="tooltip"
                                                                title="Delete">
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
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('backend_scripts')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        // Delete Record
        $('.deleteRecords').on('click', function() {
            var id = $(this).data('id');
            var token = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to delete this record?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('case-studies.destroy', ':id') }}'.replace(':id', id),
                        type: 'DELETE',
                        data: {
                            _token: token
                        },
                        success: function(response) {
                            Swal.fire('Deleted!', 'The record has been deleted.', 'success')
                                .then(() => {
                                    location.reload();
                                });
                        },
                        error: function() {
                            Swal.fire('Error!', 'Something went wrong.', 'error');
                        }
                    });
                }
            });
        });

        // Toggle Status
        $('.updateStatus').on('click', function() {
            var id = $(this).data('id');
            var token = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to update this status?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#00b894',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('case-studies.status', ':id') }}'.replace(':id', id),
                        type: 'POST',
                        data: {
                            _token: token
                        },
                        success: function(response) {
                            Swal.fire('Updated!', 'Status has been updated.', 'success').then(
                                () => {
                                    location.reload();
                                });
                        },
                        error: function() {
                            Swal.fire('Error!', 'Something went wrong.', 'error');
                        }
                    });
                }
            });
        });
        //text-body-secondary
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.changeStatus').forEach(function(button) {
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
