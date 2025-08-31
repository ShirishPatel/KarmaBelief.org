<form action="{{ isset($testimonial) ? route('testimonial.update', $testimonial->id) : route('testimonial.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($testimonial))
        @method('PUT')
    @endif

    <div class="row row-cols-1 g-1">
        <div class="col">
            <div class="card border p-3 shadow-none">
                <div class="col-12 mb-6">
                    <h5 class="m-0">{{ isset($testimonial) ? 'Edit' : 'Add' }} Testimonial</h5>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-6">
                    <x-form.image-upload label="Testimonial Avatar" name="avtar" :required="true" :imagePath="isset($testimonial->avtar) ? asset('storage/' . $testimonial->avtar) : null"
                        imageId="avtarId" size="300px X 300px" />

                    <div class="col">
                        <x-form.input label="Name" placeholder="Testimonial Name" name="name"
                            value="{{ old('name', $testimonial->name ?? '') }}" required="true" />
                    </div>

                    <div class="col">
                        <x-form.input label="Position" placeholder="Testimonial Position" name="position"
                            value="{{ old('position', $testimonial->position ?? '') }}" required="true" />
                    </div>

                    <div class="col">
                        <x-form.input label="Company Name" placeholder="Company Name" name="company_name"
                            value="{{ old('company_name', $testimonial->company_name ?? '') }}" required="true" />
                    </div>

                    <div class="w-100">
                        <x-form.textarea label="Description" name="description" :value="$testimonial->description ?? ''" :required="true"
                            rows="5" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-6">
        <x-form.button :model="$testimonial ?? null" />
        <x-form.cancel-button href="{{ route('testimonial.index') }}" />
    </div>
</form>
