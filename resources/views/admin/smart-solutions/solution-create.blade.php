@extends('layouts.admin')
@section('title', 'Featured Causes')
@section('backend_content')

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Featured Causes Create</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('solutions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="w-100">
                        <x-form.image-upload name="smart_image" label="Image" :required="true" />
                    </div>

                    <div class="col">
                        <label>Heading <x-required /> </label>
                        <input type="text" name="smart_heading" class="form-control" value="{{ old('smart_heading') }}">
                        @error('smart_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Donor Tag <x-required /></label>
                        <input type="text" name="smart_title" class="form-control" value="{{ old('smart_title') }}">
                        @error('smart_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Button Label <x-required /></label>
                        <input name="btn_label" class="form-control" value="{{ old('btn_label') }}" />
                        @error('btn_label')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Button Link <x-required /></label>
                        <input name="btn_link" class="form-control" value="{{ old('btn_link') }}" />
                        @error('btn_link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="w-100">
                        <label for="description">Description <x-required /></label>
                        <div id="description-wrapper">
                            <div class="input-group">
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-4">Save</button>
            </form>
        </div>
    </div>

@endsection
@push('backend_scripts')
    <script></script>
@endpush