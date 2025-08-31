@extends('layouts.admin')
@section('title', 'Why Choose Us Section')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Why Choose Us Section</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#main-section" aria-controls="main-section" aria-selected="true">
                        Why Choose Us Section
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#list-section" aria-controls="list-section" aria-selected="false">
                        Why Choose Us List
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane fade active show" id="main-section" role="tabpanel">
                    <div class="container mt-4">
                        <h5>Why Choose Us (Main)</h5>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('why-choose-us.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                @if (!empty($value->image))
                                    <img src="{{ asset('storage/' . $value->image) }}" height="80" class="mt-2">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Image 2</label>
                                <input type="file" class="form-control" name="image_2">
                                @if (!empty($value->image_2))
                                    <img src="{{ asset('storage/' . $value->image_2) }}" height="80" class="mt-2">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $value->title ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label>Heading</label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ old('heading', $value->heading ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4">{{ old('description', $value->description ?? '') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="list-section" role="tabpanel">
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Why Choose Us List</h5>
                                <a href="{{ route('why-choose-us-list.create') }}" class="btn btn-success btn-sm">Add
                                    New</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listItems as $item)
                                            <tr>
                                                <td>
                                                    @if ($item->list_image)
                                                        <img src="{{ asset('storage/' . $item->list_image) }}"
                                                            height="50">
                                                    @endif
                                                </td>
                                                <td>{{ $item->list_heading }}</td>
                                                <td>{{ $item->list_description }}</td>

                                                <td class="d-flex gap-2 align-items-center">
                                                    <a href="{{ route('why-choose-us-list.edit', $item->id) }}"
                                                        class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1 d-flex align-items-center"
                                                        data-toggle="tooltip" data-placement="top" title="Edit Record">
                                                        <i class="tf-icons bx bxs-edit"></i>
                                                    </a>
                                                    <form action="{{ route('why-choose-us-list.destroy', $item->id) }}"
                                                        method="POST" class="delete-form m-0 p-0 d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm shadow-sm btn-flat mx-1 delete-button d-flex align-items-center"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Delete Record">
                                                            <i class="tf-icons bx bxs-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                        @if ($listItems->isEmpty())
                                            <tr>
                                                <td colspan="5" class="text-center">No records found.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                <form action="{{ route('why-choose-btn.store') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="btn_label">Button Label</label>
                                        <textarea name="btn_label" class="form-control" rows="2">{{ old('btn_label', $btnSettings->btn_label ?? '') }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="btn_link">Button Link</label>
                                        <textarea name="btn_link" class="form-control" rows="2">{{ old('btn_link', $btnSettings->btn_link ?? '') }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save me-1"></i> Save
                                    </button>
                                </form>
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
    </script>
    <script>
        document.getElementById('add-description').addEventListener('click', function() {
            const wrapper = document.getElementById('description-wrapper');

            const newField = document.createElement('div');
            newField.classList.add('input-group', 'mb-2');

            newField.innerHTML = `
            <textarea name="solution_description[]" class="form-control" rows="3"></textarea>
            <button type="button" class="btn btn-danger remove-btn">Remove</button>
        `;

            wrapper.appendChild(newField);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-btn')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endpush
