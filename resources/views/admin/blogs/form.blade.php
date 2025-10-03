<form action="{{ isset($records) ? route('blogs.update', $records->id) : route('blogs.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @if (isset($records))
        @method('PUT')
    @endif

    @php
        $categories = DB::table('blog_categories')->where('status', '1')->get();
        $selectedCategories = old('category_id', isset($records) ? explode(',', $records->category_id) : []);
    @endphp

    <div class="row">
        <div class="col-12 col-lg-8" x-data="serviceData()">
            <x-form.textarea label="Blog Description" class="editor-textarea" name="blog_description" :value="$records->blog_description ?? ''"
                :required="true" rows="5" />
        </div>
        <div class="col-12 col-lg-4">
            <div class="row row-cols-1 row-cols-md-1 g-4 mt-3">
                <div class="col">
                    <div class="row row-cols-1 g-4">
                        <x-form.image-upload label="Blog Image" name="featured_image" :required="true"
                            :imagePath="isset($records->featured_image)
                                ? asset('storage/' . $records->featured_image)
                                : null" imageId="" size="300px X 300px" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="category_id" class="form-label">Blog Category</label>
                        <select class="form-control selectpicker" name="category_id[]" id="category_id" multiple
                            data-live-search="true" data-actions-box="true" data-size="5">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ in_array($category->id, $selectedCategories) ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="form-text text-danger">{{ $errors->first('category_id') }}</div>
                    </div>
                </div>
                <div class="col">
                    <x-form.input label="Blog Title" placeholder="Blog Title" name="blog_title"
                        value="{{ old('blog_title', $records->blog_title ?? '') }}" required="true" />
                </div>
                <x-display-checkbox :records="$records ?? null" />
            </div>
            <div class="card-footer d-flex justify-content-end align-items-center border-top p-0 pt-2 mt-3">
                <x-form.button :model="$records ?? null" />
            </div>
        </div>
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
