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
                <div class="row g-4 justify-content-between pb-120">
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
                </div>
                @if (!empty($record->counters))
                    @php
                        $counters = json_decode($record->counters, true);
                        $half = ceil(count($counters) / 2);
                        $firstHalf = array_slice($counters, 0, $half);
                        $secondHalf = array_slice($counters, $half);
                    @endphp

                    @if (!empty($counters))
                        <section class="marquee-two-area pt-120 pb-120">
                            <div class="marquee__wrp">
                                <div class="marquee__slide">
                                    <div class="marquee-two__item-wrp">
                                        @foreach ($firstHalf as $counter)
                                            <div class="marquee-two__item text-white text-center">
                                                <h4 class="mb-10 text-white">{{ $counter['title'] }}</h4>
                                                <h4 class="mb-10">
                                                    <span class="count text-white">{{ $counter['value'] }}</span>
                                                </h4>
                                                <h4 class="text-light">{{ $counter['city'] ?? '' }}</h4>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="marquee-two__item-wrp">
                                        @foreach ($secondHalf as $counter)
                                            <div class="marquee-two__item text-white text-center">
                                                <h4 class="mb-10 text-white">{{ $counter['title'] }}</h4>
                                                <h4 class="mb-10 ">
                                                    <span class="count text-white">{{ $counter['value'] }}</span>
                                                </h4>
                                                <h4 class="text-light">{{ $counter['city'] ?? '' }}</h4>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                @endif

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
@endsection

@push('frontend_scripts')
    <script></script>
@endpush
