@extends('layouts.admin')
@section('title', 'About Technologies')

@section('backend_content')
    <div class="container mt-4">
        <h2 class="mb-4">About Technologies</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('about-technologie.store') }}" method="POST" enctype="multipart/form-data">
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

            <div class="mb-3">
                <label for="description">Description</label>
                <div id="description-wrapper">
                    @if ($record && $record->data)
                        @php $descriptions = json_decode($record->data, true); @endphp
                        @foreach ($descriptions as $desc)
                            <div class="input-group mb-2">
                                <textarea name="description[]" class="form-control" rows="3">{{ Str::after($desc, ':') }}</textarea>
                                <button type="button" class="btn btn-danger remove-btn">Remove</button>
                            </div>
                        @endforeach
                    @else
                        <div class="input-group mb-2">
                            <textarea name="description[]" class="form-control" rows="3"></textarea>
                            <button type="button" class="btn btn-danger remove-btn">Remove</button>
                        </div>
                    @endif
                </div>
                <button type="button" class="btn btn-primary mt-2" id="add-description">Add More</button>
            </div>


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
