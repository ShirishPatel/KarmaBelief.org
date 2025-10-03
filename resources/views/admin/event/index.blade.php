@extends('layouts.admin')
@section('title', 'Event')
@section('backend_content')
    <div class="card">
        <div class="card-header mb-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 px-2 ">Event</h5>
            <small class="text-body float-end">
                <a href="{{ route('event.create') }}" class="btn btn-primary">Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover align-top">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Location</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($events as $key => $event)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $event->title }}</td>
                            <td>
                                @if ($event->image)
                                    <img src="{{ asset('storage/' . $event->image) }}" width="50" alt="Event Image">
                                @endif
                            </td>
                            <td>{{ $event->location }}</td>
                            <td>{{ date('d M Y', strtotime($event->start_date)) }}</td>
                            <td>{{ date('d M Y', strtotime($event->end_date)) }}</td>
                            <td>
                                @if ($event->status == 1)
                                    <form action="{{ route('event.status', $event->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="button" class="btn btn-success badge btn-sm updateStatus"
                                            data-id="{{ $event->id }}">
                                            Active
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('event.status', $event->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="button" class="btn btn-danger badge btn-sm updateStatus"
                                            data-id="{{ $event->id }}">
                                            In-Active
                                        </button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('event.edit', $event->id) }}" type="button"
                                        class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1" data-toggle="tooltip"
                                        data-placement="top" title="Edit Record">
                                        <i class="tf-icons bx bxs-edit"></i>
                                    </a>
                                    <form action="{{ route('event.destroy', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button"
                                            class="btn btn-danger btn-sm shadow-sm btn-flat delete-button"
                                            data-id="{{ $event->id }}" data-toggle="tooltip" data-placement="top"
                                            title="Delete Record">
                                            <i class="tf-icons bx bxs-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No events found.</td>
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
