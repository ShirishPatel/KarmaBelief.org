@extends('layouts.app')
@section('title', 'Case Study')
@push('styles')
    <style>

    </style>
@endpush
@section('front_content')

    <!-- Banner area start here -->
    <section class="banner-inner-area">
        <div class="container">
            <div class="banner-inner__content">
                <a href='index.html'>home</a><span>/Case Study</span>
                <h2>Case Study</h2>
                <p>We will help a client's problems to develop the products they have with high quality Change
                    the
                    appearance.</p>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Service area start here -->
    @php
        $categories = DB::table('case_study_categories')->where('status', '1')->get();
    @endphp
    @isset($categories)
        <!-- Service area start here -->
        <section class="service-four-area sofax-section-padding">
            <div class="container">
                <div class="section-header-four mb-40 text-center">
                    <h5 class="wow splt-txt" data-splitting><span class="title-dot"></span>Services and Portfolio
                    </h5>
                    <h2 class="wow splt-txt" data-splitting>
                        Our Services and Works
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Experience the
                        transformation as we elevate your brand’s <br> online presence, making it
                        unforgettable.</p>
                </div>
                <div class="service-four__accordion accordion-four">
                    <div class="accordion" id="accordionExample4">
                        @foreach ($categories as $key => $category)
                            @php
                                $projects = DB::table('projects')
                                    ->where('category_id', $category->id)
                                    ->where('status', '1')
                                    ->get();
                            @endphp
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
                                                @foreach ($projects as $project)
                                                    <div class="swiper-slide">
                                                        <div class="service-four__item">
                                                            <div class="service-four__image mb-20">
                                                                <img class="w-100"
                                                                    src="{{ asset('storage/' . $project->image) }}"
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
                                                                        <a
                                                                            href="{{ route('case_study_detail', $project->slug) }}">
                                                                            {{ $project->heading }}
                                                                        </a>
                                                                    </h3>
                                                                    <p class="fs-16">{{ $project->short_description }}</p>
                                                                </div>
                                                                <a class='btn-four'
                                                                    href='{{ route('case_study_detail', $project->slug) }}'>
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


        <!-- Service area end here -->
    @endisset
    <!-- Service area end here -->


    <!-- Testimonial area start here -->
    @php
        $awardTestimonial = DB::table('award_testimonials')->first();
        $testimonialPoster = DB::table('testimonials_poster')->first();
        $counters = json_decode($awardTestimonial->counter ?? '[]', true);
        $images = explode(',', $awardTestimonial->image ?? '');
        $testimonials = DB::table('testimonials')->where('status', '1')->get();
    @endphp

    <section class="testimonial-four-area pt-120 pb-120">
        <div class="container">

            <div class="d-flex flex-wrap mb-80 justify-content-between align-items-end gap-3">
                <div class="section-header-four">
                    <h5 class="wow splt-txt" data-splitting>
                        <span class="title-dot"></span>{{ $awardTestimonial->tag_line }}
                    </h5>
                    <h2 class="wow splt-txt" data-splitting>{{ $awardTestimonial->heading }}</h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    {!! nl2br(e($awardTestimonial->description)) !!}
                </p>
            </div>
            <div class="testimonial-four__info mb-60">
                <div class="testi-conter-wrp">
                    @foreach ($counters as $counter)
                        <div class="testi-conter">
                            <h3>
                                <span class="count">{{ explode('+', $counter['value'])[0] }}</span>+
                            </h3>
                            <span class="fs-18">{{ $counter['title'] }}</span>
                        </div>
                        @if (!$loop->last)
                            <div class="line"></div>
                        @endif
                    @endforeach
                </div>

                @if (!empty($images))
                    <div class="testi-brand d-flex gap-4">
                        @foreach ($images as $image)
                            <img src="{{ asset('storage/' . trim($image)) }}" alt="testimonial-brand">
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-four__card">
                        <div class="mt-120">
                            <h2 class="text-white">{{ $testimonialPoster->poster_title }}</h2>
                            <div class="star d-flex justify-content-center mt-15 align-items-center gap-1">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <div>
                            <a href="{{ $testimonialPoster->btn_link }}" class="btn-four">
                                {{ $testimonialPoster->btn_label }}
                                <span>
                                    <i class="fa-regular fa-arrow-right arry1"></i>
                                    <i class="fa-regular fa-arrow-right arry2"></i>
                                </span>
                            </a>
                        </div>
                        <span class="fs-18 text-white">10+ reviews</span>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="swiper testimonial-four__slider">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $item)
                                <div class="swiper-slide">
                                    <div class="testimonial-four__item">
                                        <div class="star d-flex align-items-center gap-1 mb-60">
                                            {{-- @for ($i = 0; $i < 5; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor --}}
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span class="ms-1 fw-500 fs-18 secondary-color">5.0</span>
                                        </div>
                                        <img class="mb-20" src="{{ asset('storage/' . $item->avtar) }}" alt="image"
                                            style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">

                                        <p>“{{ $item->description }}”</p>
                                        <h5 class="mt-25">{{ $item->name }}</h5>
                                        <span>{{ $item->position }}, {{ $item->company_name }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-40">
                <div class="team-four__swiper-scrollbar">
                    <div class="position-relative">
                        <div class="testimonial-four__scrollbar"></div>
                    </div>
                </div>
                <div class="pb-15"></div>
                <div class="swiper-four__info">
                    <button class="testimonial-four__arry-prev active disable">
                        <i class="fa-regular fa-arrow-left"></i>
                    </button>
                    <button class="testimonial-four__arry-next active">
                        <i class="fa-regular fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial area end here -->

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
