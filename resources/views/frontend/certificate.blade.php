@extends('layouts.app')
@section('title', 'Certificates')

@section('front_content')
    <div class="container py-4">
        <section class="py-5 text-center" style="margin-top: 60px;">
            <div class="container">
                <div class="banner-inner__content">
                    <h2 class="fw-bold text-capitalize mb-3">Certificates</h2>
                    <div class="mx-auto mb-4 rounded"
                        style="width: 120px; height: 4px; background: linear-gradient(90deg, #0199e4, #012d85);">
                    </div>
                </div>
            </div>
        </section>

        <div class="row d-none">
            @forelse($certificates as $certificate)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-2 rounded-6"
                        style="border: 2px solid transparent; border-image: linear-gradient(90deg, #0199e4, #012d85) 1;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold text-dark">{{ $certificate->title }}</h5>
                            <p class="card-text text-muted small mb-3">
                                {{ $certificate->sort_desc }}
                            </p>
                            <div class="mt-auto">
                                <a href="{{ asset('uploads/certificates/' . $certificate->file) }}" target="_blank"
                                    class="btn btn-sm btn-primary">
                                    View Certificate
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        No certificates available.
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row">
            @forelse($certificates as $certificate)
                <div class="col-md-4 mb-4">
                    <div class="sofax-career-content-wrapper wow fadeInUpX border rounded p-3 h-100 d-flex flex-column justify-content-between"
                        data-wow-delay="0.1s" style="min-height: 250px;">

                        <div class="sofax-career-content-autohre-wrap">
                            <div class="sofax-career-content-data mt-3">
                                <h4 class="text-break">{{ $certificate->title }}</h4>
                            </div>

                            <div class="sofax-career-content-icon mt-2">
                                <a href="{{ asset('uploads/certificates/' . $certificate->file) }}" target="_blank"
                                    class=" d-flex align-items-center gap-1">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.42855 1.60733C3.48356 0.978554 4.03788 0.513422 4.66666 0.568433L14.3272 1.41362C14.956 1.46863 15.4211 2.02296 15.3661 2.65174L14.5209 12.3123C14.4659 12.9411 13.9116 13.4062 13.2828 13.3512C12.654 13.2962 12.1889 12.7419 12.2439 12.1131L12.8486 5.20113L2.70552 13.7122C2.22201 14.1179 1.50114 14.0549 1.09543 13.5713C0.68971 13.0878 0.752778 12.367 1.23629 11.9613L11.3794 3.45017L4.46745 2.84545C3.83867 2.79044 3.37354 2.23612 3.42855 1.60733Z"
                                            fill="white" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                        <div class="sofax-career-content-text">
                            <p>{{ $certificate->sort_desc }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        No certificates available.
                    </div>
                </div>
            @endforelse
        </div>


        @php
            $faqs = DB::table('faqs')
                ->where('display', 'certificates')
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
    </div>
@endsection
