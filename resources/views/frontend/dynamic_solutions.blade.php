@extends('layouts.app')
@section('title', 'Dynamic Solutions')
@push('styles')
    <style>
        .here-bg-main {
            height: 400px;
            width: 400px;
            object-fit: contain;
            margin: auto;
            display: block;
        }

        .team-four-area .fa-arrow-left-long:before,
        .team-four-area .fa-long-arrow-left:before,
        .team-four-area .fa-arrow-right-long:before,
        .team-four-area .fa-long-arrow-right:before {
            color: #fff;
        }

        .swiper-two__info .swiper-pagination-bullet.swiper-pagination-bullet-active::after,
        .swiper-four__info .swiper-pagination-bullet.swiper-pagination-bullet-active::after {
            border: 3px solid #0f3873;
        }
    </style>
@endpush
@section('front_content')

    <!-- Banner area start here -->
    <section class="banner-three-area paralax__animation">
        <div class="container pt-80">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-three__content">
                        <span class="wow splt-txt" data-splitting>
                            Innovative Dynamic Solutions
                        </span>

                        <h1 class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            Powering Business Growth with Dynamic Technology
                        </h1>

                        <p class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            Transform your business with our cutting-edge dynamic solutions that adapt and scale with your
                            evolving needs.
                        </p>

                        <div class="d-flex align-items-center gap-3 pt-40">
                            <a class='btn-one' href='/contact-us'>
                                Get Started
                                <span>
                                    <i class="fa-regular fa-arrow-up-right arry1"></i>
                                    <i class="fa-regular fa-arrow-up-right arry2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-three__image" style="bottom: 0">
                        <img class="wow bounceInRight here-bg-main" data-wow-delay="200ms" data-wow-duration="2000ms"
                            src="{{ asset('assets/images/service/service-image2.png') }}" alt="Dynamic Solutions">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Grow area start here -->
    <section class="grow-area sub-bg pt-120 pb-120">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow animate__zoomIn" data-wow-delay="200ms" data-wow-duration="2000ms">
                    <div class="about__image" style="background: #fff;padding: 25px;border-radius: 25px;">
                        <img class="w-100" src="{{ asset('assets/images/about/about-image.png') }}"
                            alt="Dynamic Solutions">
                        <img class="about-kit" src="{{ asset('assets/images/about/about-three-kit.png') }}"
                            alt="Solutions Kit">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="grow__item-left">
                        <div class="section-header mb-30">
                            <h5 class="wow splt-txt" data-splitting>
                                Our Expertise
                            </h5>
                            <h2 class="fw-600 wow splt-txt" data-splitting>Dynamic Solutions for Modern Businesses</h2>
                            <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                We deliver scalable and adaptable solutions that help businesses thrive in the digital age.
                            </p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <ul>
                                    <li class="mb-15"><i class="fa-regular fa-check"></i> Cloud Solutions
                                    </li>
                                    <li><i class="fa-regular fa-check"></i> AI Integration</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="mb-15"><i class="fa-regular fa-check"></i> Real-time Analytics
                                    </li>
                                    <li><i class="fa-regular fa-check"></i> Automated Systems</li>
                                </ul>
                            </div>
                        </div>
                        <a class='btn-three mt-45' href='/contact-us'>Explore Solutions<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Grow area end here -->

    <!-- Process area start here -->
    <section class="process-four-area pt-120">
        <div class="container">
            <div class="section-header-four mb-40 text-center">
                <h5 class="wow splt-txt" data-splitting><span class="title-dot"></span>Our Services</h5>
                <h2 class="wow splt-txt" data-splitting>Dynamic Technology Solutions</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    From cloud computing to AI-driven analytics, we provide comprehensive<br>solutions for your business
                    needs.
                </p>
            </div>
            <div class="row g-5 g-lg-0 align-items-center">
                <div class="col-lg-3">
                    <div class="process-four__item">
                        <h3><span>01.</span> Cloud Solutions</h3>
                        <p>Scalable cloud infrastructure and services for seamless business operations.</p>
                    </div>
                    <div class="process-four__item mt-80">
                        <h3><span>03.</span> AI & ML</h3>
                        <p>Intelligent solutions powered by artificial intelligence and machine learning.</p>
                    </div>
                    <div class="process-four__item mt-80">
                        <h3><span>05.</span> IoT Integration</h3>
                        <p>Connected device solutions for smart business operations.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="process-four__image">
                        <img class="w-100" src="{{ asset('assets/images/service/service-four-image1.png') }}"
                            alt="Dynamic Solutions">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="process-four__item">
                        <h3><span>02.</span> Data Analytics</h3>
                        <p>Real-time analytics and insights for informed decision making.</p>
                    </div>
                    <div class="process-four__item mt-80">
                        <h3><span>04.</span> Automation</h3>
                        <p>Business process automation for enhanced efficiency.</p>
                    </div>
                    <div class="process-four__item mt-80">
                        <h3><span>06.</span> Security</h3>
                        <p>Advanced security solutions for data protection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process area end here -->

    <!-- Case Studies Section -->
    <section class="blog-area pb-120 pt-80">
        <div class="container">
            <div class="section-header-flex mb-80">
                <h2 class="fw-600 splt-txt wow" data-splitting>Our Success Stories</h2>
                <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <p>Explore how our dynamic solutions have transformed<br>businesses across different industries</p>
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
                                <img src="{{ asset('assets/images/case/case-details-image.jpg') }}" alt="Case Study">
                                <div class="tag">
                                    <a href='{{ route('case-study-details') }}'>Cloud Migration</a>
                                    <a href='{{ route('case-study-details') }}'>Digital Transformation</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class='primary-hover' href='{{ route('case-study-details') }}'>
                                    Global Retail Chain's Cloud Transformation Journey
                                </a>
                            </h4>
                            <a class='fs-18 blog-btn text-font' href='{{ route('case-study-details') }}'>View Case Study
                                <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="{{ asset('assets/images/case/case-details-image2.jpg') }}" alt="Case Study">
                                <div class="tag">
                                    <a href='{{ route('case-study-details') }}'>AI & ML</a>
                                    <a href='{{ route('case-study-details') }}'>Analytics</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class='primary-hover' href='{{ route('case-study-details') }}'>
                                    AI-Powered Analytics Platform for Financial Services
                                </a>
                            </h4>
                            <a class='fs-18 blog-btn text-font' href='{{ route('case-study-details') }}'>View Case Study
                                <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="{{ asset('assets/images/case/bg-image.png') }}" alt="Case Study">
                                <div class="tag">
                                    <a href='{{ route('case-study-details') }}'>IoT</a>
                                    <a href='{{ route('case-study-details') }}'>Automation</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class='primary-hover' href='{{ route('case-study-details') }}'>
                                    Smart Manufacturing Solution with IoT Integration
                                </a>
                            </h4>
                            <a class='fs-18 blog-btn text-font' href='{{ route('case-study-details') }}'>View Case Study
                                <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="{{ asset('assets/images/service/service-details-image.jpg') }}"
                                    alt="Case Study">
                                <div class="tag">
                                    <a href='{{ route('case-study-details') }}'>Security</a>
                                    <a href='{{ route('case-study-details') }}'>Cloud</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class='primary-hover' href='{{ route('case-study-details') }}'>
                                    Enterprise Security Enhancement Project
                                </a>
                            </h4>
                            <a class='fs-18 blog-btn text-font' href='{{ route('case-study-details') }}'>View Case Study
                                <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Case Studies Section End -->

    <!-- Development Process Section -->
    <section class="process-four-area pt-120">
        <div class="container">
            <div class="section-header-four mb-40 text-center">
                <h5 class="wow splt-txt" data-splitting><span class="title-dot"></span>SOLUTION PROCESS</h5>
                <h2 class="wow splt-txt" data-splitting>Our Dynamic Solution Implementation Process</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    We follow a systematic approach to deliver dynamic solutions<br>that meet your business objectives.
                </p>
            </div>
            <div class="process__wrp">
                <div class="process__line">
                    <img src="{{ asset('assets/images/shape/process-line.png') }}" alt="Process Line">
                </div>
                <div class="row g-5">
                    <div class="col-lg-3">
                        <div class="process__item">
                            <div class="process__number bg1">
                                <h4>1</h4>
                            </div>
                            <h4 class="mb-10 mt-25 wow splt-txt" data-splitting>Discovery</h4>
                            <p class="fs-16">Understanding your business needs and objectives</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="process__item">
                            <div class="process__number">
                                <h4>2</h4>
                                <img src="{{ asset('assets/images/shape/process-circle.png') }}" alt="Process Circle">
                            </div>
                            <h4 class="mb-10 mt-25 wow splt-txt" data-splitting>Solution Design</h4>
                            <p class="fs-16">Creating tailored solution architecture</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="process__item">
                            <div class="process__number bg3">
                                <h4>3</h4>
                            </div>
                            <h4 class="mb-10 mt-25 wow splt-txt" data-splitting>Implementation</h4>
                            <p class="fs-16">Deploying and integrating solutions</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="process__item">
                            <div class="process__number">
                                <h4>4</h4>
                                <img src="{{ asset('assets/images/shape/process-circle.png') }}" alt="Process Circle">
                            </div>
                            <h4 class="mb-10 mt-25 wow splt-txt" data-splitting>Optimization</h4>
                            <p class="fs-16">Continuous monitoring and improvement</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    @php
        $record = DB::table('dynamic_inquiry')->first();
    @endphp

    @if ($record && ($record->heading || $record->description || $record->btn_label || $record->btn_link))
        <section class="book-area">
            <div class="container">
                <div class="book__wrp">
                    <div class="book__item">
                        <h2>{{ $record->heading ?? '' }}</h2>
                        <p class="mt-20 mb-25">{{ $record->description ?? '' }}</p>
                        <a href="{{ $record->btn_link ?? '#' }}"
                            class="btn-two border-none ">{{ $record->btn_label ?? '' }}
                            <span>
                                <i class="fa-regular fa-arrow-up-right arry1"></i>
                                <i class="fa-regular fa-arrow-up-right arry2"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection

@push('frontend_scripts')
    <script>
        // Any custom scripts can go here
    </script>
@endpush
