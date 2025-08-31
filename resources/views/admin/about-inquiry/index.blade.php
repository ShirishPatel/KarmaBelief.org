@extends('layouts.admin')
@section('title', 'Inquiry Section')

@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Inquiry Section</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#about-heading" aria-controls="about-heading" aria-selected="true">
                        About Inquiry
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#about-button" aria-controls="about-button" aria-selected="false">
                        Custom Development Inquiry
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#about-summary" aria-controls="about-summary" aria-selected="false">
                        Dynamic Solution Inquiry
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                {{-- Tab 1: Heading & Description --}}
                <div class="tab-pane fade show active" id="about-heading" role="tabpanel">
                    <div class="container mt-4">
                        <form action="{{ route('about-inquiry.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
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
                                <input type="text" name="description" class="form-control"
                                    value="{{ old('description', $record->description ?? '') }}">
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

                {{-- Tab 2: Button Info --}}
                <div class="tab-pane fade" id="about-button" role="tabpanel">
                    <div class="container mt-4">
                        <form action="{{ route('c_d_inquiry.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Heading</label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ old('heading', $development->heading ?? '') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control"
                                    value="{{ old('description', $development->description ?? '') }}">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Button Label</label>
                                <input type="text" name="btn_label" class="form-control"
                                    value="{{ old('btn_label', $development->btn_label ?? '') }}">
                                @error('btn_label')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Button Link</label>
                                <input type="url" name="btn_link" class="form-control"
                                    value="{{ old('btn_link', $development->btn_link ?? '') }}">
                                @error('btn_link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                {{-- Tab 3: Final Submission --}}
                <div class="tab-pane fade" id="about-summary" role="tabpanel">
                    <div class="container mt-4">
                        <form action="{{ route('dynamic-inquiry.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Heading</label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ old('heading', $dynamic->heading ?? '') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control"
                                    value="{{ old('description', $dynamic->description ?? '') }}">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Button Label</label>
                                <input type="text" name="btn_label" class="form-control"
                                    value="{{ old('btn_label', $dynamic->btn_label ?? '') }}">
                                @error('btn_label')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Button Link</label>
                                <input type="url" name="btn_link" class="form-control"
                                    value="{{ old('btn_link', $dynamic->btn_link ?? '') }}">
                                @error('btn_link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
