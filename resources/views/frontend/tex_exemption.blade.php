@extends('layouts.app')
@section('title', 'Text Exemption')
@section('front_content')
    <!-- Banner area start here -->
    @php
        $donation = DB::table('about_pages')->where('is_display', 'tex-exemption')->where('status', '1')->first();
    @endphp
    @if ($donation)

        <section class="py-5 text-center" style="margin-top: 60px;">
            <div class="container">
                <div class="banner-inner__content">
                    <h2 class="fw-bold text-capitalize mb-2">{{ $donation->title ?? '' }}</h2>
                    <div class="mx-auto mb-3" style="width: 500px; height: 3px; background: #01469b;"></div>
                </div>
            </div>
        </section>
        <!-- Donation Policy Content -->
        <section class="py-5">
            <div class="container">
                {!! $donation->description ?? '' !!}
            </div>
        </section>
        {{-- <section class="py-5 content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    {!! $donation->description ?? '' !!}
                </div>
            </div>
        </div>
    </section> --}}

        @php
            $faqs = DB::table('faqs')
                ->where('display', 'tex-exemption')
                ->where('status', '1')
                ->orderBy('id', 'asc')
                ->get();
        @endphp
        @if ($faqs->isnotEmpty())
            <section class="section sofax-section-padding bg-light">
                <div class="container">
                    <div class="sofax-section-title center">
                        <h2>Frequently asked questions!</h2>
                    </div>
                    <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
                        <div class="sofax-accordion-section-wrapper">
                            <div class="sofax-accordion-section-v2">
                                @for ($i = 0; $i < 3 && $i < count($faqs); $i++)
                                    @php $faq = $faqs[$i]; @endphp
                                    <div class="sofax-accordion-item about-us-section">
                                        <div class="sofax-accordion-header">
                                            <h4>{{ $faq->question }}</h4>
                                            <div class="sofax-active-icon sofax-accordion-btn">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="sofax-accordion-body-ww">
                                            <p>{!! nl2br(e($faq->answer)) !!}</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="sofax-accordion-section-v2 mt-24">
                                @for ($i = 3; $i < 6 && $i < count($faqs); $i++)
                                    @php $faq = $faqs[$i]; @endphp
                                    <div class="sofax-accordion-item about-us-section">
                                        <div class="sofax-accordion-header">
                                            <h4>{{ $faq->question }}</h4>
                                            <div class="sofax-active-icon sofax-accordion-btn">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="sofax-accordion-body-ww">
                                            <p>{!! nl2br(e($faq->answer)) !!}</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const headers = document.querySelectorAll('.sofax-accordion-header');

                headers.forEach(function(header) {
                    header.addEventListener('click', function() {
                        const item = this.parentElement;
                        const isOpen = item.classList.contains('open');

                        document.querySelectorAll('.sofax-accordion-item').forEach(function(i) {
                            i.classList.remove('open');
                        });

                        if (!isOpen) {
                            item.classList.add('open');
                        }
                    });
                });
            });
        </script>
        <style>
            .sofax-accordion-body-ww {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
                padding: 0 30px;
            }

            .sofax-accordion-body-ww p {
                color: initial;
                transition: color 0.5s ease;
            }

            .sofax-accordion-item.open .sofax-accordion-body-ww {
                max-height: 1000px;
                padding: 10px 30px 25px;
            }

            .sofax-accordion-item.open .sofax-accordion-body-ww p {
                color: #e5abf3 !important;
            }

            .sofax-accordion-item.open .sofax-active-icon i {
                transform: rotate(180deg);
                transition: transform 0.5s ease;
            }

            .sofax-accordion-item.open .sofax-accordion-header {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }
        </style>
        {{-- <style>

            .sofax-accordion-body-ww {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
                padding: 0 30px;

            }

            .sofax-accordion-item.open .sofax-accordion-body-ww {
                max-height: 1000px;
                padding: 10px 30px 25px;
            }

            .sofax-accordion-item.open .sofax-active-icon i {
                transform: rotate(180deg);
                transition: transform 0.5s ease;
            }

            .sofax-accordion-item.open .sofax-accordion-header {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }
        </style> --}}

    @endif
@endsection
@push('frontend_scripts')
    <script></script>
@endpush
