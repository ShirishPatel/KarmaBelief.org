@extends('layouts.admin')
@section('title', 'Award & Testimonials')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Award & Testimonials</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                        Testimonials Card
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                        Testimonials
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                {{-- First Tab: Form --}}
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                    <div class="container mt-4">
                        <h2>Testimonials Card</h2>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('testimonials-poster.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="poster_title">Poster Title</label>
                                <input type="text" class="form-control" name="poster_title" id="poster_title"
                                    value="{{ old('poster_title', $value->poster_title ?? '') }}">
                                @error('poster_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="btn_label" class="form-label">Button Label</label>
                                <input type="text" name="btn_label" class="form-control"
                                    value="{{ old('btn_label', $value->btn_label ?? '') }}">
                                @error('btn_label')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="btn_link" class="form-label">Button Link</label>
                                <input type="url" name="btn_link" class="form-control"
                                    value="{{ old('btn_link', $value->btn_link ?? '') }}">
                                @error('btn_link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                {{-- Second Tab: Testimonials --}}
                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Testimonials List</h5>
                            <a href="{{ route('testimonial.create') }}" class="btn btn-primary btn-sm">Create</a>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover align-top">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Company Name</th>
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
                                                    <img src="{{ asset('storage/' . $record->avtar) }}" width="auto"
                                                        height="50px" alt="">
                                                </td>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->position }}</td>
                                                <td>{{ $record->company_name }}</td>
                                                <td>
                                                    <form action="{{ route('testimonial.status', $record->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="button"
                                                            class="btn {{ $record->status == 1 ? 'btn-success' : 'btn-danger' }} badge btn-sm updateStatus"
                                                            data-id="{{ $record->id }}">
                                                            {{ $record->status == 1 ? 'Active' : 'In-Active' }}
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('testimonial.edit', $record->id) }}"
                                                            class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1"
                                                            title="Edit Record">
                                                            <i class="tf-icons bx bxs-edit"></i>
                                                        </a>
                                                        <form action="{{ route('testimonial.destroy', $record->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm shadow-sm btn-flat deleteRecords"
                                                                data-id="{{ $record->id }}" title="Delete Record">
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
        </div>
    </div>
@endsection

@push('backend_scripts')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        // Delete Testimonial
        $('.deleteRecords').on('click', function() {
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
                        url: '{{ route('testimonial.destroy', ':id') }}'.replace(':id', id),
                        type: 'DELETE',
                        data: {
                            _token: token,
                        },
                        success: function(response) {
                            Swal.fire('Deleted!', 'The record has been deleted.', 'error').then(
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

        // Update Testimonial Status
        $('.updateStatus').on('click', function() {
            var id = $(this).data('id');
            var token = $('meta[name="csrf-token"]').attr('content');

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to update this record?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('testimonial.status', ':id') }}'.replace(':id', id),
                        type: 'POST',
                        data: {
                            _token: token,
                        },
                        success: function() {
                            Swal.fire('Updated!', 'The record has been updated.', 'success')
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
    </script>
@endpush
