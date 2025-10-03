@extends('layouts.admin')
@section('title', 'FAQ')
@section('backend_content')
    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="{{ route('faq.index') }}" class="btn btn-danger btn-sm">Back</a>
        </div>
        <form action="{{ route('faq.update', $faq->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="card-body">
                <div class="md-3">
                    <label class="form-label">Page</label>
                    <select name="display" id="edit_display_{{ $faq->id }}"class="form-control selectpicker border"
                        data-live-search="true" data-actions-box="true">
                        @foreach (display() as $key => $label)
                            <option value="{{ $key }}"
                                {{ old('display', $faq->display) == $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('display')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Question</label>
                    <input type="text" name="question" class="form-control" value="{{ $faq->question }}" required>
                    @error('display')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Answer</label>
                    <textarea name="answer" rows="4" class="form-control" required>{{ $faq->answer }}</textarea>
                    @error('display')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="card-footer d-flex justify-content-end align-items-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
