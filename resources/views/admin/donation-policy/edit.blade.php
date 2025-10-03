@extends('layouts.admin')
@section('title', 'Edit Donation/Exemption')

@section('backend_content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center"">
            <h5 class="card-title mb-0">Edit Donation Policy/Tex Exemption</h5>
             <a href="{{ route('donation-policy.index') }}" class="btn btn-secondary btn-sm">
            <i class="bi bi-arrow-left"></i> Back
        </a>
        </div>
        <div class="card-body">
            <form action="{{ route('donation-policy.update', $records->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="col-12 mb-3">
                    <x-form.input
                        label="Title"
                        placeholder="Enter title"
                        name="title"
                        value="{{ old('title', $records->title) }}"
                        required="true"
                    />
                </div>

                {{-- Checkbox for pages --}}
                <x-aboutpage-checkbox :records="$records ?? null" />

                <div class="col-12 mb-3" x-data="serviceData()">
                    <x-form.textarea
                        label="Description"
                        class="editor-textarea"
                        name="description"
                        :value="old('description', $records->description)"
                        required="true"
                        rows="5"
                    />
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
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
                                        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                        const base64 = reader.result.split(',')[1];
                                        const blobInfo = blobCache.create(id, file, base64);
                                        blobCache.add(blobInfo);
                                        callback(blobInfo.blobUri(), { alt: file.name });
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
