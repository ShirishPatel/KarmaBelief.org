<form action="{{ isset($records) ? route('cta.update', $records->id) : route('cta.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @if (isset($records))
        @method('PUT')
    @endif

    <div class="row">
        <div class="col-12 col-lg-8" x-data="serviceData()">
            <x-form.textarea label="CTA Description" class="editor-textarea" name="description" :value="$records->description ?? ''"
                :required="true" rows="5" />

            <x-form.input label="CTA Heading" placeholder="Enter Heading for CTA" name="heading"
                value="{{ old('heading', $records->heading ?? '') }}" required="true" class="mt-3" />
        </div>

        <div class="col-12 col-lg-4">
            <div class="row row-cols-1 row-cols-md-1 g-4 mt-3">
                
                <div class="col">
                    <x-form.input label="Button Label" placeholder="e.g., Contact Us" name="btn_label"
                        value="{{ old('btn_label', $records->btn_label ?? '') }}" required="true" />
                </div>
                
                <div class="col">
                    <x-form.input label="Button Link (URL)" placeholder="e.g., /contact-us" name="btn_link"
                        value="{{ old('btn_link', $records->btn_link ?? '') }}" required="true" />
                </div>
                
                <x-display-checkbox :records="$records ?? null" name="is_display" />

            </div>
            
            <div class="card-footer d-flex justify-content-end align-items-center border-top p-0 pt-2 mt-3">
                <x-form.button :model="$records ?? null" />
            </div>
        </div>
    </div>
</form>
    
@push('backend_scripts')
@endpush