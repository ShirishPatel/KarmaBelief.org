@extends('layouts.admin')
@section('title', 'Create Event')
@section('backend_content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Create Event</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">Event Image</label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}"
                        required>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" id="location" value="{{ old('location') }}"
                        required>
                    @error('location')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" class="form-control" id="start_date"
                        value="{{ old('start_date') }}" required>
                    @error('start_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" name="end_date" class="form-control" id="end_date" value="{{ old('end_date') }}"
                        required>
                    @error('end_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="col-12" x-data="serviceData()">
                    <x-form.textarea label="Event Description" class="editor-textarea" name="event_desc" :value="old('event_desc')"
                        required="true" rows="5" />
                </div>

                <button type="submit" class="btn btn-primary">Create Event</button>
                <a href="{{ route('event.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
@push('backend_scripts')
    <script>
        function serviceData() {
            return {
                init() {
                    this.initializeTinyMCE();
                },
                initializeTinyMCE() {
                    this.$nextTick(() => {
                        tinymce.remove('.editor-textarea');
                        tinymce.init({
                            selector: '.editor-textarea',
                            menubar: true,
                            plugins: 'image link code lists advlist autolink table media',
                            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | code | image | numlist bullist | link',
                            images_upload_url: "{{ url('/blog-images-upload') }}",
                            automatic_uploads: true,
                            file_picker_types: 'image',
                            images_upload_credentials: true,
                            height: 400,
                            file_picker_callback: (callback, value, meta) => {
                                if (meta.filetype === 'image') {
                                    const input = document.createElement('input');
                                    input.setAttribute('type', 'file');
                                    input.setAttribute('accept', 'image/*');
                                    input.onchange = function() {
                                        const file = this.files[0];
                                        const reader = new FileReader();
                                        reader.onload = () => {
                                            const id = 'blobid' + (new Date()).getTime();
                                            const blobCache = tinymce.activeEditor.editorUpload
                                                .blobCache;
                                            const base64 = reader.result.split(',')[1];
                                            const blobInfo = blobCache.create(id, file, base64);
                                            blobCache.add(blobInfo);
                                            callback(blobInfo.blobUri(), {
                                                alt: file.name
                                            });
                                        };
                                        reader.readAsDataURL(file);
                                    };
                                    input.click();
                                }
                            },
                        });
                    });
                },
            };
        }
    </script>
@endpush
