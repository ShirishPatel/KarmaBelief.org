<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Karma Belief</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    @include('layouts.front_header_links')
    @stack('styles')
</head>

<body>
    <div id="loading" class="preloader">
        <div class="loading-overlay"></div>
        <div class="custom-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader area end -->

    @include('layouts.front_top_navbar')

    @include('layouts.front_header')

    @include('layouts.front_sidebar')

    <div class="ScrollSmoother-content">
        <main>
            @yield('front_content')
        </main>
        @include('layouts.front_footer')
    </div>

    <!-- Back to top btn area start here -->
    <button id="back-top" class="btn-backToTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- Back to top btn area end here -->

    @include('layouts.front_footer_links')
</body>
@stack('frontend_scripts')
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

</html>