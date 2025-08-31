@extends('layouts.admin')
@section('title', 'Home Hero Section')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Home Hero Section</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#hero-content" aria-controls="hero-content" aria-selected="true">
                        Hero Content
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#hero-button" aria-controls="hero-button" aria-selected="false">
                        About Company
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#hero-services" aria-controls="hero-services" aria-selected="false">
                        Hero Services
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                {{-- Hero Content Tab --}}
                <div class="tab-pane fade active show" id="hero-content" role="tabpanel">
                    <div class="container mt-4">
                        <h5>Hero Section Content</h5>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('ai-ml.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                @if (!empty($record->image))
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $record->image) }}" height="100">
                                    </div>
                                @endif
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tag Line</label>
                                <input type="text" name="tag_line" class="form-control"
                                    value="{{ old('tag_line', $record->tag_line ?? '') }}">
                                @error('tag_line')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Heading</label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ old('heading', $record->heading ?? '') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description', $record->description ?? '') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Button Label</label>
                                <input type="text" name="btn_label" class="form-control"
                                    value="{{ old('btn_label', $record->btn_label ?? '') }}">
                                @error('btn_label')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Button Link</label>
                                <input type="url" name="btn_link" class="form-control"
                                    value="{{ old('btn_link', $record->btn_link ?? '') }}">
                                @error('btn_link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                {{-- Hero Expertise Tab --}}
                <div class="tab-pane fade" id="hero-button" role="tabpanel">
                    <div class="container mt-4">
                        <h5>About Company</h5>
                        <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Image 1</label>
                                    <input type="file" name="image1" class="form-control mb-2">
                                    @if (!empty($value->image1))
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $value->image1) }}" alt="Image 1"
                                                height="100">
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label>Image 2</label>
                                    <input type="file" name="image2" class="form-control mb-2">
                                    @if (!empty($value->image2))
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $value->image2) }}" alt="Image 2"
                                                height="100">
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label>Title Tag</label>
                                    <input type="text" name="title_tag" value="{{ $value->title_tag ?? '' }}"
                                        class="form-control mb-3">
                                </div>
                                <div class="col-md-6">
                                    <label>Heading</label>
                                    <input type="text" name="heading" value="{{ $value->heading ?? '' }}"
                                        class="form-control mb-3">
                                </div>
                                <div class="col-12">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control mb-3">{{ $value->description ?? '' }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label>About Company</label>
                                    <div id="expertiseWrapper">
                                        @if (!empty($value->about_company))
                                            @foreach (json_decode($value->about_company) as $about_company)
                                                <div class="d-flex mb-2">
                                                    <input type="text" name="about_company[]"
                                                        value="{{ $about_company }}" class="form-control me-2">
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm removeExpertise">X</button>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="d-flex mb-2">
                                                <input type="text" name="about_company[]" class="form-control me-2">
                                                <button type="button"
                                                    class="btn btn-danger btn-sm removeExpertise">X</button>
                                            </div>
                                        @endif
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm mt-2" id="addExpertise">+ Add
                                        Expertise</button>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label>Button Label</label>
                                    <input type="text" name="btn_label" value="{{ $value->btn_label ?? '' }}"
                                        class="form-control">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label>Button Link</label>
                                    <input type="text" name="btn_link" value="{{ $value->btn_link ?? '' }}"
                                        class="form-control">
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Hero Services Tab --}}
                @php
                    $services = DB::table('aiml_home_hero_services')->first();
                    $decodedServices = $services ? json_decode($services->services, true) : [];
                @endphp

                <div class="tab-pane fade " id="hero-services" role="tabpanel">
                    <div class="container mt-4">
                        <h5>Hero Section Services</h5>
                        <form action="{{ route('ai-ml-services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if (!empty($services->image))
                                        <img src="{{ asset('storage/' . $services->image) }}" alt="Image"
                                            height="80" class="mt-2">
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Title Tag</label>
                                    <input type="text" name="title_tag" value="{{ $services->title_tag ?? '' }}"
                                        class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="heading" value="{{ $services->heading ?? '' }}"
                                        class="form-control">
                                </div>

                                <div class="col-12 mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3">{{ $services->description ?? '' }}</textarea>
                                </div>
                            </div>

                            <hr>
                            <h6>Services</h6>
                            <div id="serviceRepeater">
                                @if (!empty($decodedServices))
                                    @foreach ($decodedServices as $index => $service)
                                        <div class="row service-item mb-3">
                                            <div class="col-md-5">
                                                <input type="text" name="services[{{ $index }}][title]"
                                                    value="{{ $service['title'] }}" class="form-control"
                                                    placeholder="Service Title">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" name="services[{{ $index }}][value]"
                                                    value="{{ $service['value'] }}" class="form-control"
                                                    placeholder="Service Value">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button"
                                                    class="btn btn-danger remove-service">Remove</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row service-item mb-3">
                                        <div class="col-md-5">
                                            <input type="text" name="services[0][title]" class="form-control"
                                                placeholder="Service Title">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" name="services[0][value]" class="form-control"
                                                placeholder="Service Value">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-danger remove-service">Remove</button>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <button type="button" id="addServiceBtn" class="btn btn-secondary mb-3">Add More
                                Service</button><br>
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
        document.getElementById('addExpertise').addEventListener('click', function() {
            let wrapper = document.getElementById('expertiseWrapper');
            let div = document.createElement('div');
            div.className = "d-flex mb-2";
            div.innerHTML = `
            <input type="text" name="about_company[]" class="form-control me-2">
            <button type="button" class="btn btn-danger btn-sm removeExpertise">X</button>
        `;
            wrapper.appendChild(div);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('removeExpertise')) {
                e.target.parentElement.remove();
            }
        });
    </script>

    <script>
        let serviceIndex = {{ count($decodedServices) ?: 1 }};

        document.getElementById('addServiceBtn').addEventListener('click', function() {
            const repeater = document.getElementById('serviceRepeater');
            const html = `
            <div class="row service-item mb-3">
                <div class="col-md-5">
                    <input type="text" name="services[${serviceIndex}][title]" class="form-control" placeholder="Service Title">
                </div>
                <div class="col-md-5">
                    <input type="text" name="services[${serviceIndex}][value]" class="form-control" placeholder="Service Value">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-service">Remove</button>
                </div>
            </div>
        `;
            repeater.insertAdjacentHTML('beforeend', html);
            serviceIndex++;
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-service')) {
                e.target.closest('.service-item').remove();
            }
        });
    </script>
@endpush
