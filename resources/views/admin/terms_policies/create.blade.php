@extends('layouts.admin')
@section('title', 'Terms & Policy Create')
@section('backend_content')
    <div class="card mb-6">
        <div class="card-body">
            <form action="{{ route('terms-policy.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-1 row-cols-lg-1 g-1">
                    <div class="col">
                        <div class="card border p-3 shadow-none">
                            <div class="row row-cols-1 row-cols-md-1 g-6">
                                <div class="col-12">
                                    <h5 class="m-0">Terms & Policy Details</h5>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="terms_title">Title<x-required/></label>
                                        <input type="text" name="terms_title" value="{{ old('terms_title') }}"
                                            class="form-control" id="terms_title" placeholder="">
                                        <span class="text-danger">{{ $errors->first('terms_title') }}</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Description<x-required/></label>
                                        <textarea name="description" class="form-control" cols="12" id="terms_editor">{{ old('description') }}</textarea>
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('terms-policy.index') }}" class="btn btn-outline-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('backend_scripts')
    <script>
        $(document).ready(function() {
            $('.selectpicker').selectpicker();
        });
        tinymce.init({
            selector: '#terms_editor',
            plugins: 'image link code',
            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | code | image',
            height: 500,
        });
    </script>
@endpush
