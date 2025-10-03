@extends('layouts.admin')
@section('title', 'Gallery')
@section('backend_content')

    <div class="nav-align-top nav-tabs-shadow">
        <!-- Tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-categories" aria-controls="navs-top-categories" aria-selected="true">
                    Gallery Categories
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"data-bs-target="#navs-top-blogs"
                    aria-controls="navs-top-blogs" aria-selected="false">
                    Gallery
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Blog Categories (active) -->
            <div class="tab-pane show active fade" id="navs-top-categories" role="tabpanel">
                <div class="card-header d-flex align-items-center mb-5">
                    <button class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal"
                        data-bs-target="#createCategoryModal">
                        Add Category
                    </button>
                </div>


                <div class="table-responsive text-nowrap">
                    <table class="table table-hover align-top">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->category_slug }}</td>
                                    <td>
                                        <form action="{{ route('gallery-categories.toggleStatus', $row->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="button" data-id="{{ $row->id }}"
                                                class="btn btn-sm updateStatuss {{ $row->status == '1' ? 'btn-success' : 'btn-danger' }}">
                                                {{ $row->status == '1' ? 'Active' : 'Deactive' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editCategoryModal{{ $row->id }}">
                                                <i class="tf-icons bx bxs-edit"></i>
                                            </button>
                                            <form action="{{ route('gallery-categories.destroy', $row->id) }}"
                                                method="POST">
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
            <!-- Blogs -->
            <div class="tab-pane fade" id="navs-top-blogs" role="tabpanel">
                <div class="card-header d-flex align-items-center mb-5">
                    <a href="{{ route('galleries.create') }}" class="btn btn-primary btn-sm ms-auto">Create</a>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table align-top">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Category</th>
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
                                            @if ($record->upload_type === 'image' && !empty($record->path))
                                                <img src="{{ asset('storage/' . $record->path) }}" width="150"
                                                    height="100" alt="Image">
                                            @elseif ($record->upload_type === 'video' && !empty($record->path))
                                                <video width="150" controls>
                                                    <source src="{{ asset('storage/' . $record->path) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @elseif ($record->upload_type === 'url' && !empty($record->path))
                                                @php
                                                    $url = $record->path;
                                                    $youtubeId = null;
                                                    $vimeoId = null;

                                                    if (preg_match('/youtu\.be\/([^\?]+)/', $url, $matches)) {
                                                        $youtubeId = $matches[1];
                                                    } elseif (preg_match('/youtube\.com.*v=([^&]+)/', $url, $matches)) {
                                                        $youtubeId = $matches[1];
                                                    } elseif (preg_match('/vimeo\.com\/(\d+)/', $url, $matches)) {
                                                        $vimeoId = $matches[1];
                                                    }
                                                @endphp

                                                @if ($youtubeId)
                                                    @php
                                                        $thumbUrl = "https://img.youtube.com/vi/$youtubeId/hqdefault.jpg";
                                                    @endphp
                                                    <a href="{{ $url }}" target="_blank">
                                                        <img src="{{ $thumbUrl }}" width="150" height="100"
                                                            style="object-fit: cover;">
                                                    </a>
                                                @elseif ($vimeoId)
                                                    @php
                                                        $vimeoData = @file_get_contents("https://vimeo.com/api/v2/video/$vimeoId.json");
                                                        $vimeoThumb = null;
                                                        if ($vimeoData) {
                                                            $vimeoData = json_decode($vimeoData, true);
                                                            $vimeoThumb = $vimeoData[0]['thumbnail_medium'] ?? null;
                                                        }
                                                    @endphp
                                                    @if ($vimeoThumb)
                                                        <a href="{{ $url }}" target="_blank">
                                                            <img src="{{ $vimeoThumb }}" width="150" height="100"
                                                                style="object-fit: cover;">
                                                        </a>
                                                    @else
                                                        <a href="{{ $url }}" target="_blank">View Video</a>
                                                    @endif
                                                @else
                                                    <a href="{{ $url }}" target="_blank"
                                                        style="position: relative; display: inline-block;">
                                                        <img src="https://picsum.photos/500/350?random=2"
                                                            style="width:100%; max-width:150px; height:auto; object-fit:cover;"
                                                            alt="Video Placeholder">
                                                        <span
                                                            style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);
                                                          font-size:24px; color:white; pointer-events:none;">▶</span>
                                                    </a>
                                                @endif
                                            @endif
                                        </td>

                                        @php
                                            $categoryIds = json_decode($record->category_id, true);

                                            $categoriesNames = DB::table('gallery_categories')
                                                ->whereIn('id', $categoryIds ?? [])
                                                ->pluck('category_name')
                                                ->toArray();
                                        @endphp

                                        <td>
                                            {{ implode(', ', $categoriesNames) }}
                                        </td>
                                        <td>
                                            @if ($record->status == 1)
                                                <form action="{{ route('galleries.status', $record->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="button"
                                                        class="btn btn-success badge btn-sm updateStatuss"
                                                        data-id="{{ $record->id }}">
                                                        Active
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('galleries.status', $record->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="button" class="btn btn-danger badge btn-sm updateStatuss"
                                                        data-id="{{ $record->id }}">
                                                        In-Active
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('galleries.edit', $record->id) }}" type="button"
                                                    class="btn btn-outline-success btn-sm shadow-sm btn-flat mx-1"
                                                    data-toggle="tooltip" data-placement="top" title="Edit Record">
                                                    <i class="tf-icons bx bxs-edit"></i>
                                                </a>
                                                <form action="{{ route('galleries.destroy', $record->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm shadow-sm btn-flat delete-button"
                                                        data-id="{{ $record->id }}" data-toggle="tooltip"
                                                        data-placement="top" title="Delete Record">
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

    <!-- CREATE CATEGORY MODAL (moved outside tab) -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('gallery-categories.store') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Add Gallery Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Category Name</label>
                            <input type="text" name="category_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @foreach ($categories as $row)
        <div class="modal fade" id="editCategoryModal{{ $row->id }}" tabindex="-1">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('gallery-categories.update', $row->id) }}">
                    @csrf @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit Gallery Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Category Name</label>
                                <input type="text" name="category_name" value="{{ $row->category_name }}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
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
            document.querySelectorAll('.updateStatuss').forEach(function(button) {
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
