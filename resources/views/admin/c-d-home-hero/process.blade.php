@extends('layouts.admin')
@section('title', 'Process Section')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Process Section</h6>
        <div class="container mt-4">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @php
                $processes = json_decode($record->process ?? '[]', true);
            @endphp

            <form action="{{ route('c-d-process.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Title Tag</label>
                    <input type="text" name="title_tag" class="form-control"
                        value="{{ old('title_tag', $record->title_tag ?? '') }}">
                </div>

                <div class="mb-3">
                    <label>Heading</label>
                    <input type="text" name="heading" class="form-control"
                        value="{{ old('heading', $record->heading ?? '') }}">
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $record->description ?? '') }}</textarea>
                </div>

                <hr>
                <h6>Process Items</h6>
                <div id="process-wrapper">
                    @if (!empty($processes))
                        @foreach ($processes as $i => $process)
                            <div class="process-item border p-3 rounded mb-3">
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="process[{{ $i }}][title]" class="form-control"
                                        value="{{ $process['title'] ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label>Value</label>
                                    <input type="text" name="process[{{ $i }}][value]" class="form-control"
                                        value="{{ $process['value'] ?? '' }}">
                                </div>
                                <button type="button"
                                    class="btn btn-danger btn-sm mt-2 remove-process {{ $loop->first ? 'd-none' : '' }}">Remove</button>
                            </div>
                        @endforeach
                    @else
                        <div class="process-item border p-3 rounded mb-3">
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="process[0][title]" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Value</label>
                                <input type="text" name="process[0][value]" class="form-control">
                            </div>
                            <button type="button" class="btn btn-danger btn-sm mt-2 remove-process d-none">Remove</button>
                        </div>
                    @endif
                </div>

                <button type="button" id="add-process" class="btn btn-sm btn-primary mb-3">+ Add More</button><br>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
@push('backend_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.getElementById('process-wrapper');
            const addMoreBtn = document.getElementById('add-process');

            addMoreBtn.addEventListener('click', function() {
                const items = wrapper.querySelectorAll('.process-item');
                const lastIndex = items.length - 1;
                const newIndex = items.length;
                const newBlock = items[0].cloneNode(true);

                newBlock.querySelectorAll('input').forEach(el => {
                    el.value = '';
                    const name = el.getAttribute('name');
                    if (name) {
                        const updatedName = name.replace(/\[\d+\]/, `[${newIndex}]`);
                        el.setAttribute('name', updatedName);
                    }
                });

                newBlock.querySelector('.remove-process').classList.remove('d-none');
                wrapper.appendChild(newBlock);
            });

            wrapper.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-process')) {
                    e.target.closest('.process-item').remove();
                }
            });
        });
    </script>
@endpush
