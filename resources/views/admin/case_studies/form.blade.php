<form
    action="{{ isset($record) ? route('case-studies.update', $record->id) : route('case-studies.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($record))
        @method('PUT')
    @endif
    <div class="row row-cols-1 g-1">
        <div class="col">
            <div class="card border p-3 shadow-none">
                <div class="col-12 mb-6">
                    <h5 class="m-0">{{ isset($record) ? 'Edit' : 'Add' }} Case Studies</h5>
                </div>
                <div class="row row-cols-1 g-6">

                    <div class="col">
                        <x-form.input label="Category Name" placeholder="Enter Category Name" name="name"
                            value="{{ old('name', $record->name ?? '') }}" required="true" />
                    </div>

                    <div class="w-100">
                        <x-form.textarea label="Short Description" name="description" :value="$record->description ?? ''"
                            :required="true" rows="3" placeholder="Enter Short Description" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-6">
        <x-form.button :model="$record ?? null" />
        <x-form.cancel-button href="{{ route('case-studies.index') }}" />
    </div>
</form>

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
                            height: 800,
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
