<form action="{{ isset($record) ? route('project.update', $record->id) : route('project.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @if (isset($record))
        @method('PUT')
    @endif
    <div class="row row-cols-1 g-1">
        <div class="col">
            <div class="card border p-3 shadow-none">
                <div class="col-12 mb-6">
                    <h5 class="m-0">{{ isset($record) ? 'Edit' : 'Add' }} Project</h5>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-6">
                    <x-form.image-upload label="Project Image" name="image" :required="true"
                        :imagePath="isset($record->image) ? asset('storage/' . $record->image) : null"
                        imageId="image_service" size="300px X 300px" />

                    @php
                        $categories = DB::table('case_study_categories')->where('status', '1')->get();
                    @endphp
                    <div class="col">
                        <label for="category_id" class="form-label">Select Category <x-required /></label>
                        <select name="category_id" class="form-control selectpecker" id="category_id"
                            data-live-search="true">
                            <option selected disabled>Select Category</option>
                            @isset($categories)
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $record->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    @php
                        $technology = DB::table('case_study_technologies')->where('status', '1')->get();
                        $selectedTechnologies = old('tech_id', isset($record) ? explode(',', $record->tech_id) : []);
                    @endphp

                    <div class="col">
                        <div class="form-group">
                            <label for="tech_id" class="form-label">Technology</label>
                            <select class="form-control selectpicker border" name="tech_id[]" id="tech_id" multiple
                                data-live-search="true" data-actions-box="true" required>
                                @foreach ($technology as $tech)
                                    <option value="{{ $tech->id }}" {{ in_array($tech->id, $selectedTechnologies) ? 'selected' : '' }}>
                                        {{ $tech->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-text text-danger">{{ $errors->first('tech_id') }}</div>
                        </div>
                    </div>


                    <div class="col">
                        <x-form.input label="Project Name" placeholder="Enter Project Name" name="heading"
                            value="{{ old('heading', $record->heading ?? '') }}" required="true" />
                    </div>

                    <div class="w-100">
                        <x-form.textarea label="Project Short Description" name="short_description"
                            :value="$record->short_description ?? ''" :required="true" rows="3"
                            placeholder="Project Short Description" />
                    </div>
                    <x-display-checkbox :records="$record ?? null" />

                    <div class="w-100">
                        <div class="col-md-12 w-100 mt-4" x-data="serviceData()">
                            <x-form.textarea label="Project Overview" class="editor-textarea" name="description"
                                placeholder="Project Overview" :value="$record->description ?? ''" :required="true" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-6">
        <x-form.button :model="$record ?? null" />
        <x-form.cancel-button href="{{ route('project.index') }}" />
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
                                    input.onchange = function () {
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