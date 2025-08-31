@extends('layouts.app')
@section('title', 'Home')
@push('styles')
    <style>

    </style>
@endpush
@section('front_content')
    <!-- Banner area start here -->
    <section class="banner-three-area paralax__animation">
        <div class="container">
            @php
                $record = DB::table('home_hero_sections')->first();
            @endphp
            <div class="row">
                <div class="col-lg-12 justify-content-center d-flex text-center">
                    <div class="section-header">
                        <h5 class="wow splt-txt" data-splitting>
                            {{ $record->tag_line ?? '' }}
                            <img src="assets/images/icon/roket.png" alt="icon">
                        </h5>

                        <h2 class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"
                            style="font-size: 77px;line-height: 1.2;">
                            {{ $record->heading ?? '' }}
                        </h2>
                        <div style="width:50%;margin:auto;">
                            <p class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                {{$record->description}}
                            </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 pt-40">
                            <a class='btn-one' href='{{ $record->btn_link_1 ?? '#' }}'>
                                {{ $record->btn_label_1 ?? 'Button 1' }}
                                <span>
                                    <i class="fa-regular fa-arrow-up-right arry1"></i>
                                    <i class="fa-regular fa-arrow-up-right arry2"></i>
                                </span>
                            </a>
                            <a class='btn-two' href='{{ $record->btn_link_2 ?? '#' }}'>
                                {{ $record->btn_label_2 ?? 'Button 2' }}
                                <span>
                                    <i class="fa-regular fa-arrow-right arry1"></i>
                                    <i class="fa-regular fa-arrow-right arry2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none">
                    <img class="wow bounceInRight" data-wow-delay="200ms" data-wow-duration="2000ms"
                        src="assets/images/banner/home-hero-banner.png" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Feature area start here -->
    <section class="feature-three-area">
        <div class="feature-three__container" style="background-color: #fb6f1312">
            <div class="d-flex flex-wrap mb-80 justify-content-between align-items-end gap-3">
                <div class="section-header">
                    <h5 class="wow splt-txt" data-splitting>Our Core features
                    </h5>
                    <h2 class="fw-600 wow splt-txt" data-splitting>Our Values</h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our unique blend of
                    experiences, perspectives, and aspirations <br> sets us apart in an
                    ever-evolving world.</p>
            </div>
            <div class="row g-5">
                <div class="col-xxl-3 col-md-6 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="feature-three__item">
                        <div class="feature__icon bg1 mb-30 d-flex justify-content-center align-items-center">
                            <i class="fa-brands fa-keycdn fa-2x main-blue"></i>
                        </div>
                        <h3 class="mt-20 mb-1">Accountability</h3>
                        <p>We accept the responsibility, as a team and individuals, for our actions and take
                            obligation for them to reliably deliver the business goals.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 wow bounceInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="feature-three__item">
                        <div class="feature__icon bg2 mb-30 d-flex justify-content-center align-items-center">
                            <i class="fa-regular fa-comments fa-2x main-blue"></i>
                        </div>
                        <h3 class="mt-20 mb-1">Integrity & Ethics</h3>
                        <p>At Vibrant Software Technologies We believe in Honesty and uncompromising adherence
                            to strong moral and ethical principles and values.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="feature-three__item">

                        <div class="feature__icon bg3 mb-30 d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-clock fa-2x main-blue"></i>
                        </div>

                        <h3 class="mt-20 mb-1">Commitment</h3>
                        <p>We carefully and persistently work to the highest levels on behalf of our customers,
                            colleagues and our partners.</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 wow bounceInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="feature-three__item">
                        <div class="feature__icon bg4 mb-30 d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-handshake-angle fa-2x main-blue"></i>
                        </div>
                        <h3 class="mt-20 mb-1">Respect</h3>
                        <p>We treat our customers, colleagues and partners as we, ourselves, expect to be
                            treated</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature area end here -->

    <!-- Service area start here -->
    <section class="service-three-area pt-120 d-none">
        <div class="container">
            <div class="section-header mb-80 text-center">
                <h5 class="wow splt-txt" data-splitting>Our SEO services</h5>
                <h2 class="fw-600 wow splt-txt" data-splitting>Unlock Your
                    Website's <br> Potential with Our Services</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Elevate your online
                    presence and attract your target audience <br> with our comprehensive
                    SEO
                    solutions.</p>
            </div>
            <div class="row g-4">
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="assets/images/icon/service-three-icon1.png" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>UI
                                / UX Design</a></h3>
                        <p>We are a user interface/user experience design firm that uses a combined UX design
                            method from brainstorming to design thinking, with UI founded on user research and
                            an immersive...
                        </p>
                        <a href="#" class="text-warning">Read More <i class="fa fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="assets/images/icon/service-three-icon2.png" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Mobile App
                                Development</a></h3>
                        <p>Where creative chaos meets an elegant user experience, we create feature-rich mobile
                            apps. We ensure that your mobile app product is simple to use and performs properly
                            with... </p>
                        <a href="#" class="text-warning">Read More <i class="fa fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="assets/images/icon/service-three-icon3.png" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Web
                                Development</a></h3>
                        <p>We create websites that are impossible to overlook. We discuss the concept with you
                            and map out a route to align with your business goals... </p>
                        <a href="#" class="text-warning">Read More <i class="fa fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="service-three__item gap-3 d-flex align-items-end">
                        <div class="service-three__item p-0">
                            <div class="service-three__icon mb-20">
                                <img src="assets/images/icon/service-three-icon4.png" alt="icon">
                            </div>
                            <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Software
                                    Development</a>
                            </h3>
                            <p>With our creativity and digital vision, we are transforming businesses. With
                                bespoke software development trails, perfect alignments are generated for
                                outstanding results...<a href="#" class="text-warning">Read More <i
                                        class="fa fa-chevron-double-right"></i></a></p>
                        </div>
                        <div class="service-three__image">
                            <img src="assets/images/service/service-image.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="assets/images/icon/service-three-icon5.png" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Clould
                                Computing</a></h3>
                        <p>Co-create the best cloud solutions to help you drive digital transformation when and
                            where you need it...</p>
                        <a href="#" class="text-warning">Read More <i class="fa fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="assets/images/icon/service-three-icon6.png" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Digital
                                Marketing</a></h3>
                        <p>By putting your customers at the forefront of innovation, you can build brands that
                            are..
                        </p>
                        <a href="#" class="text-warning">Read More <i class="fa fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="service-three__item gap-3 d-flex align-items-end">
                        <div class="service-three__item p-0">
                            <div class="service-three__icon mb-20">
                                <img src="assets/images/icon/service-three-icon7.png" alt="icon">
                            </div>
                            <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>SEO
                                    Analytic and Reporting</a>
                            </h3>
                            <p>Transparency is key to our approach. We provide regular, detailed reports on the
                                performance of your SEO campaign.</p>
                            <a href="#" class="text-warning">Read More <i class="fa fa-chevron-double-right"></i></a>
                        </div>
                        <div class="service-three__image">
                            <img src="assets/images/service/service-image2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end here -->


    <!-- Service area start here -->
    <section class="service-three-area pt-120 pb-120">
        <div class="container">
            <div class="section-header mb-80 text-center">
                <h5 class="wow splt-txt" data-splitting>Partner with us to build innovative, <br> scalable, and
                    future-ready systems.</h5>
                <h2 class="fw-600 wow splt-txt" data-splitting>Smart Solutions in <br> Development, ERP & AI/ML</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We deliver tailored software,
                    Microsoft Dynamics ERP integrations, and
                    <br> intelligent AI/ML solutions to streamline operations and drive growth.
                </p>
            </div>
            <div class="row g-4">
                <div class="pricing-package-wrapper">
                    <div class="row g-4">
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing-two__item shadow-sm">
                                <center>
                                    <div class="feature__icon bg4 mb-30 d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-handshake-angle fa-2x main-blue"></i>
                                    </div>
                                </center>
                                <div class="pricing-head pb-30 bor-bottom">
                                    <h4 class="mb-20">Custom Development</h4>
                                    <p>Tailored Software That Fits Your Business</p>
                                </div>
                                <ul class="mt-4">
                                    <li><i class="fa-duotone fa-check"></i>Bespoke web and mobile application development
                                    </li>
                                    <li><i class="fa-duotone fa-check"></i>Scalable, secure, and modern tech stack</li>
                                    <li><i class="fa-duotone fa-check"></i>Seamless integration with existing systems</li>

                                </ul>
                                <a href="#0" class="btn-one  mt-60 w-100 text-center">Read More</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing-two__item shadow-sm">
                                <center>
                                    <div class="feature__icon bg4 mb-30 d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-handshake-angle fa-2x main-blue"></i>
                                    </div>
                                </center>
                                <div class="pricing-head pb-30 bor-bottom">
                                    <h4 class="mb-20">Dynemic ERP Solution</h4>
                                    <p>Streamline Operations with Microsoft ERP</p>
                                </div>
                                <ul class="mt-4">
                                    <li><i class="fa-duotone fa-check"></i>End-to-end Microsoft Dynamics 365 implementation
                                    </li>
                                    <li><i class="fa-duotone fa-check"></i>Customized modules for finance, sales,
                                        inventory, etc.</li>
                                    <li><i class="fa-duotone fa-check"></i>Improved efficiency through automation and
                                        insights</li>
                                </ul>
                                <a href="#0" class="btn-one active mt-60 w-100 text-center">Read More</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing-two__item shadow-sm">
                                <center>
                                    <div class="feature__icon bg4 mb-30 d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-handshake-angle fa-2x main-blue"></i>
                                    </div>
                                </center>
                                <div class="pricing-head pb-30 bor-bottom">
                                    <h4 class="mb-20">AI/ML Solution</h4>
                                    <p>Smarter Decisions with AI & Machine Learning</p>
                                </div>
                                <ul class="mt-4">
                                    <li><i class="fa-duotone fa-check"></i>Predictive analytics and data-driven insights
                                    </li>
                                    <li><i class="fa-duotone fa-check"></i>AI-powered automation and chatbot development
                                    </li>
                                    <li><i class="fa-duotone fa-check"></i>Tailored ML models for real-world business
                                        problems</li>

                                </ul>
                                <a href="#0" class="btn-one  mt-60 w-100 text-center">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- About area start here -->
    <section class="about-area pt-120 pb-120">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img class="w-100" src="assets/images/about/about-image.png" alt="image">
                        <img class="about-line" src="assets/images/shape/about-three-shape.png" alt="shape">
                        <img class="about-kit" src="assets/images/about/about-three-kit.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__item-right">
                        <div class="section-header">
                            <h5 class="wow splt-txt" data-splitting>Why
                                Choose Us?</h5>
                            <h2 class="fw-600 wow splt-txt" data-splitting>
                                Our
                                Tailored Strategies for Your Success</h2>
                            <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Crafting
                                precision in every detail, our tailored strategies pave the way for
                                your
                                unparalleled success in the digital
                                landscape.</p>
                        </div>
                        <ul class="mt-40">
                            <li class="d-flex align-items-center wow bounceInUp gap-4" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="icon bg1"><img src="assets/images/icon/about-icon1.png" alt="icon">
                                </div>
                                <div>
                                    <h3>Reliable Technology Partner</h3>
                                    <p>You have a terrific company concept but are looking for a reliable tech
                                        partner to cooperate with? Vibrant Software...</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center wow bounceInUp gap-4" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <div class="icon bg2"><img src="assets/images/icon/about-icon2.png" alt="icon">
                                </div>
                                <div>
                                    <h3>Skilled Staff</h3>
                                    <p>Our skilled staff stays on the cutting edge of the latest and the most
                                        successful technology...</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center wow bounceInUp gap-4" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="icon bg3"><img src="assets/images/icon/about-icon3.png" alt="icon">
                                </div>
                                <div>
                                    <h3>Customer Satisfaction</h3>
                                    <p>We provide the most successful projects, build long-term relationships
                                        with our clients, and continue...</p>
                                </div>
                            </li>

                            <a class='btn-one  active yellow-btn wow fadeInUp' data-wow-delay='400ms'
                                data-wow-duration='1500ms' href='pricing.html'>Read More </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end here -->

    <!-- Service and portfolio area start here -->
    <section class="service-four-area pt-120 pb-120" style="background-color: #fb6f1312">
        <div class="container">
            <div class="section-header-four mb-40 text-center">
                <h5 class="wow splt-txt" data-splitting><span class="title-dot"></span>Services and Portfolio
                </h5>
                <h2 class="wow splt-txt" data-splitting>Our Services and
                    Works</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Experience the
                    transformation as we elevate your brand’s <br> online presence, making it
                    unforgettable.</p>
            </div>
            <div class="service-four__accordion accordion-four">
                <div class="accordion" id="accordionExample4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne4">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                <span class="main-wrp">
                                    <span class="sub-wrp">
                                        <span class="acc-number">01</span>
                                        <span class="acc-title">UI/UX Design</span>
                                    </span>
                                    <span class="acc-text">Craft visually appealing and user-friendly
                                        interfaces.
                                        Enhance user
                                        experience
                                        through intuitive design.</span>
                                </span>

                            </button>
                        </h2>
                        <div id="collapseOne4" class="accordion-collapse collapse show" aria-labelledby="headingOne4"
                            data-bs-parent="#accordionExample4">
                            <div class="accordion-body">
                                <div class="swiper service-four__slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-40">
                                    <div class="position-relative">
                                        <div class="service-four__scrollbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                <span class="main-wrp">
                                    <span class="sub-wrp">
                                        <span class="acc-number">02</span>
                                        <span class="acc-title">Mobile App Development</span>
                                    </span>
                                    <span class="acc-text">Conceptualize and design innovative digital
                                        products.
                                        Focus on user needs,
                                        functionality, and aesthetics.</span>
                                </span>

                            </button>
                        </h2>
                        <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4"
                            data-bs-parent="#accordionExample4">
                            <div class="accordion-body">
                                <div class="swiper service-four__slider-item2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-40">
                                    <div class="position-relative">
                                        <div class="service-four__scrollbar-item2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                <span class="main-wrp">
                                    <span class="sub-wrp">
                                        <span class="acc-number">03</span>
                                        <span class="acc-title">Web Development</span>
                                    </span>
                                    <span class="acc-text">Full-stack development for robust and scalable
                                        solutions.
                                        Customized web and
                                        mobile application development.</span>
                                </span>

                            </button>
                        </h2>
                        <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4"
                            data-bs-parent="#accordionExample4">
                            <div class="accordion-body">
                                <div class="swiper service-four__slider-item3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-40">
                                    <div class="position-relative">
                                        <div class="service-four__scrollbar-item3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive4" aria-expanded="false" aria-controls="collapseFive4">
                                <span class="main-wrp">
                                    <span class="sub-wrp">
                                        <span class="acc-number">05</span>
                                        <span class="acc-title">Software Development</span>
                                    </span>
                                    <span class="acc-text">Develop unique and memorable brand elements. Logo
                                        design,
                                        color palette, and
                                        typography selection.</span>
                                </span>

                            </button>
                        </h2>
                        <div id="collapseFive4" class="accordion-collapse collapse" aria-labelledby="headingFive4"
                            data-bs-parent="#accordionExample4">
                            <div class="accordion-body">
                                <div class="swiper service-four__slider-item5">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-40">
                                    <div class="position-relative">
                                        <div class="service-four__scrollbar-item5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                <span class="main-wrp">
                                    <span class="sub-wrp">
                                        <span class="acc-number">05</span>
                                        <span class="acc-title">Digital Marketing</span>
                                    </span>
                                    <span class="acc-text">Engaging and SEO-friendly copywriting for
                                        websites
                                        and
                                        marketing materials.
                                    </span>
                                </span>
                            </button>
                        </h2>
                        <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour4"
                            data-bs-parent="#accordionExample4">
                            <div class="accordion-body">
                                <div class="swiper service-four__slider-item4">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image1.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">Skincare magic<sup>TM</sup></a>
                                                        </h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="service-four__item">
                                                <div class="service-four__image mb-20">
                                                    <img class="w-100" src="assets/images/service/service-four-image2.png"
                                                        alt="image">
                                                    <div class="tags">
                                                        <a href='service.html'>UI/UX DESIGN</a>
                                                        <a href='service.html'>DEVELOPMENT</a>
                                                        <a href='service.html'>PRODUCT DESIGN</a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                    <div class="content">
                                                        <h3><a href="#0">island*</a></h3>
                                                        <p class="fs-16">Create visual materials such as
                                                            logos,
                                                            branding materials, marketing
                                                            collateral,
                                                            and web graphics.</p>
                                                    </div>
                                                    <a class='btn-four' href='case-study-details.html'>View
                                                        Full
                                                        Project
                                                        <span>
                                                            <i class="fa-regular fa-arrow-right arry1"></i>
                                                            <i class="fa-regular fa-arrow-right arry2"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-40">
                                    <div class="position-relative">
                                        <div class="service-four__scrollbar-item4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Service and portfolio area end here -->

    <!-- Start main services area start here -->
    <section class="start-now-area bg-image pt-120 pb-120 mb-120 d-none"
        data-background="assets/images/bg/start-now-bg.png">
        <div class="feature-three__container pt-20 pb-20 pl-20 pr-20" style="background-color: transparent;padding: 20px">
            <div class="row">
                <div class="col-lg-5">
                    <div class="start-now__item">
                        <div class="section-header">
                            <h5 class="wow splt-txt" data-splitting>Partner with us to build innovative,
                                scalable, and future-ready systems.</h5>
                            <h2 class="fw-600 text-white wow splt-txt" data-splitting>Smart Solutions in
                                Development, ERP & AI/ML</h2>
                            <p class="mt-20 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We
                                deliver tailored software, Microsoft Dynamics ERP integrations, and intelligent
                                AI/ML solutions to streamline operations and drive growth.
                            </p>
                            <a class='btn-one mt-40 active yellow-btn wow fadeInUp' data-wow-delay='400ms'
                                data-wow-duration='1500ms' href='pricing.html'>Get Started with Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="pricing-package-wrapper">
                        <div class="row g-3">
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-two__item">
                                    <div class="pricing-head pb-30 bor-bottom">
                                        <h4 class="mb-20">Custom Development</h4>
                                        <p>Tailored Software That Fits Your Business</p>
                                    </div>
                                    <ul class="mt-4">
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>Bespoke web and
                                            mobile application development
                                        </li>
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>Scalable, secure,
                                            and modern tech stack
                                        </li>
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>Seamless
                                            integration with existing systems
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-one  mt-60 w-100 text-center">Read More</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-two__item">
                                    <div class="pricing-head pb-30 bor-bottom">
                                        <h4 class="mb-20">Dynemic ERP Solution</h4>
                                        <p>Streamline Operations with Microsoft ERP</p>
                                    </div>
                                    <ul class="mt-4">
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>End-to-end
                                            Microsoft Dynamics 365 implementation</li>
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>Customized modules
                                            for finance, sales, inventory, etc.
                                        </li>
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>Improved efficiency
                                            through automation and insights
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-one active mt-60 w-100 text-center">Read More</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-two__item">
                                    <div class="pricing-head pb-30 bor-bottom">
                                        <h4 class="mb-20">AI/ML <br> Solution</h4>
                                        <p>Smarter Decisions with AI & Machine Learning</p>
                                    </div>
                                    <ul class="mt-4">
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>Predictive
                                            analytics and data-driven insights
                                        </li>
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>AI-powered
                                            automation and chatbot development
                                        </li>
                                        <li class="fs-14"><i class="fa-duotone fa-check"></i>Tailored ML models
                                            for real-world business problems
                                        </li>
                                    </ul>
                                    <a href="#0" class="btn-one  mt-60 w-100 text-center">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- Start main services area end here -->

    <!-- Testimonial area start here -->
    <section class="testimonial-three-area pb-120 pt-120">
        <div class="container">
            <div class="section-header mb-80 text-center">
                <h5 class="wow splt-txt" data-splitting>Our client’s
                    testimonials</h5>
                <h2 class="fw-600 wow splt-txt" data-splitting>Client Stories
                    of Vibrant Software Technologies</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Dive into the success
                    stories of Vibrant Software Technologies's clients—where <br> digital dreams become
                    reality.
                </p>
            </div>
            <div class="swiper testimonial-three__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-three__item-wrp">
                            <div class="testimonial-three__item">
                                <div class="coma-top">
                                    <img src="assets/images/icon/testimonial-three-coma-top.png" alt="icon">
                                </div>
                                <div class="coma-bottom">
                                    <img src="assets/images/icon/testimonial-three-coma-bottom.png" alt="icon">
                                </div>
                                <div class="star d-flex gap-2 mb-4 justify-content-end">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>“As a marketing professional, I appreciate the data driven approach this
                                    agency
                                    brings to
                                    the table. Transparent
                                    reporting, effective strategies.”</p>
                                <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                    <img src="assets/images/testimonial/testimonial-three-image1.png" alt="image">
                                    <h5><a href="#0" class="fw-600">Soheel Sheek,</a> <span
                                            class="fw-normal text-font">Marketing
                                            Director</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-three__item-wrp">
                            <div class="testimonial-three__item">
                                <div class="coma-top">
                                    <img src="assets/images/icon/testimonial-three-coma-top.png" alt="icon">
                                </div>
                                <div class="coma-bottom">
                                    <img src="assets/images/icon/testimonial-three-coma-bottom.png" alt="icon">
                                </div>
                                <div class="star d-flex gap-2 mb-4 justify-content-end">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>“In the early stages of our startup, visibility was key. This SEO agency
                                    not
                                    only
                                    delivered on that front but also
                                    provided strategic guidance.”</p>
                                <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                    <img src="assets/images/testimonial/testimonial-three-image2.png" alt="image">
                                    <h5><a href="#0" class="fw-600">Moeen Khan,</a> <span
                                            class="fw-normal text-font">Startup
                                            Founder</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-three__item-wrp">
                            <div class="testimonial-three__item">
                                <div class="coma-top">
                                    <img src="assets/images/icon/testimonial-three-coma-top.png" alt="icon">
                                </div>
                                <div class="coma-bottom">
                                    <img src="assets/images/icon/testimonial-three-coma-bottom.png" alt="icon">
                                </div>
                                <div class="star d-flex gap-2 mb-4 justify-content-end">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>“As a marketing professional, I appreciate the data driven approach this
                                    agency
                                    brings to
                                    the table. Transparent
                                    reporting, effective strategies.”</p>
                                <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                    <img src="assets/images/testimonial/testimonial-three-image1.png" alt="image">
                                    <h5><a class="fw-600" href="#0">Soheel Sheek,</a> <span
                                            class="fw-normal text-font">Marketing
                                            Director</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-three__item-wrp">
                            <div class="testimonial-three__item">
                                <div class="coma-top">
                                    <img src="assets/images/icon/testimonial-three-coma-top.png" alt="icon">
                                </div>
                                <div class="coma-bottom">
                                    <img src="assets/images/icon/testimonial-three-coma-bottom.png" alt="icon">
                                </div>
                                <div class="star d-flex gap-2 mb-4 justify-content-end">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>“In the early stages of our startup, visibility was key. This SEO agency
                                    not
                                    only
                                    delivered on that front but also
                                    provided strategic guidance.”</p>
                                <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                    <img src="assets/images/testimonial/testimonial-three-image2.png" alt="image">
                                    <h5><a class="fw-600" href="#0">Moeen Khan,</a> <span
                                            class="fw-normal text-font">Startup
                                            Founder</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-60">
                    <div class="swiper__info">
                        <button class="testimonial-three__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                        <div class="dot testimonial-three__dot"></div>
                        <button class="testimonial-three__arry-next active"><i
                                class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end here -->

    <!-- Blog area start here -->
    <section class="blog-area pb-120 pt-120">
        <div class="container">
            <div class="section-header-flex mb-80">
                <h2 class="fw-600 splt-txt wow" data-splitting>Our Latest
                    Blog and News</h2>
                <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <p>Delve into real-world examples where our Technology <br> Solutions, Consulting and
                        Strategy,
                    </p>
                    <div class="swiper__info justify-content-start m-0 mt-3">
                        <button class="blog__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                        <button class="blog__arry-next active"><i class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper blog__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="assets/images/blog/blog-image1.png" alt="image">
                                <div class="tag">
                                    <a href='service-details.html'>Technology</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20"><a class='primary-hover' href='blog-details.html'>The
                                    One
                                    Part
                                    of the Vision
                                    Pro
                                    That Apple Doesn’t Want You to See</a></h4>
                            <a class='fs-18 blog-btn text-font' href='blog-details.html'>Read More <i
                                    class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="assets/images/blog/blog-image2.png" alt="image">
                                <div class="tag">
                                    <a href='service-details.html'>Technology</a>
                                    <a href='service-details.html'>Product</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20"><a class='primary-hover' href='blog-details.html'>Intel’s
                                    CEO
                                    Says AI Is the
                                    Key to the Company’s Comeback</a></h4>
                            <a class='fs-18 blog-btn text-font' href='blog-details.html'>Read More <i
                                    class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="assets/images/blog/blog-image3.png" alt="image">
                                <div class="tag">
                                    <a href='service-details.html'>Security</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20"><a class='primary-hover' href='blog-details.html'>Polar
                                    ID
                                    Is
                                    the Face ID Rival
                                    for Android Phones.</a></h4>
                            <a class='fs-18 blog-btn text-font' href='blog-details.html'>Read More <i
                                    class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog area end here -->

    <!-- Brand area start here -->
    <div class="brand-area pb-120 d-none">
        <div class="container">
            <div class="marquee-area">
                <div class="marquee__wrp">
                    <div class="marquee__slide brand__slider">
                        <div class="marquee__item-wrp">
                            <div class="marquee__item">
                                <img src="assets/images/brand/truway.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/top-legal.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/the-source.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/the-studio.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/truway.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/top-legal.png" alt="image">
                            </div>
                        </div>
                        <div class="marquee__item-wrp">
                            <div class="marquee__item">
                                <img src="assets/images/brand/truway.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/top-legal.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/the-source.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/the-studio.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/truway.png" alt="image">
                            </div>
                            <div class="marquee__item">
                                <img src="assets/images/brand/top-legal.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end here -->

    <!-- Process area start here -->
    <section class="process-area pt-120 pb-120 d-none">
        <div class="container">
            <div class="d-flex flex-wrap mb-80 justify-content-between align-items-end gap-3">
                <div class="section-header">
                    <h5 class="wow splt-txt" data-splitting>Map Your Roadmap
                    </h5>
                    <h2 class="fw-600 wow splt-txt" data-splitting>Our Proven
                        Work Process</h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Proven Work
                    Process blends experience, precision, <br> and innovation for
                    consistently
                    outstanding results.</p>
            </div>
            <div class="process__wrp">
                <div class="process__line">
                    <img src="assets/images/shape/process-line.png" alt="line">
                </div>
                <div class="row g-5">
                    <div class="col-lg-2">
                        <div class="process__item">
                            <div class="process__number bg1">
                                <h4>1</h4>
                            </div>
                            <h3 class="mb-10 mt-25 wow splt-txt" data-splitting>Planning</h3>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="process__item">
                            <div class="process__number">
                                <h4>2</h4>
                                <img src="assets/images/shape/process-circle.png" alt="image">
                            </div>
                            <h3 class="mb-10 mt-25 wow splt-txt" data-splitting>Development</h3>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="process__item">
                            <div class="process__number bg3">
                                <h4>3</h4>
                            </div>
                            <h3 class="mb-10 mt-25 wow splt-txt" data-splitting>Support</h3>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="process__item">
                            <div class="process__number bg1">
                                <h4>4</h4>
                            </div>
                            <h3 class="mb-10 mt-25 wow splt-txt" data-splitting>Requirement Analysis</h3>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="process__item">
                            <div class="process__number">
                                <h4>5</h4>
                                <img src="assets/images/shape/process-circle.png" alt="image">
                            </div>
                            <h3 class="mb-10 mt-25 wow splt-txt" data-splitting>Wireframing & Prototyping</h3>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="process__item">
                            <div class="process__number bg3">
                                <h4>6</h4>
                            </div>
                            <h3 class="mb-10 mt-25 wow splt-txt" data-splitting>Deployment</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process area end here -->

    <!-- Tools and technologis area start here -->
    <section class="service-three-area d-none">
        <div class="container">
            <div class="section-header mb-80 text-center">
                <h5 class="wow splt-txt" data-splitting>Tools & Technologies used in modern development and
                    design</h5>
                <h2 class="fw-600 wow splt-txt" data-splitting>Tools & Technologies</h2>

            </div>
            <div class="row g-4">
                <!-- FrontEnd Development-->
                <div class="col-xl-12 col-md-6">
                    <div class="section-header line-title">
                        <h3 class="fw-600 splt-txt wow" data-splitting>Front End Development</h3>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg1 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/react.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">React Js</h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg2 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/javascript.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Java Script</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg3 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/angular.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Angular Js</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg4 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/dot-net.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">.Net</h3>

                        </div>
                    </div>
                </div>
                <hr>


                <!-- Backend Development-->
                <div class="col-xl-12 col-md-6">
                    <div class="section-header line-title">
                        <h3 class="fw-600 splt-txt wow" data-splitting>Backend Development</h3>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg1 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/java.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                Java
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg2 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/node.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                Node JS
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg3 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/php.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                PHP
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg4 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/python.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                Python
                            </h3>

                        </div>
                    </div>
                </div>
                <hr>

                <!-- Database-->
                <div class="col-xl-12 col-md-6">
                    <div class="section-header line-title">
                        <h3 class="fw-600 splt-txt wow" data-splitting>Database</h3>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg1 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/mysql.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                MySQL
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg2 align-items-center" style="padding: 30px 20px">
                        <div class="icon">
                            <img src="assets/images/icon/mssql-server.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                MS SQL Server
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg3 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/oracel.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">ORACLE</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg4 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/mongo-db.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Mongo DB</h3>

                        </div>
                    </div>
                </div>
                <hr>
                <!-- Client Services-->
                <div class="col-xl-12 col-md-6">
                    <div class="section-header line-title">
                        <h3 class="fw-600 splt-txt wow" data-splitting>Client Services</h3>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg1 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/aws.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                AWS
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg2 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/cloud-flare.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                Cloudflare
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg3 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/google-clud.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Google Cloud</h3>

                        </div>
                    </div>
                </div>

                <hr>

                <!-- CMS-->
                <div class="col-xl-12 col-md-6">
                    <div class="section-header line-title">
                        <h3 class="fw-600 splt-txt wow" data-splitting>CMS</h3>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg1 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/wordpress.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">
                                WordPress
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg2 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/drupal.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Druple</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg3 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/codeigniter.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Codeigniter</h3>

                        </div>
                    </div>
                </div>
                <hr>

                <!-- DevOps Automation-->
                <div class="col-xl-12 col-md-6">
                    <div class="section-header line-title">
                        <h3 class="fw-600 splt-txt wow" data-splitting>DevOps Automation</h3>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg1 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/gitlab.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Gitlab</h3>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg2 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/github.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Github</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg3 align-items-center">
                        <div class="icon">
                            <img src="assets/images/icon/docker.webp" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Docker</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Tools and technologies area end here -->

    <!-- Start now area start here -->
    <section class="start-now-area bg-image pt-120 pb-120" data-background="assets/images/bg/start-now-bg.png">
        <div class="container">
            <div class="start-now__item">
                <div class="section-header">
                    <h5 class="wow splt-txt" data-splitting>Bring success
                        with Vibrant Software Technologies!</h5>
                    <h2 class="fw-600 text-white wow splt-txt" data-splitting>Reach Out and Elevate Your Success
                        Now!</h2>
                    <p class="mt-20 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Proven
                        Work Process blends experience, precision, and innovation
                        for
                        consistently outstanding results.
                    </p>
                    <a class='btn-one mt-40 active yellow-btn wow fadeInUp' data-wow-delay='400ms'
                        data-wow-duration='1500ms' href='pricing.html'>Get Started with Us</a>
                </div>
            </div>
        </div>
        <div class="start-now__hero">
            <img src="assets/images/team/hero-image.png" alt="image">
        </div>
    </section>
    <!-- Start now area end here -->

@endsection

@push('frontend_scripts')
    <script></script>
@endpush