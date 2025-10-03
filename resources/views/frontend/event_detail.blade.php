@extends('layouts.app')
@section('title', $event->title ?? 'Event Detail')
@section('front_content')
    <div class="container mt-3">
        <div class="row">
            <section class="py-5 text-center mt-5">
                <div class="container">
                    <div class="banner-inner__content">
                        <h2 class="fw-bold text-capitalize mb-3"
                            style="background: linear-gradient(90deg, #0199e4, #012d85);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;">
                            {{ $event->title }}
                        </h2>
                        <div class="mx-auto mb-4"
                            style="width: 120px; height: 4px; background: linear-gradient(90deg, #0199e4, #012d85);">
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-lg-8">
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title ?? 'Event' }}"
                    class="img-fluid rounded mb-5 w-100" style="max-height: 750px; object-fit: cover; ">

                <div class="fs-6 text-dark" style="line-height: 1.8;">
                    {!! $event->event_desc ?? '' !!}
                </div>

            </div>

            <div class="col-lg-4">
                <div class="sofax-inner-blog-sidebar-menu pt-0">
                    <div class="sofax-subscription-field-categories">
                        <h4 class="text-center"
                            style="background: linear-gradient(90deg, #0199e4, #012d85);
                       -webkit-background-clip: text;
                       -webkit-text-fill-color: transparent;">
                            Event Details
                        </h4>


                        <div class="sofax-content-iconbox-wrap mb-2">
                            <div class="sofax-iconbox-icon">
                                <i class="far fa-calendar-alt fa-2x" style="color: #0199e4;"></i>
                            </div>
                            <div class="sofax-iconbox-data">
                                <h4 class="mb-2"
                                    style="background: linear-gradient(90deg, #0199e4, #012d85);
                               -webkit-background-clip: text;
                               -webkit-text-fill-color: transparent;">
                                    Start Date
                                </h4>
                                <p >
                                    {{ \Carbon\Carbon::parse($event->start_date ?? now())->format('l, d M, Y') }}
                                </p>
                            </div>
                        </div>
                        <hr class="mb-4" style="border-color: #0199e4;">

                        <div class="sofax-content-iconbox-wrap mb-2">
                            <div class="sofax-iconbox-icon">
                                <i class="far fa-calendar-alt fa-2x" style="color: #0199e4;"></i>
                            </div>
                            <div class="sofax-iconbox-data">
                                <h4 class="mb-2"
                                    style="background: linear-gradient(90deg, #0199e4, #012d85);
                               -webkit-background-clip: text;
                               -webkit-text-fill-color: transparent;">
                                    End Date
                                </h4>
                                <p>
                                    {{ \Carbon\Carbon::parse($event->end_date ?? now())->format('l, d M, Y') }}
                                </p>
                            </div>
                        </div>
                        <hr class="mb-4" style="border-color: #0199e4;">

                        <div class="sofax-content-iconbox-wrap mb-2">
                            <div class="sofax-iconbox-icon">
                                <i class="fas fa-map-marked-alt fa-2x" style="color: #0199e4;"></i>
                            </div>
                            <div class="sofax-iconbox-data">
                                <h4 class="mb-2"
                                    style="background: linear-gradient(90deg, #0199e4, #012d85);
                               -webkit-background-clip: text;
                               -webkit-text-fill-color: transparent;">
                                    Location
                                </h4>
                                <p >
                                    {{ $event->location ?? 'City Park, Ahmedabad' }}
                                </p>
                            </div>
                        </div>
                        <hr class="mb-4" style="border-color: #0199e4;">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
