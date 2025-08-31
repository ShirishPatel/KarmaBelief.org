@extends('layouts.admin')
@section('title', 'Profile')
@section('backend_content')
    <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
                <ul class="nav nav-pills flex-column flex-md-row mb-6">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-sm bx-user me-1_5"></i>
                            Account</a>
                    </li>
                </ul>
            </div>
            <div class="card mb-6">
                <!-- Account -->
                <form action="{{ route('profile.update', Auth::user()->id) }}" id="formAccountSettings" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom">
                            @if (Auth::user()->profile_image)
                                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" width="100">
                            @else
                                <img src="{{ asset('assets/backend/img/avatars/1.png') }}" alt="user-avatar"
                                    class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                            @endif
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" name="profile_image" id="upload" class="account-file-input"
                                        hidden accept="image/png, image/jpeg" />
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>
                                <div>Allowed JPG, JPEG or PNG.</div>
                                <span class="text-danger">{{ $errors->first('profile_image') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4">

                        <div class="row g-6">
                            <div class="col-md-6">
                                <label for="name" class="form-label">First Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ auth()->user()->name ?? old('name') }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="last_name" id="last_name"
                                    value="{{ auth()->user()->last_name ?? old('last_name') }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ auth()->user()->phone ?? old('phone') }}" />
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="{{ auth()->user()->email }}" placeholder="Enter Email Address" readonly
                                    disabled />
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="btn btn-primary me-3">Save changes</button>
                            </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form id="formAccountDeactivation" action="{{ route('password.update', Auth::user()->id) }}" method="POST">
                    @csrf
                    <div class="row g-6 mb-6">
                        <div class="col-md-4">
                            <label for="old_password" class="form-label">Old Password</label>
                            <input type="password" class="form-control" id="old_password" name="old_password"
                                placeholder="Enter Old Password" value="" />
                            <span class="text-danger">{{ $errors->first('old_password') }}</span>
                        </div>
                        <div class="col-md-4">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="new_password"
                                placeholder="Enter New Password" value="" />
                            <span class="text-danger">{{ $errors->first('new_password') }}</span>
                        </div>
                        <div class="col-md-4">
                            <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="new_password_confirmation"
                                placeholder="Confirm New Password" name="new_password_confirmation" value="" />
                            <span class="text-danger">{{ $errors->first('new_password_confirmation') }}</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">
                        Change Password
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('backend_scripts')
@endpush
