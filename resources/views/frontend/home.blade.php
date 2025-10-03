@extends('layouts.app')
@section('title', 'Home')
@push('styles')
    <style>
        /* primary - #012d85 */
        /* secondary - #0199e4 */
    </style>
@endpush
@section('front_content')

    <!-- Hero Section start here -->
    @isset($heroSection)
        <section class="banner-three-area paralax__animation bg-transparent" style="background: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-three__content">
                            <span class="wow splt-txt" data-splitting>
                                {{ $heroSection->tag_line }}
                                <img src="{{ asset('assets/images/icon/roket.png') }}" alt="icon">
                            </span>

                            <h1 class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                {{ $heroSection->heading }}
                            </h1>

                            <p class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                {{ $heroSection->description }}
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
                            src="{{ asset('storage/' . $heroSection->image) }}" alt="Section image">
                    </div>
                </div>
            </div>
        </section>
    @endisset
    <!-- Hero Section end here -->

    <!-- Causes start here -->
    @isset($causes)
        <section class="service-three-area pt-120 pb-120" style="background-color: #fb6f1312">
            <div class="container">
                <div class="section-header mb-80 text-center">
                    <h2 class="fw-600 wow splt-txt" data-splitting>
                        {{ $causes->heading }}
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        {{ $causes->description }}
                    </p>
                </div>
                <div class="row g-4">
                    @foreach ($causeValues as $values)
                        <div class="col-xl-4">
                            <div class="service-three__item">
                                <div class="service-three__icon mb-20">
                                    <img src="{{ asset('storage/' . $values->image) }}" alt="icon">
                                </div>
                                <h3 class="mb-10">{{ $values->heading }}</h3>
                                <p>{{ $values->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endisset
    <!-- Causes end here -->

    @isset($solutions)
        <section class="blog-area pb-120 pt-120">
            <div class="container">
                <div class="section-header-flex mb-80">
                    <h2 class="fw-600 splt-txt wow" data-splitting>
                        {{ $smartSolution->solution_heading ?? '' }}
                    </h2>
                    <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <p>{{ $smartSolution->solution_description ?? '' }}</p>
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
                        @foreach ($solutions as $solution)
                            <div class="swiper-slide">
                                <div class="blog__item border border-5 border-light rounded-5 shadow-sm">
                                    <div class="blog__image image">
                                        <img src="{{ asset('storage/' . $solution->smart_image) }}" alt="Blog Image"
                                            style="height: 400px;">
                                        <div class="tag"
                                            style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                            <h5 class="bg-white px-2 py-1 rounded">
                                                {{ $solution->smart_title }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="ps-3">
                                        <h4 class="mt-10 mb-20">
                                            <a class="primary-hover" href="{{ $solution->btn_link ?? 'javascript:void(0)' }}">
                                                {{ $solution->smart_heading }}
                                            </a>
                                        </h4>
                                        <p class="mt-10 mb-20">
                                            <a class="primary-hover" href="{{ $solution->btn_link ?? 'javascript:void(0)' }}">
                                                {{ $solution->data }}
                                            </a>
                                        </p>
                                        <a class="btn-three mb-20" href="{{ $solution->btn_link ?? 'javascript:void(0)' }}">
                                            {{ $solution->btn_label }} <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endisset

    <!-- Testimonial area start here -->
    @isset($donations)
        <section class="testimonial-three-area pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="testimonial-four__card">
                            <div class="bg">
                                <img src="{{ asset('assets/images/bg/testimonia-four-card-bg.png') }}" alt="image">
                            </div>
                            <div class="mt-120">
                                <h5 class="text-light border-bottom border-2 border-light d-inline-flex">
                                    INITIAL DONATIONS
                                </h5>
                                <div class=" mt-15 divider">
                                    <span class="fs-18 text-light">
                                        Dive into the success stories of Vibrant Software Technologies's clients—where
                                        digital dreams become reality.
                                    </span>
                                </div>
                            </div>
                            <div>
                                <a href="#0" class="btn-four">
                                    Donate Now
                                    <span>
                                        <i class="fa-regular fa-arrow-right arry1"></i>
                                        <i class="fa-regular fa-arrow-right arry2"></i>
                                    </span>
                                </a>
                            </div>
                            <span class="fs-18 text-white"></span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div
                            class="swiper testimonial-four__slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-fd7f6dd2983222cf" aria-live="polite"
                                style="transform: translate3d(-1792px, 0px, 0px); transition-duration: 0ms;">
                                @foreach ($donations as $donation)
                                    <div class="swiper-slide" role="group" aria-label="1 / 6"
                                        style="width: 424px; margin-right: 24px;">
                                        <div class="testimonial-four__item">
                                            <img class="mb-20 rounded-pill" width="60"
                                                src="{{ asset('storage/' . $donation->client_image) }}" alt="image">
                                            <p>“{{ $donation->client_heading }}”
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center mt-25">
                                                <div>
                                                    <h5 class="">{{ $donation->client_name }}</h5>
                                                    <span>{{ $donation->client_role }}</span>
                                                </div>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="border border-3 border-white rounded-pill p-2"
                                                        viewBox="0 0 24 24" style="fill: #012d85;transform: ;msFilter:;">
                                                        <path
                                                            d="M17.726 13.02 14 16H9v-1h4.065a.5.5 0 0 0 .416-.777l-.888-1.332A1.995 1.995 0 0 0 10.93 12H3a1 1 0 0 0-1 1v6a2 2 0 0 0 2 2h9.639a3 3 0 0 0 2.258-1.024L22 13l-1.452-.484a2.998 2.998 0 0 0-2.822.504zm1.532-5.63c.451-.465.73-1.108.73-1.818s-.279-1.353-.73-1.818A2.447 2.447 0 0 0 17.494 3S16.25 2.997 15 4.286C13.75 2.997 12.506 3 12.506 3a2.45 2.45 0 0 0-1.764.753c-.451.466-.73 1.108-.73 1.818s.279 1.354.73 1.818L15 12l4.258-4.61z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="swiper-slide" role="group" aria-label="2 / 6"
                                    style="width: 424px; margin-right: 24px;">
                                    <div class="testimonial-four__item">
                                        <div class="star d-flex align-items-center gap-1 mb-60">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.1301 3.3329C11.8451 2.67375 13.7085 2.44123 15.5383 2.55505C18.1199 2.72473 20.635 3.77071 22.5684 5.48702C22.8897 5.76842 23.2012 6.06029 23.5218 6.34238C22.3115 7.55176 21.0984 8.75904 19.8881 9.96842C19.3771 9.54876 18.9018 9.08163 18.3397 8.72832C17.1259 7.93999 15.651 7.57759 14.209 7.67884C12.8293 7.74727 11.4489 8.20602 10.3765 9.09001C9.34257 9.92512 8.63697 11.1303 8.35137 12.4214C8.02517 13.887 8.14347 15.4623 8.75597 16.8392C9.34887 18.1911 10.4563 19.3062 11.8059 19.9116C13.7722 20.7942 16.1746 20.7159 18.0345 19.605C18.7198 19.2189 19.2721 18.654 19.8643 18.1471C21.0935 19.353 22.329 20.5526 23.5463 21.7703C23.0346 22.2521 22.5334 22.7479 21.9741 23.1745C20.2101 24.541 18.0478 25.3859 15.8225 25.5751C13.9262 25.7273 11.9837 25.5025 10.2078 24.8028C8.03777 23.9621 6.14357 22.4267 4.89337 20.4667C3.65577 18.5465 3.03347 16.2527 3.05937 13.975C3.04187 11.6617 3.68027 9.32532 4.98157 7.39954C6.21637 5.55126 8.05037 4.11984 10.1301 3.3329Z"
                                                    fill="#151314"></path>
                                                <path
                                                    d="M13.8978 10.2491C14.7903 10.1186 15.729 10.3001 16.4969 10.7756C17.3985 11.3175 18.0565 12.2448 18.27 13.2726C18.4933 14.2899 18.2833 15.396 17.6939 16.2569C17.0723 17.1891 16.0265 17.8238 14.91 17.9418C14.0259 18.041 13.1061 17.8392 12.3606 17.3511C11.4926 16.7995 10.8619 15.8896 10.6582 14.8821C10.4755 13.9667 10.612 12.9835 11.081 12.1707C11.6599 11.1457 12.7274 10.4097 13.8978 10.2491Z"
                                                    fill="#FF3D2E"></path>
                                            </svg>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ms-1 fw-500 fs-18 secondary-color">5.0</span>
                                        </div>
                                        <img class="mb-20" src="assets/images/testimonial/testimonial-four-image2.png"
                                            alt="image">
                                        <p>“AgenShark not only impressed
                                            provided strategic guidance that helped us with their coding finesse
                                            but
                                            also brought
                                            an artistic touch to the functionality.
                                            Their team seamlessly translated our vision into a digital reality,
                                            providing not just a website but an interactive
                                            platform that reflects our tech-forward identity.”
                                        </p>
                                        <h5 class="mt-25">Washim Jowader</h5>
                                        <span>Software Developer, TechVibe Co</span>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 6"
                                    style="width: 424px; margin-right: 24px;">
                                    <div class="testimonial-four__item">
                                        <div class="star d-flex align-items-center gap-1 mb-60">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.1301 3.3329C11.8451 2.67375 13.7085 2.44123 15.5383 2.55505C18.1199 2.72473 20.635 3.77071 22.5684 5.48702C22.8897 5.76842 23.2012 6.06029 23.5218 6.34238C22.3115 7.55176 21.0984 8.75904 19.8881 9.96842C19.3771 9.54876 18.9018 9.08163 18.3397 8.72832C17.1259 7.93999 15.651 7.57759 14.209 7.67884C12.8293 7.74727 11.4489 8.20602 10.3765 9.09001C9.34257 9.92512 8.63697 11.1303 8.35137 12.4214C8.02517 13.887 8.14347 15.4623 8.75597 16.8392C9.34887 18.1911 10.4563 19.3062 11.8059 19.9116C13.7722 20.7942 16.1746 20.7159 18.0345 19.605C18.7198 19.2189 19.2721 18.654 19.8643 18.1471C21.0935 19.353 22.329 20.5526 23.5463 21.7703C23.0346 22.2521 22.5334 22.7479 21.9741 23.1745C20.2101 24.541 18.0478 25.3859 15.8225 25.5751C13.9262 25.7273 11.9837 25.5025 10.2078 24.8028C8.03777 23.9621 6.14357 22.4267 4.89337 20.4667C3.65577 18.5465 3.03347 16.2527 3.05937 13.975C3.04187 11.6617 3.68027 9.32532 4.98157 7.39954C6.21637 5.55126 8.05037 4.11984 10.1301 3.3329Z"
                                                    fill="#151314"></path>
                                                <path
                                                    d="M13.8978 10.2491C14.7903 10.1186 15.729 10.3001 16.4969 10.7756C17.3985 11.3175 18.0565 12.2448 18.27 13.2726C18.4933 14.2899 18.2833 15.396 17.6939 16.2569C17.0723 17.1891 16.0265 17.8238 14.91 17.9418C14.0259 18.041 13.1061 17.8392 12.3606 17.3511C11.4926 16.7995 10.8619 15.8896 10.6582 14.8821C10.4755 13.9667 10.612 12.9835 11.081 12.1707C11.6599 11.1457 12.7274 10.4097 13.8978 10.2491Z"
                                                    fill="#FF3D2E"></path>
                                            </svg>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ms-1 fw-500 fs-18 secondary-color">5.0</span>
                                        </div>
                                        <img class="mb-20" src="assets/images/testimonial/testimonial-four-image1.png"
                                            alt="image">
                                        <p>“As a startup, we needed a digital presence that would make a
                                            statement.
                                            AgenShark not only delivered a stunning website
                                            but also provided strategic guidance that helped us establish our
                                            brand
                                            identity. Their expertise and commitment to our
                                            project were instrumental in our initial success.”
                                        </p>
                                        <h5 class="mt-25">Nishan Khan</h5>
                                        <span>Founder, Startup Innovations</span>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 6"
                                    style="width: 424px; margin-right: 24px;">
                                    <div class="testimonial-four__item">
                                        <div class="star d-flex align-items-center gap-1 mb-60">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.1301 3.3329C11.8451 2.67375 13.7085 2.44123 15.5383 2.55505C18.1199 2.72473 20.635 3.77071 22.5684 5.48702C22.8897 5.76842 23.2012 6.06029 23.5218 6.34238C22.3115 7.55176 21.0984 8.75904 19.8881 9.96842C19.3771 9.54876 18.9018 9.08163 18.3397 8.72832C17.1259 7.93999 15.651 7.57759 14.209 7.67884C12.8293 7.74727 11.4489 8.20602 10.3765 9.09001C9.34257 9.92512 8.63697 11.1303 8.35137 12.4214C8.02517 13.887 8.14347 15.4623 8.75597 16.8392C9.34887 18.1911 10.4563 19.3062 11.8059 19.9116C13.7722 20.7942 16.1746 20.7159 18.0345 19.605C18.7198 19.2189 19.2721 18.654 19.8643 18.1471C21.0935 19.353 22.329 20.5526 23.5463 21.7703C23.0346 22.2521 22.5334 22.7479 21.9741 23.1745C20.2101 24.541 18.0478 25.3859 15.8225 25.5751C13.9262 25.7273 11.9837 25.5025 10.2078 24.8028C8.03777 23.9621 6.14357 22.4267 4.89337 20.4667C3.65577 18.5465 3.03347 16.2527 3.05937 13.975C3.04187 11.6617 3.68027 9.32532 4.98157 7.39954C6.21637 5.55126 8.05037 4.11984 10.1301 3.3329Z"
                                                    fill="#151314"></path>
                                                <path
                                                    d="M13.8978 10.2491C14.7903 10.1186 15.729 10.3001 16.4969 10.7756C17.3985 11.3175 18.0565 12.2448 18.27 13.2726C18.4933 14.2899 18.2833 15.396 17.6939 16.2569C17.0723 17.1891 16.0265 17.8238 14.91 17.9418C14.0259 18.041 13.1061 17.8392 12.3606 17.3511C11.4926 16.7995 10.8619 15.8896 10.6582 14.8821C10.4755 13.9667 10.612 12.9835 11.081 12.1707C11.6599 11.1457 12.7274 10.4097 13.8978 10.2491Z"
                                                    fill="#FF3D2E"></path>
                                            </svg>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ms-1 fw-500 fs-18 secondary-color">5.0</span>
                                        </div>
                                        <img class="mb-20" src="assets/images/testimonial/testimonial-four-image2.png"
                                            alt="image">
                                        <p>“AgenShark not only impressed
                                            provided strategic guidance that helped us with their coding finesse
                                            but
                                            also brought
                                            an artistic touch to the functionality.
                                            Their team seamlessly translated our vision into a digital reality,
                                            providing not just a website but an interactive
                                            platform that reflects our tech-forward identity.”
                                        </p>
                                        <h5 class="mt-25">Washim Jowader</h5>
                                        <span>Software Developer, TechVibe Co</span>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 6"
                                    style="width: 424px; margin-right: 24px;">
                                    <div class="testimonial-four__item">
                                        <div class="star d-flex align-items-center gap-1 mb-60">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.1301 3.3329C11.8451 2.67375 13.7085 2.44123 15.5383 2.55505C18.1199 2.72473 20.635 3.77071 22.5684 5.48702C22.8897 5.76842 23.2012 6.06029 23.5218 6.34238C22.3115 7.55176 21.0984 8.75904 19.8881 9.96842C19.3771 9.54876 18.9018 9.08163 18.3397 8.72832C17.1259 7.93999 15.651 7.57759 14.209 7.67884C12.8293 7.74727 11.4489 8.20602 10.3765 9.09001C9.34257 9.92512 8.63697 11.1303 8.35137 12.4214C8.02517 13.887 8.14347 15.4623 8.75597 16.8392C9.34887 18.1911 10.4563 19.3062 11.8059 19.9116C13.7722 20.7942 16.1746 20.7159 18.0345 19.605C18.7198 19.2189 19.2721 18.654 19.8643 18.1471C21.0935 19.353 22.329 20.5526 23.5463 21.7703C23.0346 22.2521 22.5334 22.7479 21.9741 23.1745C20.2101 24.541 18.0478 25.3859 15.8225 25.5751C13.9262 25.7273 11.9837 25.5025 10.2078 24.8028C8.03777 23.9621 6.14357 22.4267 4.89337 20.4667C3.65577 18.5465 3.03347 16.2527 3.05937 13.975C3.04187 11.6617 3.68027 9.32532 4.98157 7.39954C6.21637 5.55126 8.05037 4.11984 10.1301 3.3329Z"
                                                    fill="#151314"></path>
                                                <path
                                                    d="M13.8978 10.2491C14.7903 10.1186 15.729 10.3001 16.4969 10.7756C17.3985 11.3175 18.0565 12.2448 18.27 13.2726C18.4933 14.2899 18.2833 15.396 17.6939 16.2569C17.0723 17.1891 16.0265 17.8238 14.91 17.9418C14.0259 18.041 13.1061 17.8392 12.3606 17.3511C11.4926 16.7995 10.8619 15.8896 10.6582 14.8821C10.4755 13.9667 10.612 12.9835 11.081 12.1707C11.6599 11.1457 12.7274 10.4097 13.8978 10.2491Z"
                                                    fill="#FF3D2E"></path>
                                            </svg>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ms-1 fw-500 fs-18 secondary-color">5.0</span>
                                        </div>
                                        <img class="mb-20" src="assets/images/testimonial/testimonial-four-image1.png"
                                            alt="image">
                                        <p>“As a startup, we needed a digital presence that would make a
                                            statement.
                                            AgenShark not only delivered a stunning website
                                            but also provided strategic guidance that helped us establish our
                                            brand
                                            identity. Their expertise and commitment to our
                                            project were instrumental in our initial success.”
                                        </p>
                                        <h5 class="mt-25">Nishan Khan</h5>
                                        <span>Founder, Startup Innovations</span>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 6"
                                    style="width: 424px; margin-right: 24px;">
                                    <div class="testimonial-four__item">
                                        <div class="star d-flex align-items-center gap-1 mb-60">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.1301 3.3329C11.8451 2.67375 13.7085 2.44123 15.5383 2.55505C18.1199 2.72473 20.635 3.77071 22.5684 5.48702C22.8897 5.76842 23.2012 6.06029 23.5218 6.34238C22.3115 7.55176 21.0984 8.75904 19.8881 9.96842C19.3771 9.54876 18.9018 9.08163 18.3397 8.72832C17.1259 7.93999 15.651 7.57759 14.209 7.67884C12.8293 7.74727 11.4489 8.20602 10.3765 9.09001C9.34257 9.92512 8.63697 11.1303 8.35137 12.4214C8.02517 13.887 8.14347 15.4623 8.75597 16.8392C9.34887 18.1911 10.4563 19.3062 11.8059 19.9116C13.7722 20.7942 16.1746 20.7159 18.0345 19.605C18.7198 19.2189 19.2721 18.654 19.8643 18.1471C21.0935 19.353 22.329 20.5526 23.5463 21.7703C23.0346 22.2521 22.5334 22.7479 21.9741 23.1745C20.2101 24.541 18.0478 25.3859 15.8225 25.5751C13.9262 25.7273 11.9837 25.5025 10.2078 24.8028C8.03777 23.9621 6.14357 22.4267 4.89337 20.4667C3.65577 18.5465 3.03347 16.2527 3.05937 13.975C3.04187 11.6617 3.68027 9.32532 4.98157 7.39954C6.21637 5.55126 8.05037 4.11984 10.1301 3.3329Z"
                                                    fill="#151314"></path>
                                                <path
                                                    d="M13.8978 10.2491C14.7903 10.1186 15.729 10.3001 16.4969 10.7756C17.3985 11.3175 18.0565 12.2448 18.27 13.2726C18.4933 14.2899 18.2833 15.396 17.6939 16.2569C17.0723 17.1891 16.0265 17.8238 14.91 17.9418C14.0259 18.041 13.1061 17.8392 12.3606 17.3511C11.4926 16.7995 10.8619 15.8896 10.6582 14.8821C10.4755 13.9667 10.612 12.9835 11.081 12.1707C11.6599 11.1457 12.7274 10.4097 13.8978 10.2491Z"
                                                    fill="#FF3D2E"></path>
                                            </svg>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ms-1 fw-500 fs-18 secondary-color">5.0</span>
                                        </div>
                                        <img class="mb-20" src="assets/images/testimonial/testimonial-four-image2.png"
                                            alt="image">
                                        <p>“AgenShark not only impressed
                                            provided strategic guidance that helped us with their coding finesse
                                            but
                                            also brought
                                            an artistic touch to the functionality.
                                            Their team seamlessly translated our vision into a digital reality,
                                            providing not just a website but an interactive
                                            platform that reflects our tech-forward identity.”
                                        </p>
                                        <h5 class="mt-25">Washim Jowader</h5>
                                        <span>Software Developer, TechVibe Co</span>
                                    </div>
                                </div> --}}
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
                <div class="mt-40">
                    <div class="team-four__swiper-scrollbar">
                        <div class="position-relative">
                            <div class="testimonial-four__scrollbar swiper-scrollbar-horizontal">
                                <div class="swiper-scrollbar-drag"
                                    style="transform: translate3d(77.3574px, 0px, 0px); width: 37.6426px; transition-duration: 0ms;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-15"></div>
                    <div class="swiper-four__info">
                        <button class="testimonial-four__arry-prev active disable" tabindex="0" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-fd7f6dd2983222cf" aria-disabled="false"><i
                                class="fa-regular fa-arrow-left"></i></button>
                        <button class="testimonial-four__arry-next active swiper-button-disabled" tabindex="-1"
                            aria-label="Next slide" aria-controls="swiper-wrapper-fd7f6dd2983222cf" aria-disabled="true"
                            disabled=""><i class="fa-regular fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
    @endisset
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
                                    <a class="fs-18 blog-btn text-font"
                                        href="{{ route('blog-details', $blog->blog_slug) }}">
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
