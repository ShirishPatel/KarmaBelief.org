@extends('layouts.admin')
@section('title', 'Configuration')
@section('backend_content')
    <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
            </div>
            <div class="card mb-6">
                <form id="formAccountSettings" method="POST" action="{{ route('settings_update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            <div
                                class="col d-flex flex-column align-items-start align-items-sm-start gap-6 pb-4 border-bottom">
                                @if (!empty($records->site_logo_light))
                                    <img src="{{ asset('storage/' . $records->site_logo_light) }}" alt="Site Logo"
                                        class="d-block w-auto h-px-100 rounded border">
                                @else
                                    <img src="{{ asset('assets/backend/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block w-auto h-px-100 rounded border" id="" />
                                @endif
                                <div class="button-wrapper">
                                    <label for="site_logo_light" class="btn btn-primary me-3 mb-4 btn-sm">
                                        <span class="d-none d-sm-block">Light Logo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="site_logo_light" name="site_logo_light"
                                            class="account-file-input" hidden accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4 btn-sm">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <div class="small text-danger">Allowed JPG, JPEG or PNG.</div>
                                    <x-image-size> 270px X 54px</x-image-size>
                                </div>
                            </div>
                            <div
                                class="col d-flex flex-column align-items-start align-items-sm-start gap-6 pb-4 border-bottom">
                                @if (!empty($records->site_logo_dark))
                                    <img src="{{ asset('storage/' . $records->site_logo_dark) }}" alt="Site Logo"
                                        class="d-block w-auto h-px-100 rounded border">
                                @else
                                    <img src="{{ asset('assets/backend/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block w-auto h-px-100 rounded border" />
                                @endif
                                <div class="button-wrapper">
                                    <label for="site_logo_dark" class="btn btn-primary me-3 mb-4 btn-sm">
                                        <span class="d-none d-sm-block">Dark Logo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="site_logo_dark" name="site_logo_dark"
                                            class="account-file-input" hidden accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4 btn-sm">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <div class="small text-danger">Allowed JPG, JPEG or PNG.</div>
                                    <x-image-size> 270px X 54px</x-image-size>
                                </div>
                            </div>
                            <div
                                class="col d-flex flex-column align-items-start align-items-sm-start gap-6 pb-4 border-bottom">
                                @if (!empty($records->favicon))
                                    <img src="{{ asset('storage/' . $records->favicon) }}" alt="Site Logo"
                                        class="d-block w-auto h-px-100 rounded border">
                                @else
                                    <img src="{{ asset('assets/backend/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block w-auto h-px-100 rounded border" />
                                @endif
                                <div class="button-wrapper">
                                    <label for="favicon" class="btn btn-primary me-3 mb-4 btn-sm">
                                        <span class="d-none d-sm-block">Favicon icon</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" name="favicon" id="favicon" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4 btn-sm">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <div class="small text-danger">Allowed JPG, JPEG or PNG.</div>
                                    <x-image-size> 200px X 190px</x-image-size>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4">
                        <div class="row row-cols-1 row-cols-md-2 g-3 mb-3">
                            <div class="col">
                                <label for="site_name" class="form-label">Site Name<x-required /></label>
                                <input class="form-control" type="text" id="site_name" name="site_name"
                                    value="{{ $records->site_name ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('site_name') }}</span>
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" id="email"
                                    value="{{ $records->email ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="col">
                                <label for="phone" class="form-label">Phone<x-required /></label>
                                <input class="form-control" type="text" name="phone" id="phone"
                                    value="{{ $records->phone ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="col">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" id="address"
                                    value="{{ $records->address ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="form-group">
                                <label class="form-label" for="site_description">Description</label>
                                <textarea type="text" name="site_description" rows="2" class="form-control"
                                    id="site_description" placeholder="">{{ $records->site_description ?? '' }}</textarea>
                                <span class="text-danger">{{ $errors->first('site_description') }}</span>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-3 mb-3">
                            <div class="col">
                                <label for="social_facebook" class="form-label">Facebook</label>
                                <input class="form-control" type="text" id="social_facebook" name="social_facebook"
                                    value="{{ $records->social_facebook ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('social_facebook') }}</span>
                            </div>
                            <div class="col">
                                <label for="social_twitter" class="form-label">Twitter</label>
                                <input class="form-control" type="social_twitter" name="social_twitter" id="social_twitter"
                                    value="{{ $records->social_twitter ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('social_twitter') }}</span>
                            </div>
                            <div class="col">
                                <label for="social_instagram" class="form-label">Instagram</label>
                                <input class="form-control" type="text" name="social_instagram" id="social_instagram"
                                    value="{{ $records->social_instagram ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('social_instagram') }}</span>
                            </div>
                            <div class="col">
                                <label for="social_linkedin" class="form-label">Linkedin</label>
                                <input class="form-control" type="text" name="social_linkedin" id="social_linkedin"
                                    value="{{ $records->social_linkedin ?? '' }}" />
                                <span class="text-danger">{{ $errors->first('social_linkedin') }}</span>
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-md-2 g-3 mb-3 d-none">
                            <div class="col">
                                <div
                                    class="col d-flex flex-column align-items-start align-items-sm-start gap-6 pb-4 border-bottom">
                                    @if (!empty($records->footer_business_image))
                                        <img src="{{ asset('storage/' . $records->footer_business_image) }}" alt="Site Logo"
                                            class="d-block w-auto h-px-100 rounded border">
                                    @else
                                        <img src="{{ asset('assets/backend/img/avatars/1.png') }}" alt="user-avatar"
                                            class="d-block w-auto h-px-100 rounded border" id="" />
                                    @endif
                                    <div class="button-wrapper">
                                        <label for="footer_business_image" class="btn btn-primary me-3 mb-4 btn-sm">
                                            <span class="d-none d-sm-block">Business Footer Image</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="footer_business_image" name="footer_business_image"
                                                class="account-file-input" hidden accept="image/png, image/jpeg" />
                                        </label>
                                        <button type="button"
                                            class="btn btn-outline-secondary account-image-reset mb-4 btn-sm">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Reset</span>
                                        </button>

                                        <div class="small text-danger">Allowed JPG, JPEG or PNG.</div>
                                        <x-image-size> 300px X 72px</x-image-size>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="footer_business_description">Footer Business
                                        Description</label>
                                    <textarea type="text" name="footer_business_description" rows="8" class="form-control"
                                        id="footer_business_description"
                                        placeholder="">{{ $records->footer_business_description ?? '' }}</textarea>
                                    <span class="text-danger">{{ $errors->first('footer_business_description') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-3 mb-3">
                            <div class="col">
                                <label for="protocol" class="form-label">Protocol</label>
                                <input class="form-control" type="text" id="protocol" name="protocol"
                                    value="{{ $records->protocol ?? '' }}" placeholder="Protocol" />
                                <span class="text-danger">{{ $errors->first('protocol') }}</span>
                            </div>
                            <div class="col">
                                <label for="smtp_host" class="form-label">Smtp Host</label>
                                <input class="form-control" type="smtp_host" name="smtp_host" id="smtp_host"
                                    value="{{ $records->smtp_host ?? '' }}" placeholder="Smtp Host" />
                                <span class="text-danger">{{ $errors->first('smtp_host') }}</span>
                            </div>
                            <div class="col">
                                <label for="smtp_port" class="form-label">Smtp Port</label>
                                <input class="form-control" type="smtp_port" name="smtp_port" id="smtp_port"
                                    value="{{ $records->smtp_port ?? '' }}" placeholder="Smtp Port" />
                                <span class="text-danger">{{ $errors->first('smtp_port') }}</span>
                            </div>
                            <div class="col">
                                <label for="smtp_user" class="form-label">Smtp User</label>
                                <input class="form-control" type="smtp_user" name="smtp_user" id="smtp_user"
                                    value="{{ $records->smtp_user ?? '' }}" placeholder="Smtp User" />
                                <span class="text-danger">{{ $errors->first('smtp_user') }}</span>
                            </div>
                            <div class="col">
                                <label for="smtp_pass" class="form-label">Smtp Password</label>
                                <input class="form-control" type="smtp_pass" name="smtp_pass" id="smtp_pass"
                                    value="{{ $records->smtp_pass ?? '' }}" placeholder="Smtp Password" />
                                <span class="text-danger">{{ $errors->first('smtp_pass') }}</span>
                            </div>
                            <div class="col">
                                <label for="from_email" class="form-label">From Email</label>
                                <input class="form-control" type="from_email" name="from_email" id="from_email"
                                    value="{{ $records->from_email ?? '' }}" placeholder="From Email" />
                                <span class="text-danger">{{ $errors->first('from_email') }}</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary me-3">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('backend_scripts')
@endpush