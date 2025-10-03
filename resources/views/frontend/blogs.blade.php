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
                {{-- <a href='index.html'>home</a><span>//Blog and News</span> --}}
                <h2>Blog and News </h2>
                <p>We will help a client's problems to develop the products they have with high quality Change
                    the
                    appearance.</p>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Blog area start here -->
    @php
        $blogs = DB::table('blogs')
            ->join('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
            ->where('blog_categories.status', '1')
            ->select('blogs.*', 'blog_categories.category_name', 'blog_categories.category_slug')
            ->orderBy('blogs.created_at', 'desc')
            ->paginate(2);

        $recentPosts = DB::table('blogs')->where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();

        $categories = DB::table('blog_categories')->where('status', '1')->get();
    @endphp

    <section class="sofax-section-padding2 pt-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- @foreach ($blogs as $blog)
                        <div class="sofax-inner-blog-wrap wow fadeInUpX">
                            <div class="sofax-inner-blog-img">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->blog_title }}">
                            </div>
                            <div class="sofax-inner-blog-content">
                                <div class="sofax-inner-blog-meta">
                                    <a href="{{ route('blog-cat-show', $blog->category_slug) }}">
                                        <h5>{{ $blog->category_name }}</h5>
                                        <ul>   
                                            <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="sofax-inner-blog-text">
                                    <a href="{{ route('blog-details', $blog->blog_slug) }}">
                                        <h3>{{ $blog->blog_title }}</h3>
                                    </a>
                                    <p>{{ Str::limit($blog->blog_description, 150) }}</p>
                                </div>
                                <a class="sofax-icon-btn sofax-blog-icon-btn"
                                    href="{{ route('blog-details', $blog->blog_slug) }}">
                                    Learn More <img src="assets/images/v1/arrow-right.png" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach --}}
                    @foreach ($blogs as $blog)
                        @php
                            $categoryIds = explode(',', $blog->category_id);

                            $categoriess = DB::table('blog_categories')
                                ->whereIn('id', $categoryIds)
                                ->get(['category_name', 'category_slug']);
                        @endphp
                        <div class="sofax-inner-blog-wrap wow fadeInUpX">
                            <div class="sofax-inner-blog-img">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->blog_title }}">
                            </div>
                            <div class="sofax-inner-blog-content">
                                <div class="sofax-inner-blog-meta" style="margin-top: 20px">
                                    <h5 class="d-inline">
                                        @foreach ($categoriess as $category)
                                            <a href="{{ route('blog-cat-show', $category->category_slug) }}"
                                                class="d-inline badge bg-dark text-white me-2" style="padding:3%">
                                                {{ $category->category_name }}
                                            </a>
                                            @if (!$loop->last)

                                            @endif
                                        @endforeach
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                                    </h5>
                                </div>

                                <div class="sofax-inner-blog-text mt-3">
                                    <a href="{{ route('blog-details', $blog->blog_slug) }}">
                                        <h3>{{ $blog->blog_title }}</h3>
                                    </a>
                                    <p>{{ Str::limit($blog->blog_description, 150) }}</p>
                                </div>
                                <a class="sofax-icon-btn sofax-blog-icon-btn"
                                    href="{{ route('blog-details', $blog->blog_slug) }}">
                                    Learn More <img src="assets/images/v1/arrow-right.png" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="sofax-navigation">
                        <nav class="navigation pagination" aria-label="Posts">
                            <div class="nav-links">

                                @if ($blogs->onFirstPage())
                                    <span class="page-numbers disabled">
                                        <i class="fa-solid fa-angle-left"></i> </span>
                                @else
                                    <a class="prev page-numbers" href="{{ $blogs->previousPageUrl() }}">
                                        <i class="fa-solid fa-angle-left"></i></a>
                                @endif

                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if ($page == $blogs->currentPage())
                                        <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                                    @else
                                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                                    @endif
                                @endforeach

                                @if ($blogs->hasMorePages())
                                    <a class="next page-numbers" href="{{ $blogs->nextPageUrl() }}">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                @else
                                    <span class="page-numbers disabled">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                @endif

                            </div>
                        </nav>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="sofax-inner-blog-sidebar-menu">
                        <div class="sofax-subscription-field-inner">
                            <input type="email" placeholder="Serach">
                            <div class="search-icon-img">
                                <a href="https://www.google.com/"><img src="assets/images/blog/search-icon.png"
                                        alt=""></a>
                            </div>
                        </div>
                        {{-- <div class="sofax-subscription-field-categories">
                            <h4>Categories:</h4>
                            <ul style="max-height: 200px; overflow-y: auto;">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('blog-cat-show', $category->category_slug) }}">
                                            {{ $category->category_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div> --}}
                        <div class="sofax-subscription-field-categories">
                            <h4>Categories:</h4>
                            <ul>
                                @foreach ($categories as $category)
                                    <li class="text-capitalize text-bold">
                                        <a href="{{ route('blog-cat-show', $category->category_slug) }}">
                                            <strong> {{ $category->category_name }}</strong>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sofax-subscription-field-post">
                            <h4>Recent Posts:</h4>
                            @foreach ($recentPosts as $recent)
                                <a href="{{ route('blog-details', $recent->blog_slug) }}">
                                    <div class="title-post-thumb">
                                        <div class="title-post-img">
                                            <img src="{{ asset('storage/' . $recent->featured_image) }}"
                                                alt="{{ $recent->blog_title }}">
                                        </div>
                                        <div class="title-post-content">
                                            <ul>
                                                {{-- <li>{{ $recent->created_at->format('d M, Y') }}</li> --}}
                                                <li>{{ \Carbon\Carbon::parse($recent->created_at)->format('d M, Y') }}</li>
                                            </ul>
                                            <h6>{{ Str::limit($recent->blog_title, 50) }}</h6>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>


                        <div class="sofax-subscription-field-blog-inner-footer light-color d-none       ">
                            <h4>Subscribe to our newsletter</h4>
                            <div class="sofax-subscription-field-inner-button">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email address">
                                    <button class="sofax-subcribe-btn2 subscription-btn-hover">Subscribe now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    {{-- @php
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
    @endif --}}

    <!-- Book area end here -->
@endsection

@push('frontend_scripts')
    <script></script>
@endpush
