@extends('layouts.app')
@section('title', 'News & Updates')
@push('styles')
    <style>

    </style>
@endpush
@section('front_content')

    <!-- Banner area start here -->
    <section class="banner-inner-area">
        <div class="container">
            <div class="banner-inner__content">
                <a href='index.html'>home</a><span>//Blog and News</span>
                <h2>Blog and News 1</h2>
                <p>We will help a client's problems to develop the products they have with high quality Change
                    the
                    appearance.</p>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Blog area start here -->
    <section class="blog-area pb-120">
        <div class="container">
            <div class="section-header-flex mb-80">
                <h2 class="fw-300">Our Latest Blog and News</h2>
                <div>
                    <p>Delve into real-world examples where our Technology <br> Solutions, Consulting and
                        Strategy,
                    </p>
                </div>
            </div>
            {{-- @php
                $blogs = DB::table('blogs')->get();
            @endphp
            <div class="row g-4">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="blog__item">
                            <div class="blog__image image">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="image">
                                <div class="tag">
                                    <a href='{{ route('service-details') }}'>Technology</a>
                                </div>
                            </div>
                            <h4 class="mt-10 mb-20">
                                <a class='primary-hover' href="{{ route('blog-details', $blog->id) }}">
                                    {{ $blog->blog_title }}
                                </a>
                            </h4>
                            <a class='fs-18 blog-btn text-font' href='{{ route('blog-details', $blog->id) }}'>
                                Read More <i class="fa-light ms-1 fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            @php
                $blogs = DB::table('blogs')->get();
            @endphp
            <div class="row g-4">
                @foreach ($blogs as $blog)
                    @php

                        $categoryIds = explode(',', $blog->category_id);
                        $categories = DB::table('blog_categories')->whereIn('id', $categoryIds)->pluck('category_name');

                    @endphp

                    <div class="col-lg-4">
                        <div class="blog__item">
                            <div class="blog__image image" style="position: relative;">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="image"
                                    style="height: 400px;">

                                <div class="tag"
                                    style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                    @foreach ($categories as $cat)
                                        <a href="#" style=padding: 3px 8px; border-radius: 5px; font-size: 13px;
                                            text-decoration: none;>
                                            {{ $cat }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            <h4 class="mt-10 mb-20">
                                <a class='primary-hover' href="{{ route('blog-details', $blog->blog_slug) }}">
                                    {{ $blog->blog_title }}
                                </a>
                            </h4>
                            <a class='fs-18 blog-btn text-font' href='{{ route('blog-details', $blog->blog_slug) }}'>
                                Read More <i class="fa-light ms-1 fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- <section class="blog-area pb-120">
        <div class="container">
            <div class="section-header-flex mb-80">
                <h2 class="fw-300">Our Latest Blog and News</h2>
                <div>
                    <p>Delve into real-world examples where our Technology <br> Solutions, Consulting and
                        Strategy,
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image1.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Technology</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>The One Part
                                of
                                the Vision
                                Pro
                                That Apple Doesn’t Want You to See</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image2.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Technology</a>
                                <a href='{{ route('service-details') }}'>Product</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>Intel’s CEO
                                Says
                                AI Is the Key to the Company’s Comeback</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image3.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Security</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>Polar ID Is
                                the
                                Face ID Rival for Android Phones.</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image4.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Brainstroming</a>
                                <a href='{{ route('service-details') }}'>Ideation</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>The One Part
                                of
                                the Vision Pro That Apple Doesn’t Want You to See</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image5.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Ranking</a>
                                <a href='{{ route('service-details') }}'>SEO</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>Intel’s CEO
                                Says
                                AI Is the Key to the Company’s Comeback</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image6.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Team work</a>
                                <a href='{{ route('service-details') }}'>Startup</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>Polar ID Is
                                the
                                Face ID Rival for Android Phones.</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image7.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Technology</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>The One Part
                                of
                                the Vision
                                Pro
                                That Apple Doesn’t Want You to See</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image8.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Robotics</a>
                                <a href='{{ route('service-details') }}'>Product</a>
                                <a href='{{ route('service-details') }}'>Ai</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>Intel’s CEO
                                Says
                                AI Is the Key to the Company’s Comeback</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <div class="blog__image image">
                            <img src="assets/images/blog/blog-image9.png" alt="image">
                            <div class="tag">
                                <a href='{{ route('service-details') }}'>Development</a>
                                <a href='{{ route('service-details') }}'>Coding</a>
                            </div>
                        </div>
                        <h4 class="mt-10 mb-20"><a class='primary-hover' href='{{ route('blog-details') }}'>Polar ID Is
                                the
                                Face ID Rival for Android Phones.</a></h4>
                        <a class='fs-18 blog-btn text-font' href='{{ route('blog-details') }}'>Read More <i
                                class="fa-light ms-1 fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
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

    <!-- Book area end here -->
@endsection

@push('frontend_scripts')
    <script></script>
@endpush
