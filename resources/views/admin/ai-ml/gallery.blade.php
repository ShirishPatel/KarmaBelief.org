@extends('layouts.admin')
@section('title', 'Gallery')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Home Hero Section</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#hero-content">
                        Gallery Tag
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#hero-button">
                        Gallery Section
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade" id="hero-content">
                    <!-- Tag Tab content here -->
                </div>

                <div class="tab-pane fade active show" id="hero-button">
                    <div class="container mt-4">
                        <h5>Gallery Section</h5>
                        <form action="{{ route('ai-ml-gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Tag Title</label>
                                <input type="text" name="tag_title" class="form-control"
                                    value="{{ old('tag_title', $gallery->tag_title ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label>Header</label>
                                <input type="text" name="header" class="form-control"
                                    value="{{ old('header', $gallery->header ?? '') }}">
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description"
                                    class="form-control">{{ old('description', $gallery->description ?? '') }}</textarea>
                            </div>

                            <div id="image-section-wrapper">
                                @if (!empty($gallery->items))
                                    @foreach ($gallery->items as $item)
                                        <div class="image-item row mb-2">
                                            <div class="col-md-5">
                                                <label>Existing Image</label><br>
                                                <img src="{{ asset('storage/' . $item->image) }}" width="100" class="mb-2">
                                                <input type="file" name="images[]" class="form-control" />
                                            </div>
                                            <div class="col-md-5">
                                                <label>Tags</label>
                                                <input name="tags[]" class="form-control tag-input"
                                                    value='{{ json_encode(collect($item->tags)->map(fn($t) => ['value' => $t])) }}'>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-end">
                                                <button type="button" class="btn btn-danger remove-image">X</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="image-item row mb-2">
                                        <div class="col-md-5">
                                            <label>Upload Image</label>
                                            <input type="file" name="images[]" class="form-control" />
                                        </div>
                                        <div class="col-md-5">
                                            <label>Tags</label>
                                            <input name="tags[]" class="form-control tag-input" value=''>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="button" class="btn btn-danger remove-image">X</button>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <button type="button" class="btn btn-secondary mb-3" id="addImageItem">+ Add Image</button><br>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('backend_scripts')
    <script>
        function initTagifyInputs() {
            document.querySelectorAll('input.tag-input').forEach(function (input) {
                if (!input.classList.contains('tagified')) {
                    const tagify = new Tagify(input);
                    input._tagify = tagify;
                    input.classList.add('tagified');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            initTagifyInputs();

            const addImageBtn = document.getElementById('addImageItem');
            if (addImageBtn) {
                addImageBtn.addEventListener('click', function () {
                    const wrapper = document.getElementById('image-section-wrapper');
                    const newItem = document.createElement('div');
                    newItem.className = 'image-item row mb-2';
                    newItem.innerHTML = `
                        <div class="col-md-5">
                            <label>Upload Image</label>
                            <input type="file" name="images[]" class="form-control" />
                        </div>
                        <div class="col-md-5">
                            <label>Tags</label>
                            <input type="text" name="tags[]" class="form-control tag-input" value="">
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-danger remove-image">X</button>
                        </div>
                    `;
                    wrapper.appendChild(newItem);
                    initTagifyInputs();
                });
            }

            document.addEventListener('click', function (e) {
                if (e.target.classList.contains('remove-image')) {
                    e.target.closest('.image-item').remove();
                }
            });

            document.querySelector('form').addEventListener('submit', function () {
                document.querySelectorAll('.tag-input').forEach(function (input) {
                    if (input._tagify) {
                        // Convert Tagify tag array to JSON string
                        input.value = JSON.stringify(input._tagify.value.map(tag => ({ value: tag.value })));
                    }
                });
            });
        });
    </script>
@endpush