@extends('layouts.app')
@section('title', 'Events')
@push('styles')
    <style>
        /* Global Typography & Body */
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
            background-color: #f8f9fa;
        }

        h2,
        h5 {
            font-family: 'Poppins', sans-serif;
        }

        /* Banner Section */
        .banner-inner__content h2 {
            font-size: 2.5rem;
            letter-spacing: 0.5px;
            color: #01469b;
        }

        .banner-inner__content div {
            border-radius: 2px;
        }

        /* Event Card */
        .event-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.35s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        /* Event Image */
        .event-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.35s ease;
        }

        .event-card:hover .event-img {
            transform: scale(1.03);
        }

        /* Event Date */
        .event-date {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(1, 70, 155, 0.9);
            color: #fff;
            font-size: 12px;
            font-weight: 500;
            padding: 5px 12px;
            border-radius: 25px;
            letter-spacing: 0.5px;
        }

        /* Event Body */
        .event-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
        }

        .event-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: #01469b;
        }

        .event-desc {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        /* Read More Button */
        .event-linkd {
            display: inline-block;
            text-align: center;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 50px;
            background: linear-gradient(90deg, #0199e4 20%, #012d85 100%);
            color: #fff;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .event-linkd:hover {
            background: linear-gradient(90deg, #012d85 0%, #0199e4 100%);
            transform: translateY(-2px);
            text-decoration: none;
            color: #fff;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .event-img {
                height: 200px;
            }

            .event-title {
                font-size: 1.15rem;
            }
        }

        @media (max-width: 576px) {
            .event-img {
                height: 180px;
            }

            .event-title {
                font-size: 1.05rem;
            }

            .event-body {
                padding: 18px;
            }
        }
    </style>
@endpush

@section('front_content')

    <section class="py-5 text-center" style="margin-top: 60px;">
        <div class="container">
            <div class="banner-inner__content">
                <h2 class="fw-bold text-capitalize mb-3">Events</h2>
                <div class="mx-auto mb-4"
                    style="width: 120px; height: 4px; background: linear-gradient(90deg, #0199e4, #012d85);"></div>
            </div>
        </div>
    </section>

    <div class="container py-5 pt-0">
        <div class="row g-4">
            @forelse($events as $event)
                <div class="col-md-4 col-sm-6">
                    <div class="event-card position-relative h-100 d-flex flex-column">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="event-img">

                        <span class="event-date">{{ \Carbon\Carbon::parse($event->start_date)->format('M d, Y') }}</span>

                        <div class="event-body d-flex flex-column flex-grow-1">
                            <h5 class="event-title">{{ $event->title }}</h5>

                            <p class="event-desc flex-grow-1">
                                {{ Str::limit(strip_tags($event->event_desc), 100, '...') }}
                            </p>

                            <a href="{{ route('event-details', $event->event_slug) }}" class="event-linkd mt-auto">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No events found.</p>
                </div>
            @endforelse
        </div>
    </div>

@endsection

@push('frontend_scripts')
    <script></script>
@endpush
