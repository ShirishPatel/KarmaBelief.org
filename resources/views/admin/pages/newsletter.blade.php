@extends('layouts.admin')
@section('title', 'Contact Inquiry')
@section('backend_content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Contact Inquiry</h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover align-top">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        {{-- <th>Subject</th> --}}
                        <th>Email</th>
                        {{-- <th>Message</th> --}}
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (!empty($records))
                        @foreach ($records as $key => $record)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->phone }}</td>
                                {{-- <td>{{ $record->subject_name }}</td> --}}
                                <td>{{ $record->email }}</td>
                                {{-- <td>
                                    <textarea cols="30" rows="3" class="form-control border-0" readonly>{{ $record->massage }}</textarea>
                                </td> --}}
                                <td>{{ date('d, M Y', strtotime($record->created_at)) }}</td>
                                <td>
                                    <div class="d-flex">
                                        <form action="{{ route('contact.destroy', $record->id) }}" method="POST">
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
                            url: '{{ route('contact.destroy', ':id') }}'.replace(':id',
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
    </script>
@endpush
