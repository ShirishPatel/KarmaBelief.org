@extends('layouts.app')
@section('title', $records->terms_title)
@push('styles')
    <style>

    </style>
@endpush
@section('front_content')

    <!-- Banner area start here -->
    <section class="banner-inner-area">
        <div class="container">
            <div class="banner-inner__content">
                <a href='index.html'>home</a><span>/Services</span>
                <h2>Services</h2>
                <p>We will help a client's problems to develop the products they have with high quality Change
                    the
                    appearance.</p>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <section class="service-two-area pb-120">
        <div class="container">
            {!! $records->description !!}
        </div>
    </section>
   
@endsection

@push('frontend_scripts')
    <script>

    </script>
@endpush