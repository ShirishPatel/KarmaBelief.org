@extends('layouts.app')
@section('title', 'About Us')
@push('styles')
    <style>

    </style>
@endpush
@section('front_content')
    <!-- Banner area start here -->
    <section class="banner-inner-area">
        <div class="container">
            <div class="banner-inner__content">
                <a href='index.html'>home</a><span>/about us</span>
                <h2>About Us</h2>
                <p>Vibrant Software Technology creates vibrant digital products. We allow people to do things in
                    new ways with our outstanding services. We enjoy solving breakneck problems with ease.</p>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    @isset($about)
        <section class="choose-area sub-bg pt-120 pb-120">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="choose__item-left">
                            <div class="section-header mb-30">
                                <h2 class="fw-600 wow splt-txt" data-splitting>
                                    {{ $about->heading ?? '' }}
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    {{ $about->tag_line ?? '' }}
                                </p>
                            </div>
                            <ul class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <li class="mb-15"><span></span> {{ Str::after($about->data, ':') }}</li>
                            </ul>
                            @if (!empty($about->btn_label))
                                <a class='btn-three wow fadeInUp mt-45' data-wow-delay='7s' data-wow-duration='1500ms'
                                    href='{{ $about->btn_link ?? '#' }}'>
                                    {{ $about->btn_label }} <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__zoomIn" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <div class="choose__image">
                            <div class="row g-2 g-sm-4">
                                <div class="col-12">
                                    <div class="image">
                                        <img src="{{ asset('storage/' . $about->image) }}" alt="image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset

    <!-- Fanfact area start here -->
    @php
        $records = DB::table('about_us_mission_vission')->first();
    @endphp

    @if ($records && ($records->heading_1 || $records->description_1 || $records->heading_2 || $records->description_2))
        <section class="fanfact-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-6">
                        <div class="fanfact__item-left">
                            <h2>{{ $records->heading_1 ?? '' }}</h2>
                            <p class="mb-30">{{ $records->description_1 ?? '' }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fanfact__item-left">
                            <h2>{{ $records->heading_2 ?? '' }}</h2>
                            <p>{{ $records->description_2 ?? '' }}</p>
                        </div>
                    </div>

                    @php
                        $record = DB::table('about_us_counter_')->first();
                    @endphp

                    @if ($record && ($record->main_heading || !empty($record->counters)))
                        <div class="col-lg-12">
                            <h2 class="mb-60 fw-300">{{ $record->main_heading ?? '' }}</h2>
                            <div class="row row-cols-5">
                                @if (!empty($record->counters))
                                    @php $counters = json_decode($record->counters, true); @endphp
                                    @foreach ($counters as $counter)
                                        <div class="col mb-60 text-center">
                                            <strong>{{ $counter['title'] }}</strong>
                                            <h2 class="mb-10">
                                                <span class="count">
                                                    {{ $counter['value'] }}
                                                </span>
                                                {{-- <span class="count">
                                                    {{ preg_replace('/[^0-9]/', '', $counter['value']) }}
                                                </span>{{ preg_replace('/[0-9]/', '', $counter['value']) }} --}}
                                            </h2>
                                            <strong>{{ $counter['city'] ?? '' }}</strong>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section>
    @endif

    <!-- Fanfact area end here -->

    <!-- Service area start here -->
    @php
        $imgValue = DB::table('our_values')->get();
    @endphp
    <section class="service-two-area pb-120 ">
        <div class="container">
            <div class="section-header text-center mb-80">
                <h2 class="fw-600 splt-txt wow" data-splitting>Our Values</h2>
            </div>
            <div class="row g-4">
                @foreach ($imgValue as $index => $item)
                    @php
                        $delay = 10 + $index * 110;
                        $bgClass = 'bg' . ($index + 1);
                    @endphp
                    <div class="col-lg-6 wow bounceInUp" data-wow-delay="{{ $delay }}ms" data-wow-duration="700ms">
                        <div class="service-two__item {{ $bgClass }}">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="icon">
                            </div>
                            <div class="service-two__content">
                                <h3 class="mb-10">{{ $item->heading }}</h3>
                                <p class="mb-20">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row g-4">
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg1">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon1.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Accountability</h3>
                            <p class="mb-20">We accept the responsibility, as a team and individuals, for our
                                actions and take obligation for them to reliably deliver the business goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="300ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg2">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon2.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Integrity & Ethics</h3>
                            <p class="mb-20">At Vibrant Software Technologies We believe in Honesty and
                                uncompromising adherence to strong moral and ethical principles and values.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg3">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon3.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Commitment</h3>
                            <p class="mb-20">We carefully and persistently work to the highest levels on behalf
                                of our customers, colleagues and our partners.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-delay="500ms" data-wow-duration="3000ms">
                    <div class="service-two__item bg4">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon4.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Respect</h3>
                            <p class="mb-20">We treat our customers, colleagues and partners as we, ourselves,
                                expect to be treated</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Service area end here -->

    <!-- Service area start here -->
    @php
        $Progress = DB::table('our_progress')->first();
        $ProgressSection = DB::table('our_progress_section')->where('status', '1')->get();
    @endphp

    @if ($Progress && ($Progress->heading || $Progress->description || ($Progress->btn_label && $Progress->btn_link)))
        @if ($ProgressSection->count())
            <section class="service-area sub-bg pt-120 pb-120">
                <div class="service__shape1 sway__animationX">
                    <img src="assets/images/shape/service-shape1.png" alt="shape">
                </div>
                <div class="service__shape2 sway_Y__animationY">
                    <img src="assets/images/shape/service-shape2.png" alt="shape">
                </div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-xl-4 col-md-6">
                            <div class="section-header line-title">
                                <h2 class="fw-600 splt-txt wow" data-splitting>{{ $Progress->heading }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    {!! nl2br($Progress->description) !!}
                                </p>
                                @if ($Progress->btn_label && $Progress->btn_link)
                                    <a class='btn-one active wow fadeInUp mt-40' data-wow-delay='600ms' data-wow-duration='1500ms'
                                        href="{{ $Progress->btn_link }}">
                                        {{ $Progress->btn_label }}
                                        <span>
                                            <i class="fa-regular fa-arrow-up-right arry1"></i>
                                            <i class="fa-regular fa-arrow-up-right arry2"></i>
                                        </span>
                                    </a>
                                @endif
                            </div>
                        </div>
                        @foreach ($ProgressSection as $value)
                            <div class="col-xl-4 col-md-6">
                                <div class="service__item active">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="icon">
                                            <img src="{{ asset('storage/' . $value->image) }}" alt="icon">
                                        </div>
                                        <h4 class="splt-txt wow" data-splitting>{{ $value->heading }}</h4>
                                    </div>
                                    <p class="mt-20 pb-20 fs-16">{!! nl2br(e($value->description)) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endif


    <!-- Service area end here -->


    <!-- Team area start here -->
    <section class="team-four-area mb-60 pt-120 ">
        <div class="container">
            <div class="section-header-inner text-center">
                <h5><span class="title-dot"></span>Our Team Members</h5>
                <h2>Meet with Our 60+ Talented <span class="unread">Designers,</span> <span class="unread">Coders,
                        and Strategists!</span></h2>
            </div>

        </div>
    </section>
    <!-- Team area end here -->

    <!-- Team area start here -->
    <section class="team-four-area pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/1.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">
                                Manoj Bhungani
                            </a></h5>
                        <span>Project Manager</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/2.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Bheraram Prajapati</a></h5>
                        <span>Senior Web Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/3.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">
                                Chintan Nayi
                            </a></h5>
                        <span>Senior Mobile App Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/4.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Chintan Patel</a></h5>
                        <span>Graphic / Web Designer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/5.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Prem Patel</a></h5>
                        <span>Web Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/7.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Harsh Barad</a></h5>
                        <span>Junior Mobile App Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/6.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Brijrajsinh Gohil</a></h5>
                        <span>AWS</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/1.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">
                                Manoj Bhungani
                            </a></h5>
                        <span>Project Manager</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/2.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Bheraram Prajapati</a></h5>
                        <span>Senior Web Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/3.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">
                                Chintan Nayi
                            </a></h5>
                        <span>Senior Mobile App Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/4.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Chintan Patel</a></h5>
                        <span>Graphic / Web Designer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-four__item">
                        <div class="image">
                            <img src="assets/images/team/5.webp" alt="image">
                            <div class="team-four__social">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4"><a href="#0">Prem Patel</a></h5>
                        <span>Web Developer</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Team area end here -->

    {{-- <!-- Book area start here -->
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
                    <a href="{{ $record->btn_link ?? '#' }}" class="btn-two border-none ">{{ $record->btn_label ?? '' }}
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

    <!-- Book area end here --> --}}

@endsection

@push('frontend_scripts')
    <script></script>
@endpush