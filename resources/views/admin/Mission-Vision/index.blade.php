@extends('layouts.admin')
@section('title', 'Mission / Vission & Counter')
@section('backend_content')
    <div class="col-xl-12">
        <h6 class="text-body-secondary">Mission / Vission & Counter</h6>
        <div class="nav-align-top nav-tabs-shadow">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#main-section" aria-controls="main-section" aria-selected="true">
                        Mission / Vission
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#list-section"
                        aria-controls="list-section" aria-selected="false">
                        Counter
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane fade active show" id="main-section" role="tabpanel">
                    <div class="container mt-4">
                        <h5>Mission / vission</h5>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('mission-vission.missionstore') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Heading 1</label>
                                <input type="text" name="heading_1" class="form-control"
                                    value="{{ old('heading_1', $records->heading_1 ?? '') }}">
                                @error('heading_1')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Description 1</label>
                                <textarea name="description_1" class="form-control"
                                    rows="4">{{ old('description_1', $records->description_1 ?? '') }}</textarea>
                                @error('description_1')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Heading 2</label>
                                <input type="text" name="heading_2" class="form-control"
                                    value="{{ old('heading_2', $records->heading_2 ?? '') }}">
                                @error('heading_2')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Description 2</label>
                                <textarea name="description_2" class="form-control"
                                    rows="4">{{ old('description_2', $records->description_2 ?? '') }}</textarea>
                                @error('description_2')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="list-section" role="tabpanel">
                    <div class="container mt-4">
                        <h5>Counter Section</h5>
                        @php
                            $counters = json_decode($record->counters ?? '[]');
                        @endphp

                        <form action="{{ route('about-counter.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Heading</label>
                                <input type="text" name="main_heading" class="form-control"
                                    value="{{ old('main_heading', $record->main_heading ?? '') }}">
                            </div>

                            <div id="dynamic-fields-wrapper" class="row row-cols-md-4 g-3">
                                @if (!empty($counters))
                                    @foreach ($counters as $key => $counter)
                                        <div class="col">
                                            <div class="h-100 heading-desc-group border p-3 rounded">
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
                                                <div class="mb-3">
                                                    <label>City/State</label>
                                                    <input type="text" name="counter_city[]" class="form-control"
                                                        value="{{ $counter->city ?? '' }}">
                                                </div>
                                                <button type="button"
                                                    class="btn btn-danger btn-sm mt-2 remove-block {{ $loop->first ? 'd-none' : '' }}">Remove</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col">
                                        <div class="h-100 heading-desc-group border p-3 rounded">
                                            <h5>Counter Detail</h5>
                                            <div class="mb-3">
                                                <label>Counter Title</label>
                                                <input type="text" name="counter_title[]" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Counter Value</label>
                                                <input type="text" name="counter_value[]" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>City/State</label>
                                                <input type="text" name="counter_city[]" class="form-control">
                                            </div>
                                            <button type="button"
                                                class="btn btn-danger btn-sm mt-2 remove-block d-none">Remove</button>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <button type="button" id="add-more" class="btn btn-sm btn-primary my-3">+ Add More</button><br>
                            <button type="submit" class="btn btn-primary ">Save</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const wrapper = document.getElementById('dynamic-fields-wrapper');
        const addMoreBtn = document.getElementById('add-more');

        addMoreBtn.addEventListener('click', function () {
            const newBlock = wrapper.firstElementChild.cloneNode(true);
            newBlock.querySelectorAll('input, textarea').forEach(el => el.value = '');
            newBlock.querySelector('.remove-block').classList.remove('d-none');
            wrapper.appendChild(newBlock);
        });

        wrapper.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-block')) {
                e.target.closest('.heading-desc-group').remove();
            }
        });
    });
</script>