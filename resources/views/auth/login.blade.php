<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login | Admin</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/css/pages/page-auth.css') }}" />
    <script src="{{ asset('assets/backend/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/backend/js/config.js') }}"></script>
</head>

<body>

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card px-sm-4 px-0 ">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <a class="app-brand-link gap-2">
                                <img src="{{ asset('assets/images/logo/main-logo.png') }}" width="100%"
                                    alt="Website Logo">
                            </a>
                        </div>
                        <p class="mb-6 text-center">Please sign-in to your account and start the adventure</p>
                        <form class="mb-6" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus />
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="mb-8">
                                <div class="d-flex justify-content-between mt-8">
                                    <div class="form-check mb-0 ms-2">
                                        <input class="form-check-input" type="checkbox" id="remember-me" />
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/backend/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/backend/js/main.js') }}"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
