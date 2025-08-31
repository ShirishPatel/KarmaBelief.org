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
                <a href='index.html'>home</a><span>/News & Updates</span>
                <h2>News & Updates</h2>
                <p>We will help a client's problems to develop the products they have with high quality Change
                    the
                    appearance.</p>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Blog details area start here -->
    <section class="blog-details-area pb-120">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="blog-details__item-left">
                        <div class="blog-details__item">
                            <div class="image">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="image">
                            </div>
                            <div class="info">
                                <ul>
                                    <li>
                                        <svg class="me1" width="14" height="18" viewBox="0 0 14 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.00883 7.95833C5.0555 7.95833 3.46716 6.36917 3.46716 4.41667C3.46716 2.46417 5.0555 0.875 7.00883 0.875C8.96216 0.875 10.5505 2.46417 10.5505 4.41667C10.5505 6.36917 8.96216 7.95833 7.00883 7.95833ZM7.00883 2.125C5.74466 2.125 4.71716 3.1525 4.71716 4.41667C4.71716 5.68083 5.74466 6.70833 7.00883 6.70833C8.273 6.70833 9.3005 5.68083 9.3005 4.41667C9.3005 3.1525 8.27216 2.125 7.00883 2.125ZM10.3321 17.125H3.67051C1.65385 17.125 0.542969 16.0209 0.542969 14.0159C0.542969 11.7984 1.79797 9.20833 5.33464 9.20833H8.66797C12.2046 9.20833 13.4596 11.7975 13.4596 14.0159C13.4596 16.0209 12.3488 17.125 10.3321 17.125ZM5.33464 10.4583C2.0488 10.4583 1.79297 13.1809 1.79297 14.0159C1.79297 15.3192 2.35468 15.875 3.67051 15.875H10.3321C11.6479 15.875 12.2096 15.3192 12.2096 14.0159C12.2096 13.1817 11.9538 10.4583 8.66797 10.4583H5.33464Z"
                                                fill="#16523E" />
                                        </svg>
                                        <a href="#0">John Smith</a>
                                    </li>
                                    <li>
                                        <svg class="me1" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.6721 8.86635L9.33877 3.52715C8.81877 3.00632 8.09879 2.70801 7.36296 2.70801H3.11298C1.97131 2.70801 1.04297 3.63719 1.04297 4.77969V9.03384C1.04297 9.77968 1.33377 10.4822 1.86043 11.0105L7.1946 16.3497C7.81877 16.9747 8.48293 17.2913 9.1696 17.2913C9.85543 17.2913 10.5204 16.9747 11.1438 16.3497L14.6713 12.8188C15.9455 11.5447 15.9455 10.1405 14.6721 8.86635ZM13.7888 11.9355L10.2613 15.4663C9.49631 16.2305 8.84128 16.2288 8.07961 15.4663L2.74626 10.1272C2.45376 9.83469 2.29378 9.44634 2.29378 9.03384V4.77969C2.29378 4.32636 2.66129 3.95801 3.11379 3.95801H7.36377C7.77044 3.95801 8.16799 4.12303 8.45549 4.41053L13.7888 9.74968C14.5738 10.5364 14.5738 11.1488 13.7888 11.9355ZM18.9596 10.8488C18.9588 11.5255 18.6355 12.188 18.0005 12.8188L14.4771 16.3497C13.8638 16.9738 13.198 17.2913 12.5013 17.2913C12.1563 17.2913 11.8763 17.0113 11.8763 16.6663C11.8763 16.3213 12.1563 16.0413 12.5013 16.0413C12.8505 16.0413 13.2155 15.8489 13.5888 15.4697L17.1171 11.933C17.5104 11.543 17.7088 11.178 17.7096 10.8463C17.7105 10.5122 17.5113 10.143 17.118 9.74968L11.7846 4.40799C11.5263 4.14549 11.1797 3.98965 10.803 3.96548C10.458 3.94298 10.1963 3.64549 10.2196 3.30132C10.2413 2.95632 10.5696 2.69969 10.883 2.71803C11.5688 2.76219 12.2047 3.05053 12.673 3.52969L18.0021 8.86717C18.6388 9.503 18.9613 10.1705 18.9596 10.8488ZM5.41797 6.24967C5.41797 6.70967 5.04626 7.08301 4.58626 7.08301C4.12793 7.08301 3.7513 6.70967 3.7513 6.24967C3.7513 5.78967 4.11967 5.41634 4.57884 5.41634H4.58718C5.04635 5.41634 5.41797 5.78967 5.41797 6.24967Z"
                                                fill="#16523E" />
                                        </svg>
                                        <a href="#0">John Smith</a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 3.125H13.9583V2.5C13.9583 2.155 13.6783 1.875 13.3333 1.875C12.9883 1.875 12.7083 2.155 12.7083 2.5V3.125H7.29167V2.5C7.29167 2.155 7.01167 1.875 6.66667 1.875C6.32167 1.875 6.04167 2.155 6.04167 2.5V3.125H5C2.985 3.125 1.875 4.235 1.875 6.25V15C1.875 17.015 2.985 18.125 5 18.125H15C17.015 18.125 18.125 17.015 18.125 15V6.25C18.125 4.235 17.015 3.125 15 3.125ZM5 4.375H6.04167V5C6.04167 5.345 6.32167 5.625 6.66667 5.625C7.01167 5.625 7.29167 5.345 7.29167 5V4.375H12.7083V5C12.7083 5.345 12.9883 5.625 13.3333 5.625C13.6783 5.625 13.9583 5.345 13.9583 5V4.375H15C16.3142 4.375 16.875 4.93583 16.875 6.25V6.875H3.125V6.25C3.125 4.93583 3.68583 4.375 5 4.375ZM15 16.875H5C3.68583 16.875 3.125 16.3142 3.125 15V8.125H16.875V15C16.875 16.3142 16.3142 16.875 15 16.875ZM7.51668 10.8333C7.51668 11.2933 7.14418 11.6667 6.68335 11.6667C6.22335 11.6667 5.84574 11.2933 5.84574 10.8333C5.84574 10.3733 6.21501 10 6.67501 10H6.68335C7.14335 10 7.51668 10.3733 7.51668 10.8333ZM10.85 10.8333C10.85 11.2933 10.4775 11.6667 10.0167 11.6667C9.55668 11.6667 9.17908 11.2933 9.17908 10.8333C9.17908 10.3733 9.54834 10 10.0083 10H10.0167C10.4767 10 10.85 10.3733 10.85 10.8333ZM14.1833 10.8333C14.1833 11.2933 13.8108 11.6667 13.35 11.6667C12.89 11.6667 12.5124 11.2933 12.5124 10.8333C12.5124 10.3733 12.8817 10 13.3417 10H13.35C13.81 10 14.1833 10.3733 14.1833 10.8333ZM7.51668 14.1667C7.51668 14.6267 7.14418 15 6.68335 15C6.22335 15 5.84574 14.6267 5.84574 14.1667C5.84574 13.7067 6.21501 13.3333 6.67501 13.3333H6.68335C7.14335 13.3333 7.51668 13.7067 7.51668 14.1667ZM10.85 14.1667C10.85 14.6267 10.4775 15 10.0167 15C9.55668 15 9.17908 14.6267 9.17908 14.1667C9.17908 13.7067 9.54834 13.3333 10.0083 13.3333H10.0167C10.4767 13.3333 10.85 13.7067 10.85 14.1667ZM14.1833 14.1667C14.1833 14.6267 13.8108 15 13.35 15C12.89 15 12.5124 14.6267 12.5124 14.1667C12.5124 13.7067 12.8817 13.3333 13.3417 13.3333H13.35C13.81 13.3333 14.1833 13.7067 14.1833 14.1667Z"
                                                fill="#16523E" />
                                        </svg>
                                        <a href="#0">{{ date('d-m-Y', strtotime($blog->created_at)) }}</a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.21493 18.1247C3.09409 18.1247 2.97673 18.123 2.86173 18.1189C2.44507 18.1089 2.07996 17.8422 1.93746 17.4397C1.79413 17.0347 1.91255 16.5939 2.23755 16.3172C3.01422 15.6906 3.32491 14.9972 3.44991 14.5214C2.41908 13.2889 1.875 11.733 1.875 10.0005C1.875 5.70632 5.21667 2.70801 10 2.70801C14.7833 2.70801 18.125 5.70716 18.125 10.0005C18.125 14.2938 14.7833 17.293 10 17.293C9.01083 17.293 8.06246 17.1588 7.17163 16.8938C6.0358 17.883 4.47076 18.1247 3.21493 18.1247ZM2.89917 16.8689C2.90084 16.8689 2.90239 16.8689 2.90405 16.8689C2.90155 16.8697 2.9 16.8697 2.89917 16.8689ZM10.0008 3.95801C5.95331 3.95801 3.12581 6.44299 3.12581 10.0005C3.12581 11.5305 3.62996 12.8855 4.58496 13.9188C4.71413 14.0588 4.77325 14.2505 4.74325 14.4397C4.60325 15.3322 4.1634 16.1764 3.48673 16.8689C4.4534 16.8339 5.75334 16.6114 6.55334 15.758C6.72084 15.578 6.98084 15.5138 7.21334 15.5947C8.07584 15.893 9.01331 16.0439 10.0008 16.0439C14.0483 16.0439 16.8758 13.5588 16.8758 10.0013C16.8758 6.4438 14.0483 3.95801 10.0008 3.95801ZM10.8508 9.99967C10.8508 9.53967 10.4783 9.16634 10.0175 9.16634H10.0092C9.54916 9.16634 9.17989 9.53967 9.17989 9.99967C9.17989 10.4597 9.5575 10.833 10.0175 10.833C10.4775 10.833 10.8508 10.4597 10.8508 9.99967ZM14.1842 9.99967C14.1842 9.53967 13.8117 9.16634 13.3508 9.16634H13.3425C12.8825 9.16634 12.5132 9.53967 12.5132 9.99967C12.5132 10.4597 12.8908 10.833 13.3508 10.833C13.8108 10.833 14.1842 10.4597 14.1842 9.99967ZM7.5175 9.99967C7.5175 9.53967 7.145 9.16634 6.68416 9.16634H6.67582C6.21582 9.16634 5.84656 9.53967 5.84656 9.99967C5.84656 10.4597 6.22416 10.833 6.68416 10.833C7.14416 10.833 7.5175 10.4597 7.5175 9.99967Z"
                                                fill="#16523E" />
                                        </svg>
                                        <a href="#0">No Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-details">
                                <h2>{{ $blog->blog_title }}</h2>
                                <div class="blog-content">
                                    {!! $blog->blog_description !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="blog-details__item-right">
                        <div class="item mb-40">
                            <div class="search">
                                <input type="text" placeholder="Search">
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.53 20.47L17.689 16.629C18.973 15.106 19.75 13.143 19.75 11C19.75 6.175 15.825 2.25 11 2.25C6.175 2.25 2.25 6.175 2.25 11C2.25 15.825 6.175 19.75 11 19.75C13.143 19.75 15.106 18.973 16.629 17.689L20.47 21.53C20.616 21.676 20.808 21.75 21 21.75C21.192 21.75 21.384 21.677 21.53 21.53C21.823 21.238 21.823 20.763 21.53 20.47ZM3.75 11C3.75 7.002 7.002 3.75 11 3.75C14.998 3.75 18.25 7.002 18.25 11C18.25 14.998 14.998 18.25 11 18.25C7.002 18.25 3.75 14.998 3.75 11Z"
                                            fill="#0C2216" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="item mb-40">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li class="mb-20">
                                    <a class='fs-18 fw-500 primary-hover' href='blog-details.html'>Why Is Blog
                                        SEO
                                        Important?</a>
                                    <span>January 05, 2024</span>
                                </li>
                                <li class="mb-20">
                                    <a class='fs-18 fw-500 primary-hover' href='blog-details.html'>Write for
                                        humans,
                                        not search engines</a>
                                    <span>January 02, 2024</span>
                                </li>
                                <li>
                                    <a class='fs-18 fw-500 primary-hover' href='blog-details.html'>The Basics of
                                        SEO
                                        Content Writing</a>
                                    <span>December 27, 2023</span>
                                </li>
                            </ul>
                        </div>
                        <div class="item category mb-40">
                            <h4>Category</h4>
                            <ul>
                                <li class="mb-25">
                                    <a class='fs-18 primary-hover' href='blog.html'><span>All</span><span>(61)</span></a>
                                </li>
                                <li class="mb-25">
                                    <a class='fs-18 primary-hover' href='blog.html'><span>Web
                                            Development</span><span>(16)</span></a>
                                </li>
                                <li class="mb-25">
                                    <a class='fs-18 primary-hover' href='blog.html'><span>Search Engine
                                            Optimization</span><span>(22)</span></a>
                                </li>
                                <li class="mb-25">
                                    <a class='fs-18 primary-hover' href='blog.html'><span>Web
                                            Design</span><span>(14)</span></a>
                                </li>
                                <li>
                                    <a class='fs-18 primary-hover' href='blog.html'><span>Keyword
                                            Research</span><span>(09)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="item mb-40">
                            <h4>Tags</h4>
                            <div class="tags">
                                @foreach ($categories as $cat)
                                    <a href="#0">{{ $cat }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="item newsletter">
                            <h4>Newsletter</h4>
                            <input type="text" placeholder="Enter your email">
                            <button>Subscribe<i class="fa-regular fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog details area end here -->

    <!-- Blog area start here -->
    @php
        $blogs = DB::table('blogs')->where('status', '1')->latest()->take(3)->get();
    @endphp

    <section class="blog-area pb-120">
        <div class="container pt-120 bor-top">
            <div class="section-header-flex mb-60">
                <h2 class="fw-300">More Blog and News</h2>
            </div>

            <div class="row g-4">
                @foreach ($blogs as $blog)
                    @php
                        $categoryIds = explode(',', $blog->category_id);
                        $categories = DB::table('blog_categories')->whereIn('id', $categoryIds)->pluck('category_name');
                    @endphp

                    <div class="col-xl-4 col-md-6">
                        <div class="blog__item">
                            <div class="blog__image image" style="position: relative;">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Blog Image"
                                    style="height: 400px;">
                                <div class="tag"
                                    style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                    @foreach ($categories as $cat)
                                        <a href="#"
                                            style="padding: 3px 8px; background: #fff; border-radius: 5px; font-size: 13px; text-decoration: none;">
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
