@extends('layouts.admin')
@section('title', 'About Award Testimonial')

@section('backend_content')
    <div class="container mt-4">
        <h2 class="mb-4">About Award Testimonial</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('award-testimonial.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Heading</label>
                <input type="text" name="heading" class="form-control" value="{{ old('heading', $record->heading ?? '') }}">
                @error('heading')
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
                <label>Description</label>
                <input type="text" name="description" class="form-control"
                    value="{{ old('description', $record->description ?? '') }}">
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            @php
                $counters = isset($record->counter) ? json_decode($record->counter) : [];
            @endphp



            <div id="dynamic-fields-wrapper">
                @if (!empty($counters))
                    @foreach ($counters as $key => $counter)
                        <div class="heading-desc-group border p-3 rounded mb-3">
                            <h5>Counter Detail</h5>
                            <div class="mb-3">
                                <label>Counter Title</label>
                                <input type="text" name="counter_title[]" class="form-control"
                                    value="{{ $counter->title }}">
                            </div>
                            <div class="mb-3">
                                <label>Counter Value</label>
                                <input type="text" name="counter_value[]" class="form-control"
                                    value="{{ $counter->value }}">
                            </div>
                            <button type="button"
                                class="btn btn-danger btn-sm mt-2 remove-block {{ $loop->first ? 'd-none' : '' }}">Remove</button>
                        </div>
                    @endforeach
                @else
                    <div class="heading-desc-group border p-3 rounded mb-3">
                        <h5>Counter Detail</h5>
                        <div class="mb-3">
                            <label>Counter Title</label>
                            <input type="text" name="counter_title[]" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Counter Value</label>
                            <input type="text" name="counter_value[]" class="form-control">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm mt-2 remove-block d-none">Remove</button>
                    </div>
                @endif
            </div>

            <button type="button" id="add-more" class="btn btn-sm btn-primary mb-3">+ Add More</button><br>

            <div class="mb-3">
                <label>Images</label>
                <input type="file" name="images[]" class="form-control" multiple accept="image/*">

                @if (!empty($record->image))
                    <div class="mt-2 d-flex gap-3">
                        @foreach (explode(',', $record->image) as $img)
                            <img src="{{ asset('storage/' . $img) }}" height="100">
                        @endforeach
                    </div>
                @endif
                @error('images[]')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
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
