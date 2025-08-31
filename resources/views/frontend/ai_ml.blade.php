@extends('layouts.app')
@section('title', 'AI & Machine Learning Solutions')
@push('styles')
    <style>
        .here-bg-main {
            height: 532px;
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
    @php
        $aimlHome = DB::table('aiml_home_hero')->first();
    @endphp
    <section class="banner-three-area paralax__animation">
        <div class="container pt-80">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-three__content">
                        <span class="wow splt-txt" data-splitting>
                            {{ $aimlHome->tag_line }}
                        </span>

                        <h1 class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            {{ $aimlHome->heading }}
                        </h1>

                        <p class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            {{ $aimlHome->description }}
                        </p>

                        <div class="d-flex align-items-center gap-3 pt-40">
                            <a class='btn-one' href='{{ $aimlHome->btn_link }}'>
                                {{ $aimlHome->btn_label }}
                                <span>
                                    <i class="fa-regular fa-arrow-up-right arry1"></i>
                                    <i class="fa-regular fa-arrow-up-right arry2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-three__image" style="bottom: 0"><img class="wow bounceInRight here-bg-main"
                            data-wow-delay="200ms" data-wow-duration="2000ms"
                            src="{{ asset('storage/' . $aimlHome->image) }}" alt="image"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->


    <!-- Grow area start here -->
    @php
        $data = DB::table('aiml_home_hero_about')->first();
        $expertiseItems = json_decode($data->about_company ?? '[]', true); // decode JSON expertise
    @endphp
    <section class="grow-area sub-bg pt-120 pb-120">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow animate__zoomIn" data-wow-delay="200ms" data-wow-duration="2000ms">
                    <div class="about__image" style="background: #fff;padding: 25px;border-radius: 25px;">
                        <img class="w-100" src="{{ asset('storage/' . $data->image1) }}" alt="Image 1">
                        <img class="about-kit" src="{{ asset('storage/' . $data->image2) }}" alt="Image 2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="grow__item-left">
                        <div class="section-header mb-30">
                            <h5 class="wow splt-txt" data-splitting>{{ $data->title_tag }}</h5>
                            <h2 class="fw-600 wow splt-txt" data-splitting>{{ $data->heading }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                {{ $data->description }}
                            </p>
                        </div>

                        <div class="row g-4">
                            @foreach (array_chunk($expertiseItems, ceil(count($expertiseItems) / 2)) as $chunk)
                                <div class="col-md-6">
                                    <ul>
                                        @foreach ($chunk as $item)
                                            <li class="mb-15"><i class="fa-regular fa-check"></i> {{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>

                        <a class="btn-three mt-45" href="{{ $data->btn_link }}">
                            {{ $data->btn_label }} <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Grow area end here -->


    <!-- Process area start here -->
    @php
        $heroServices = DB::table('aiml_home_hero_services')->first();
        $heroServices->services = json_decode($heroServices->services ?? '[]', true);
    @endphp
    <section class="process-four-area pt-120">
        <div class="container">
            <div class="section-header-four mb-40 text-center">
                <h5 class="wow splt-txt" data-splitting>
                    <span class="title-dot"></span>{{ $heroServices->title_tag ?? '' }}
                </h5>
                <h2 class="wow splt-txt" data-splitting>{{ $heroServices->heading ?? '' }}</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    {!! nl2br($heroServices->description ?? '') !!}
                </p>
            </div>
            @php
                $services = $heroServices->services ?? [];
            @endphp

            <div class="row g-5 g-lg-0 align-items-center">
                <div class="col-lg-3">
                    @foreach ($services as $i => $service)
                        @if ($i % 2 == 0)
                            <div class="process-four__item {{ $i > 1 ? 'mt-80' : '' }}">
                                <h3><span>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}.</span> {{ $service['title'] }}</h3>
                                <p>{{ $service['value'] }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="col-lg-6">
                    <div class="process-four__image">
                        <img class="w-100" src="{{ asset('storage/' . $heroServices->image) }}" alt="Development Process">
                    </div>
                </div>

                <div class="col-lg-3">
                    @foreach ($services as $i => $service)
                        @if ($i % 2 == 1)
                            <div class="process-four__item {{ $i > 2 ? 'mt-80' : '' }}">
                                <h3><span>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}.</span> {{ $service['title'] }}</h3>
                                <p>{{ $service['value'] }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Process area end here -->

  
    <section class="process-four-area pt-120">
        <div class="container">
            <div class="section-header-four mb-40 text-center">
                <h5 class="wow splt-txt" data-splitting><span class="title-dot"></span>Our Work gallery</h5>
                <h2 class="wow splt-txt" data-splitting>Artificial Intelligence Real Results</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Experience the
                    transformation as we elevate your brand’s <br> online presence, making it
                    unforgettable.</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__item">
                                <div class="blog__image image">
                                    <img src="https://wowtheme7.com/tf/agiletech/agiletech/assets/img/service/11.png"
                                        alt="image">
                                    <div class="tag">
                                        <a href="#">Mind Tech <br> <small>Las vegas</small></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="blog__item">
                                <div class="blog__image image">
                                    <img src="https://wowtheme7.com/tf/agiletech/agiletech/assets/img/service/12.png"
                                        alt="image">
                                    <div class="tag">
                                        <a href="#">Mind Tech <br> <small>Las vegas</small></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="blog__item">
                                <div class="blog__image image">
                                    <img src="https://wowtheme7.com/tf/agiletech/agiletech/assets/img/service/13.png"
                                        alt="image">
                                    <div class="tag">
                                        <a href="#">Mind Tech <br> <small>Las vegas</small></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="blog__item">
                                <div class="blog__image image">
                                    <img src="https://wowtheme7.com/tf/agiletech/agiletech/assets/img/service/15.png"
                                        alt="image">
                                    <div class="tag">
                                        <a href="#">Mind Tech <br> <small>Las vegas</small></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="blog__item">
                                <div class="blog__image image">
                                    <img src="https://wowtheme7.com/tf/agiletech/agiletech/assets/img/service/11.png"
                                        alt="image">
                                    <div class="tag">
                                        <a href="#">Mind Tech <br> <small>Las vegas</small></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>


    <!-- Team area start here -->
    <section class="team-four-area mb-60  pb-60 pt-120 d-none">
        <div class="container">
            <div class="section-header-inner text-center mb-80">
                <h5><span class="title-dot"></span>MEET OUR EXPERTS</h5>
                <h2>Innovation Through Is <span class="unread">Intelligence</span></h2>
            </div>
            <div class="swiper team-four__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image1.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Abu Rayhan</a></h5>
                            <span>Founder of AgenShark</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image2.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Rahat Hossain</a></h5>
                            <span>CEO of AgenShark</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image3.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Shanta Rohman</a></h5>
                            <span>Project Manager of AgenShark</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image4.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Kawser Ahmed</a></h5>
                            <span>Lead Developer of AgenShark</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image1.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Abu Rayhan</a></h5>
                            <span>Founder of AgenShark</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image2.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Rahat Hossain</a></h5>
                            <span>CEO of AgenShark</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image3.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Shanta Rohman</a></h5>
                            <span>Project Manager of AgenShark</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-four__item">
                            <div class="image">
                                <img src="assets/images/team/team-four-image4.png" alt="image">
                                <div class="team-four__social">
                                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-4"><a href="#0">Kawser Ahmed</a></h5>
                            <span>Lead Developer of AgenShark</span>
                        </div>
                    </div>
                </div>
                <div class="mt-60">
                    <div class="swiper-two__info">
                        <button class="team-four__arry-prev active"><i class="fa-regular fa-arrow-left-long"></i></button>
                        <div class="dot team-four__dot"></div>
                        <button class="team-four__arry-next active"><i
                                class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team area end here -->

    @php
        $process = DB::table('aiml_home_hero_process')->first();
        $processList = json_decode($process->process ?? '[]', true);
    @endphp

    <section class="process-four-area pt-120">
        <div class="container">
            <div class="section-header-four mb-40 text-center">
                <h5 class="wow splt-txt" data-splitting>
                    <span class="title-dot"></span>{{ $process->title_tag ?? 'Development Process' }}
                </h5>
                <h2 class="wow splt-txt" data-splitting>{{ $process->heading ?? '' }}</h2>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    {!! nl2br($process->description ?? '') !!}
                </p>
            </div>

            <div class="process__wrp">
                <div class="process__line">
                    <img src="{{ asset('assets/images/shape/process-line.png') }}" alt="Process Line">
                </div>
                <div class="row g-5">
                    @foreach ($processList as $index => $item)
                        @php
                            $number = $index + 1;
                            $bgClass = 'bg' . (($index % 3) + 1);
                            $hasCircle = $number % 2 === 0;
                        @endphp

                        <div class="col-lg-3">
                            <div class="process__item">
                                <div class="process__number {{ $hasCircle ? '' : $bgClass }}">
                                    <h4>{{ $number }}</h4>
                                    @if ($hasCircle)
                                        <img src="{{ asset('assets/images/shape/process-circle.png') }}"
                                            alt="Process Circle">
                                    @endif
                                </div>
                                <h4 class="mb-10 mt-25 wow splt-txt" data-splitting>{{ $item['title'] ?? '' }}</h4>
                                <p class="fs-16">{{ $item['value'] ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial area start here -->
    @php
        $clientStroy = DB::table('client_stories')->first();
        $clientStroySection = DB::table('testimonials')->where('status', '1')->get();
    @endphp

    @if ($clientStroy && $clientStroySection->count())
        <section class="testimonial-three-area pb-120 pt-120">
            <div class="container">
                <div class="section-header mb-80 text-center">
                    <h5 class="wow splt-txt" data-splitting>{{ $clientStroy->heading }}</h5>
                    <h2 class="fw-600 wow splt-txt" data-splitting>{{ $clientStroy->title }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! nl2br(e($clientStroy->disc)) !!}</p>
                </div>

                <div class="swiper testimonial-three__slider">
                    <div class="swiper-wrapper">
                        @foreach ($clientStroySection as $client)
                            <div class="swiper-slide">
                                <div class="testimonial-three__item-wrp">
                                    <div class="testimonial-three__item">
                                        <div class="coma-top">
                                            <img src="{{ asset('assets/images/icon/testimonial-three-coma-top.png') }}"
                                                alt="icon">
                                        </div>
                                        <div class="coma-bottom">
                                            <img src="{{ asset('assets/images/icon/testimonial-three-coma-bottom.png') }}"
                                                alt="icon">
                                        </div>
                                        <div class="star d-flex gap-2 mb-4 justify-content-end">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p>{{ $client->description }}</p>
                                        <div class="d-flex gap-3 align-items-center mt-30 pt-30 bor-top">
                                            <img src="{{ asset('storage/' . $client->avtar) }}" alt="image"
                                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                            <div>
                                                <h5 class="mt-0 mb-1">{{ $client->name }}</h5>
                                                <p class="mb-0">{{ $client->position }}, {{ $client->company_name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-60">
                        <div class="swiper__info">
                            <button class="testimonial-three__arry-prev">
                                <i class="fa-regular fa-arrow-left-long"></i>
                            </button>
                            <div class="dot testimonial-three__dot"></div>
                            <button class="testimonial-three__arry-next active">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Testimonial area end here -->

    <!-- Blog area start here -->
    <section class="blog-area pb-120 pt-80">
        <div class="container">
            <div class="section-header-flex mb-80">
                <h2 class="fw-600 splt-txt wow" data-splitting>Our AI/ML Case Studies</h2>
                <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <p>Explore real-world applications where our AI and Machine Learning <br> solutions transformed
                        businesses and drove innovation.</p>
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
                                    <a href='service-details.html'>Machine Learning</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20"><a class='primary-hover' href='blog-details.html'>
                                    Predictive Analytics: How We Helped E-commerce Giant Boost Sales by 45%</a></h4>
                            <a class='fs-18 blog-btn text-font' href='blog-details.html'>View Case Study <i
                                    class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="assets/images/blog/blog-image2.png" alt="image">
                                <div class="tag">
                                    <a href='service-details.html'>Computer Vision</a>
                                    <a href='service-details.html'>AI</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20"><a class='primary-hover' href='blog-details.html'>
                                    Implementing Smart Quality Control: Manufacturing Defect Detection System</a></h4>
                            <a class='fs-18 blog-btn text-font' href='blog-details.html'>View Case Study <i
                                    class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="assets/images/blog/blog-image3.png" alt="image">
                                <div class="tag">
                                    <a href='service-details.html'>Natural Language Processing</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20"><a class='primary-hover' href='blog-details.html'>
                                    AI-Powered Customer Service: Chatbot Solution Reduces Response Time by 80%</a></h4>
                            <a class='fs-18 blog-btn text-font' href='blog-details.html'>View Case Study <i
                                    class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog area end here -->


    <!-- Book area start here -->
    @php
        $record = DB::table('about_inquiry')->first();
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
    <!-- Book area end here -->

@endsection

@push('frontend_scripts')
    <script></script>
@endpush
