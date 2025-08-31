@extends('layouts.admin')
@section('title', 'Profile')
@section('backend_content')
    <div class="card mb-6">
        <div class="card-body">
            @include('admin.testimonials.form')
            {{-- <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 g-1">
                    <div class="col">
                        <div class="card border p-3 shadow-none">
                            <div class="col-12 mb-6">
                                <h5 class="m-0">Testimonials List</h5>
                            </div>
                            <div class="row row-cols-1 row-cols-lg-2 g-6">
                                <div class="col d-flex align-items-start align-items-sm-center gap-6">
                                    <img src="{{ asset('assets/backend/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block w-px-100 h-px-100 rounded" id="avtarId" />
                                    <div class="button-wrapper">
                                        <label for="avtar" class="btn btn-primary me-3 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block small">Testimonial Avatar<x-required
                                                    class="text-white" /></span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" name="avtar" id="avtar" class="account-file-input"
                                                hidden accept="image/png, image/jpeg" />
                                        </label>
                                        <div class="small"><b>Allowed :</b> JPG, JPEG or PNG. <br>
                                            <x-image-size> 300px X 300px</x-image-size>
                                        </div>
                                        <span class="text-danger">{{ $errors->first('avtar') }}</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name<x-required /></label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" id="name" placeholder="">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="position">Position<x-required /></label>
                                        <input type="text" name="position" value="{{ old('position') }}"
                                            class="form-control" id="position" placeholder="">
                                        <span class="text-danger">{{ $errors->first('position') }}</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="company_name">Company Name<x-required /></label>
                                        <input type="text" name="company_name" value="{{ old('company_name') }}"
                                            class="form-control" id="company_name" placeholder="">
                                        <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Description<x-required /></label>
                                        <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('testimonial.index') }}" class="btn btn-outline-danger">Cancel</a>
                </div>
            </form> --}}
        </div>
    </div>
@endsection

@push('backend_scripts')
@endpush
