@extends('layouts.admin')
@section('title', 'Faqs')
@section('backend_content')
    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center mb-5">
            <h5 class="mb-0">FAQ List</h5>  
            <a href="{{ route('faq.create') }}" class="btn btn-primary btn-sm">Create</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr.no</th>
                        <th>question</th>
                        <th>answer</th>
                        <th>Page</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqS as $key => $row)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $row->question }}</td>
                            <td>{{ $row->answer }}</td>
                            <td>{{ Str::title($row->display) }}</td>
                            <td>
                                <form action="{{ route('faq.status', $row->id) }}" method="POST">
                                    @csrf
                                    <button type="button"
                                        class="btn btn-sm updateStatus {{ $row->status ? 'btn-success' : 'btn-danger' }}">
                                        {{ $row->status ? 'Active' : 'Inactive' }}
                                    </button>
                                </form>
                            </td>
                            <td>
                                <div class="d-flex gap-2">

                                    <a href="{{ route('faq.edit', $row->id) }}" class="btn btn-outline-success btn-sm">
                                        <i class="tf-icons bx bxs-edit"></i>
                                    </a>
                                    <form action="{{ route('faq.destroy', $row->id) }}" method="POST">
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
