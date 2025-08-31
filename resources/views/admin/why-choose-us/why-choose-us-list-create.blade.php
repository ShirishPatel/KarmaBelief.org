@extends('layouts.admin')
@section('title', 'Add Why Choose Us List Items')

@section('backend_content')
    <div class="col-md-10 offset-md-1 mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Why Choose Us List Items</h5>
                <a href="{{ route('why-choose-us-list.index') }}" class="btn btn-sm btn-secondary">Back</a>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('why-choose-us-list.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div id="dynamic-fields-wrapper">
                        <div class="heading-desc-group border p-3 rounded mb-3">
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="list_image[]" class="form-control" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label>Heading</label>
                                <input type="text" name="list_heading[]" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="list_description[]" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm mt-2 remove-block d-none">Remove</button>
                        </div>
                    </div>

                    <button type="button" id="add-more" class="btn btn-sm btn-primary mb-3">+ Add More</button><br>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('backend_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.getElementById('dynamic-fields-wrapper');
            const addMoreBtn = document.getElementById('add-more');

            addMoreBtn.addEventListener('click', function() {
                const newBlock = wrapper.firstElementChild.cloneNode(true);
                newBlock.querySelectorAll('input, textarea').forEach(el => el.value = '');
                newBlock.querySelector('.remove-block').classList.remove('d-none');
                wrapper.appendChild(newBlock);
            });

            wrapper.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-block')) {
                    e.target.closest('.heading-desc-group').remove();
                }
            });
        });
    </script>
@endpush
