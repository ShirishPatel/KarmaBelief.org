@extends('layouts.app')
@section('title', $record->heading ?? 'Untitled')
@section('front_content')
    <div style="background: linear-gradient(to bottom, #93f4f9, transparent); padding-top: 100px; padding-bottom: 40px;">
        <div class="sofax-breadcrumb text-center">
            <div class="container">
                <h1 class="post__title">{{ $record->heading }}</h1>
            </div>
        </div>
    </div>
    <section class="sofax-section-padding pt-0">
        <div class="container">
            <div class="sofax-default-content portfolio-details-content">
                <h2></h2>
            </div>
            <div class="portfolio-details-thumb wow fadeInUpX">
                <img src="{{ asset('storage/' . $record->image) }}" alt="{{ $record->heading }}">
            </div>
            <div class="portfolio-details-content3">
                {!! $record->description !!}
            </div>
        </div>
    </section>
    <!-- end section -->
    @isset($relateds)
        <section class="sofax-section-padding bg-light">
            <div class="container">
                <div class="sofax-section-title center max-width-large">
                    <h2>Related Project</h2>
                </div>
                <div class="row">
                    @foreach ($relateds as $related)
                        @php
                            $category = DB::table('case_study_categories')->where('id', $related->category_id)->first();
                        @endphp
                        <div class="col-lg-6">
                            <div class="sofax-portfolio-content-wrap wow fadeInUpX" data-wow-delay="0.1s">
                                <div class="sofax-portfolio-thumb">
                                    <a href="{{ route('case_study_detail', $related->slug) }}">
                                        <img src="{{ asset('storage/' . $related->image) }}" alt="">
                                    </a>
                                </div>
                                <a href="{{ route('case_study_detail', $related->slug) }}">
                                    <div class="sofax-portfolio-author-wrap">
                                        <div class="sofax-portfolio-author-data">
                                            <h4>{{ $related->heading }}</h4>
                                            <p>{{ $category->name }}</p>
                                        </div>
                                        <div class="sofax-portfolio-author-icon">
                                            <img src="{{ asset('assets/images/v5/icon5.png') }}" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endisset
    <!-- end section -->
    <section class="sofax-service-slider d-none">
        <div class="sofax-slider-service-section">
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Digital Marketing Agency</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Start Up Business</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Social Media Markating</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Social Media Markating</h2>
                </div>
            </div>
        </div>
    </section>

@endsection
