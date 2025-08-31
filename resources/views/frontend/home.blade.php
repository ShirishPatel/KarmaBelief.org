@extends('layouts.app')
@section('title', 'Home')
@push('styles')
    <style>
        /* primary - #012d85 */
        /* secondary - #0199e4 */
    </style>
@endpush
@section('front_content')
    <!-- Banner area start here -->
    @php
        $record = DB::table('home_hero_sections')->first();
    @endphp

    @if (
            $record &&
            ($record->tag_line ||
                $record->heading ||
                $record->description ||
                $record->btn_label_1 ||
                $record->btn_label_2 ||
                $record->image)
        )
        <section class="banner-three-area paralax__animation bg-transparent" style="background: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-three__content">
                            <span class="wow splt-txt" data-splitting>
                                Serving Humanity, Everywhere We Go.
                                <img src="{{ asset('assets/images/icon/roket.png') }}" alt="icon">
                            </span>

                            <h1 class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                We are nonprofit team and work worldwide
                            </h1>

                            <p class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                Their multiply doesn't behold shall appear living heaven second roo lights. Itself hath thing
                                for won't herb forth gathered good bear fowl kind give fly form winged for reason

                                Their multiply doesn't behold shall appear living heaven second roo lights. Itself hath thing
                                for won't herb forth gathered good bear fowl kind give fly form winged for reason
                            </p>

                            <div class="d-flex align-items-center gap-3 pt-40">
                                <a class='btn-one' href='#'>
                                    Show more
                                    <span>
                                        <i class="fa-regular fa-arrow-up-right arry1"></i>
                                        <i class="fa-regular fa-arrow-up-right arry2"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img class="wow bounceInRight" data-wow-delay="200ms" data-wow-duration="2000ms"
                            src="{{ asset('assets/images/data/img-1.png') }}" alt="image">
                        {{-- <img class="wow bounceInRight" data-wow-delay="200ms" data-wow-duration="2000ms"
                            src="{{ asset('storage/' . $record->image) }}" alt="image"> --}}
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Service area start here -->
    <section class="service-three-area pt-120 pb-120" style="background-color: #fb6f1312">
        <div class="container">
            <div class="section-header mb-80 text-center">
                <h2 class="fw-600 wow splt-txt" data-splitting>
                    Our Major Causes
                </h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    Creepeth called face upon face yielding midst is after moveth
                </p>
            </div>
            <div class="row g-4">
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="{{ asset('assets/images/data/img-2.png') }}" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Give Donation
                            </a></h3>
                        <p>It you're. Was called you're fowl grass lesser land together waters beast darkness earth land
                            whose male all moveth fruitful.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="{{ asset('assets/images/data/img-3.png') }}" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Give
                                Inspiration
                            </a></h3>
                        <p>It you're. Was called you're fowl grass lesser land together waters beast darkness earth land
                            whose male all moveth fruitful.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-three__item">
                        <div class="service-three__icon mb-20">
                            <img src="{{ asset('assets/images/data/img-4.png') }}" alt="icon">
                        </div>
                        <h3 class="mb-10"><a class='splt-txt wow' data-splitting href='service-details.html'>Become
                                Volunteer
                            </a></h3>
                        <p>It you're. Was called you're fowl grass lesser land together waters beast darkness earth land
                            whose male all moveth fruitful.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end here -->

    <section class="blog-area pb-120 pt-120">
        <div class="container">
            <div class="section-header-flex mb-80">
                <h2 class="fw-600 splt-txt wow" data-splitting>Featured Causes
                </h2>
                <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <p>
                        Creepeth called face upon face yielding midst is after moveth
                    </p>
                    <div class="swiper__info justify-content-start m-0 mt-3">
                        <button class="blog__arry-prev">
                            <i class="fa-regular fa-arrow-left-long"></i>
                        </button>
                        <button class="blog__arry-next active">
                            <i class="fa-regular fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="swiper blog__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="{{ asset('assets/images/data/img-5.jpg') }}"
                                    alt="Blog Image" style="height: 400px;">
                                <div class="tag"
                                    style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                    <h5 class="bg-white px-2 py-1 rounded">
                                        100 Donors
                                    </h5>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class="primary-hover" href="">
                                    Education for every child
                                </a>
                            </h4>
                            <p class="mt-10 mb-20">
                                <a class="primary-hover" href="">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you
                                    were man face god.
                                </a>
                            </p>
                            <a class="btn-three mb-20">
                                Donate <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="{{ asset('assets/images/data/img-6.jpg') }}"
                                    alt="Blog Image" style="height: 400px;">
                                <div class="tag"
                                    style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                    <h5 class="bg-white px-2 py-1 rounded">
                                        100 Donors
                                    </h5>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class="primary-hover" href="">
                                    Education for every child
                                </a>
                            </h4>
                            <p class="mt-10 mb-20">
                                <a class="primary-hover" href="">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you
                                    were man face god.
                                </a>
                            </p>
                            <a class="btn-three mb-20">
                                Donate <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="{{ asset('assets/images/data/img-7.jpg') }}"
                                    alt="Blog Image" style="height: 400px;">
                                <div class="tag"
                                    style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                    <h5 class="bg-white px-2 py-1 rounded">
                                        100 Donors
                                    </h5>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class="primary-hover" href="">
                                    Education for every child
                                </a>
                            </h4>
                            <p class="mt-10 mb-20">
                                <a class="primary-hover" href="">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you
                                    were man face god.
                                </a>
                            </p>
                            <a class="btn-three mb-20">
                                Donate <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature area start here -->
    @php
        $sections = DB::table('our_values_sections')->first();
        $imgValue = DB::table('our_values')->get();
    @endphp


    @if ($sections && $imgValue->count() > 0)
        <section class="feature-three-area d-none">
            <div class="feature-three__container" style="background-color: #fb6f1312">
                <div class="d-flex flex-wrap mb-80 justify-content-between align-items-end gap-3">
                    <div class="section-header">
                        <h5 class="wow splt-txt" data-splitting>{{ $sections->tag_title }}</h5>
                        <h2 class="fw-600 wow splt-txt" data-splitting>{{ $sections->heading }}</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        {!! nl2br(e($sections->description)) !!}
                    </p>
                </div>

                <div class="row g-5">
                    @foreach ($imgValue as $value)
                        <div class="col-xxl-3 col-md-6 wow bounceInUp" data-wow-delay="{{ 200 + $loop->index * 100 }}ms"
                            data-wow-duration="1500ms">
                            <div class="feature-three__item">
                                <div class="feature__icon bg1 mb-30 d-flex justify-content-center align-items-center"
                                    style="height: 100px;">
                                    <img src="{{ asset('storage/' . $value->image) }}" alt="Icon" style="max-height: 60px;"
                                        class="img-fluid">
                                </div>
                                <h3 class="mt-20 mb-1">{{ $value->heading }}</h3>
                                <p>{{ $value->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    @php
        $why_Choose_Us = DB::table('why_choose_us')->first();
        $why_Choose_Us_List = DB::table('why_choose_us_list')->get();
        $btnSettings = DB::table('why_choose_us_list_btn_setting')->first();
    @endphp

    @if (
            $why_Choose_Us &&
            ($why_Choose_Us->title ||
                $why_Choose_Us->heading ||
                $why_Choose_Us->description ||
                $why_Choose_Us->image ||
                $why_Choose_Us_List->count() > 0)
        )
        <section class="about-area pt-120 pb-120 d-none">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="about__image">
                            @if (!empty($why_Choose_Us->image))
                                <img class="w-100" src="{{ asset('storage/' . $why_Choose_Us->image) }}" alt="image">
                            @endif
                            @if (!empty($why_Choose_Us->image_2))
                                <img class="about-kit" src="{{ asset('storage/' . $why_Choose_Us->image_2) }}" alt="image">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__item-right">
                            <div class="section-header">
                                @if (!empty($why_Choose_Us->title))
                                    <h5 class="wow splt-txt" data-splitting>{{ $why_Choose_Us->title }}</h5>
                                @endif
                                @if (!empty($why_Choose_Us->heading))
                                    <h2 class="fw-600 wow splt-txt" data-splitting>{{ $why_Choose_Us->heading }}</h2>
                                @endif
                                @if (!empty($why_Choose_Us->description))
                                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        {{ $why_Choose_Us->description }}
                                    </p>
                                @endif
                            </div>

                            @if ($why_Choose_Us_List->count())
                                <ul class="mt-40">
                                    @foreach ($why_Choose_Us_List as $index => $item)
                                        <li class="d-flex align-items-center wow bounceInUp gap-4"
                                            data-wow-delay="{{ ($index + 1) * 100 }}ms" data-wow-duration="1000ms">
                                            <div class="icon bg{{ ($index % 3) + 1 }}">
                                                <img src="{{ asset('storage/' . $item->list_image) }}" alt="icon">
                                            </div>
                                            <div>
                                                <h3>{{ $item->list_heading }}</h3>
                                                <p>{{ $item->list_description }}</p>
                                            </div>
                                        </li>
                                    @endforeach

                                    @if (!empty($btnSettings?->btn_link) || !empty($btnSettings?->btn_label))
                                        <a class='btn-one active yellow-btn wow fadeInUp' data-wow-delay='400ms'
                                            data-wow-duration='1500ms' href='{{ $btnSettings->btn_link ?? '#' }}'>
                                            {{ $btnSettings->btn_label ?? 'Read More' }}
                                        </a>
                                    @endif
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- About area end here -->

    <!-- Service and portfolio area start here -->
    @isset($categories)
        <section class="service-four-area pt-120 pb-120 d-none" style="background-color: #fb6f1312">
            <div class="container">
                <div class="section-header-four mb-40 text-center">
                    <h5 class="wow splt-txt" data-splitting><span class="title-dot"></span>{{ $services->heading }}
                    </h5>
                    <h2 class="wow splt-txt" data-splitting>{{ $services->title }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! nl2br(e($services->disc)) !!}
                    </p>
                </div>
                <div class="service-four__accordion accordion-four">
                    <div class="accordion" id="accordionExample4">
                        {{-- <div class="accordion-item">
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
                        <div class="accordion-item"> </div>
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
                    </div> --}}
                    @foreach ($categories as $key => $category)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="category_{{ $category->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCategory_{{ $category->id }}" aria-expanded="true"
                                    aria-controls="collapseCategory_{{ $category->id }}">
                                    <span class="main-wrp">
                                        <span class="sub-wrp">
                                            <span class="acc-number">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                            <span class="acc-title">{{ $category->name }}</span>
                                        </span>
                                        <span class="acc-text">{{ $category->description }}</span>
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseCategory_{{ $category->id }}"
                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                aria-labelledby="category_{{ $category->id }}" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <div class="swiper service-four__slider">
                                        <div class="swiper-wrapper">
                                            @php
                                                $projects = DB::table('projects')
                                                    ->where('category_id', $category->id ?? null)
                                                    ->where('status', '1')
                                                    ->whereJsonContains('is_display', 'home')
                                                    ->get();
                                            @endphp
                                            @foreach ($projects as $project)
                                                <div class="swiper-slide">
                                                    <div class="service-four__item">
                                                        <div class="service-four__image mb-20">
                                                            <img class="w-100" src="{{ asset('storage/' . $project->image) }}"
                                                                alt="image">
                                                            @php
                                                                $techIds = array_filter(
                                                                    explode(',', $project->tech_id),
                                                                );
                                                                $technologies = DB::table('case_study_technologies')
                                                                    ->whereIn('id', $techIds)
                                                                    ->pluck('name');
                                                            @endphp

                                                            <div class="tags">
                                                                @foreach ($technologies as $tech)
                                                                    <a href="javascript:void(0)">{{ $tech }}</a>
                                                                @endforeach
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="d-flex align-items-end justify-content-between gap-3 flex-wrap px-3">
                                                            <div class="content">
                                                                <h3>
                                                                    <a href="{{ route('case_study_detail', $project->slug) }}">
                                                                        {{ $project->heading }}
                                                                    </a>
                                                                </h3>
                                                                <p class="fs-16">{{ $project->short_description }}</p>
                                                            </div>
                                                            <a class='btn-four' href='{{ route('case_study_detail', $project->slug) }}'>
                                                                View Full Project
                                                                <span>
                                                                    <i class="fa-regular fa-arrow-right arry1"></i>
                                                                    <i class="fa-regular fa-arrow-right arry2"></i>
                                                                </span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
                    @endforeach
                </div>
            </div>
            </div>
        </section>
    @endisset
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
                <h2 class="fw-600 wow splt-txt" data-splitting>INITIAL DONATIONS</h2>
                <p class="wow fadeInUp col-md-6 mx-auto" data-wow-delay="200ms" data-wow-duration="1500ms">
                    Dive into the success stories of Vibrant Software Technologies's clients—where
                    digital dreams become reality.
                </p>
            </div>

            <div class="swiper testimonial-three__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-three__item-wrp">
                            <div class="testimonial-three__item">
                                <div class="coma-top">
                                    <img src="{{ asset('assets/images/icon/testimonial-three-coma-top.png') }}" alt="icon">
                                </div>
                                <div class="coma-bottom">
                                    <img src="{{ asset('assets/images/icon/testimonial-three-coma-bottom.png') }}"
                                        alt="icon">
                                </div>
                                <p>
                                    A heartfelt thank you for the generous donation of ₹50,001 towards our Tree Plantation
                                    initiative. This contribution will help us plant and nurture trees, creating a greener
                                    and healthier tomorrow. Your support inspires us to continue our mission of protecting
                                    nature and serving humanity.
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                    <img src="{{ asset('assets/images/data/img-8.jpg') }}"
                                        alt="image"
                                        style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                    <div>
                                        <h5 class="mt-0 mb-1">
                                            Shirish Patel
                                        </h5>
                                        <p class="mb-0">
                                            Donor
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-three__item-wrp">
                            <div class="testimonial-three__item">
                                <div class="coma-top">
                                    <img src="{{ asset('assets/images/icon/testimonial-three-coma-top.png') }}" alt="icon">
                                </div>
                                <div class="coma-bottom">
                                    <img src="{{ asset('assets/images/icon/testimonial-three-coma-bottom.png') }}"
                                        alt="icon">
                                </div>
                                <p>
                                    We sincerely thank you for the generous donation of ₹50,001 towards providing food,
                                    clothing, and essentials to homeless individuals. Your kindness brings comfort, dignity,
                                    and hope to those in need. Together, we can create a world where no one is left behind.
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                    <img src="{{ asset('assets/images/data/img-9.jpg') }}"
                                        alt="image"
                                        style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                    <div>
                                        <h5 class="mt-0 mb-1">
                                            Jigisha Patel
                                        </h5>
                                        <p class="mb-0">
                                            Donor
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-three__item-wrp">
                            <div class="testimonial-three__item">
                                <div class="coma-top">
                                    <img src="{{ asset('assets/images/icon/testimonial-three-coma-top.png') }}" alt="icon">
                                </div>
                                <div class="coma-bottom">
                                    <img src="{{ asset('assets/images/icon/testimonial-three-coma-bottom.png') }}"
                                        alt="icon">
                                </div>
                                <p>
                                    We deeply appreciate the generous donation of ₹50,001 towards helping the disabled. Your
                                    support empowers differently-abled individuals with care, dignity, and opportunities to
                                    live a better life. Together, we can build an inclusive society where everyone has the
                                    chance to thrive.
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                    <img src="{{ asset('assets/images/data/img-10.jpg') }}"
                                        alt="image"
                                        style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                    <div>
                                        <h5 class="mt-0 mb-1">
                                            Bipinbhai Patel
                                        </h5>
                                        <p class="mb-0">
                                            Donor
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-60">
                    <div class="swiper__info">
                        <button class="testimonial-three__arry-prev">
                            <i class="fa-regular fa-arrow-left-long"></i>
                        </button>
                        <div class="dot testimonial-three__dot"></div>
                        <button class="testimonial-three__arry-next">
                            <i class="fa-regular fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial area end here -->

    <!-- Blog area start here -->

    @php
        $blogs = DB::table('blogs')
            ->where('status', '1')
            ->whereJsonContains('is_display', 'home')
            ->latest()
            ->take(10)
            ->get();
    @endphp

    @if ($blogs->count() > 0)
        <section class="blog-area pb-120 pt-120 d-none">
            <div class="container">
                <div class="section-header-flex mb-80">
                    <h2 class="fw-600 splt-txt wow" data-splitting>Our Latest Blog and News</h2>
                    <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <p>
                            Delve into real-world examples where our Technology <br>
                            Solutions, Consulting and Strategy,
                        </p>
                        <div class="swiper__info justify-content-start m-0 mt-3">
                            <button class="blog__arry-prev">
                                <i class="fa-regular fa-arrow-left-long"></i>
                            </button>
                            <button class="blog__arry-next active">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper blog__slider">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $blog)
                            @php
                                $categoryIds = explode(',', $blog->category_id);
                                $categories = DB::table('blog_categories')
                                    ->whereIn('id', $categoryIds)
                                    ->pluck('category_name');
                            @endphp
                            <div class="swiper-slide">
                                <div class="blog__item">
                                    <div class="blog__image image">
                                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Blog Image"
                                            style="height: 400px;">
                                        <div class="tag"
                                            style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                            @foreach ($categories as $cat)
                                                <a href="#"
                                                    style="padding: 3px 8px; border-radius: 5px; font-size: 13px; text-decoration: none;">
                                                    {{ $cat }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <h4 class="mt-10 mb-20">
                                        <a class="primary-hover" href="{{ route('blog-details', $blog->blog_slug) }}">
                                            {{ $blog->blog_title }}
                                        </a>
                                    </h4>
                                    <a class="fs-18 blog-btn text-font" href="{{ route('blog-details', $blog->blog_slug) }}">
                                        Read More <i class="fa-light ms-1 fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif


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

   
@endsection

@push('frontend_scripts')
    <script></script>
@endpush