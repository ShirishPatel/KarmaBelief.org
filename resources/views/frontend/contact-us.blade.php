    @extends('layouts.app')
    @section('title', 'Contact Us')
    @push('styles')
        <style>

        </style>
    @endpush
    @section('front_content')
        <!-- Banner area start here -->
        <section class="banner-inner-area">
            <div class="container">
                <div class="banner-inner__content">
                    <a href='index.html'>home</a><span>/Contact Us</span>
                    <h2>Contact Us</h2>
                    <p>We will help a client's problems to develop the products they have with high quality Change
                        the
                        appearance.</p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Contact area start here -->
        @php
            $config = DB::table('configurations')->first();
        @endphp

        <section class="contact-area pb-120 ">
            <div class="contact__shape1">
                <img src="assets/images/shape/contact-dots.png" alt="shape">
            </div>
            <div class="contact__shape2">
                <img src="assets/images/shape/contact-roket.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-lg-4">
                        <div class="contact__item-left">
                            <div class="section-header mb-60">
                                <h2 class="fw-300">We’d Love to Hear From You!</h2>
                                <p>{{ $config->site_description }}</p>
                            </div>

                            <div class="contact__content">
                                <div class="mb-30">
                                    <h5>Organization Name</h5>
                                    <p>{{ $config->site_name }}</p>
                                </div>

                                <div class="mb-30">
                                    <h5>Email Address</h5>
                                    <p>{{ $config->email ?? '' }}</p>
                                </div>

                                <div class="mb-30">
                                    <h5>Phone Number</h5>
                                    <p>{{ $config->phone }}</p>
                                </div>

                                <div class="mb-30">
                                    <h5>Address</h5>
                                    <p>{{ $config->address }}</p>
                                </div>

                                <div class="mb-30">
                                    <h5>Follow Us</h5>
                                    <p>
                                        @if ($config->social_facebook)
                                            <a href="{{ $config->social_facebook }}" target="_blank">Facebook</a><br>
                                        @endif
                                        @if ($config->social_instagram)
                                            <a href="{{ $config->social_instagram }}" target="_blank">Instagram</a><br>
                                        @endif
                                        @if ($config->social_twitter)
                                            <a href="{{ $config->social_twitter }}" target="_blank">Twitter</a><br>
                                        @endif
                                        @if ($config->social_linkedin)
                                            <a href="{{ $config->social_linkedin }}" target="_blank">LinkedIn</a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact__item-right ">
                            <div class="contact__item">
                                <h3>Contact Us</h3>
                                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="name">Full Name</label>
                                    <input id="name" name="name" type="text" placeholder="Enter your name here">
                                    <div class="form-text text-danger">{{ $errors->first('name') }}</div>

                                    <div class="row g-4">
                                        <div class="col-6">
                                            <label for="email">Email Address</label>
                                            <input id="email" name="email" type="text"
                                                placeholder="Enter your email address">
                                            <div class="form-text text-danger">{{ $errors->first('email') }}</div>
                                        </div>
                                        <div class="col-6">
                                            <label for="number">Phone Number</label>
                                            <input id="number" name="phone" type="text"
                                                placeholder="Enter your phone number">
                                            <div class="form-text text-danger">{{ $errors->first('phone') }}</div>
                                        </div>
                                    </div>

                                    <label for="subject_name">Subject</label>
                                    <input id="subject_name" name="subject_name" type="text"
                                        placeholder="Enter your Subject here">
                                    <div class="form-text text-danger">{{ $errors->first('subject_name') }}</div>

                                    <label for="massage">Message</label>
                                    <textarea name="massage" id="massage" placeholder="Enter your message here"></textarea>
                                    <div class="form-text text-danger">{{ $errors->first('massage') }}</div>

                                    <button type="submit" class="btn-three mt-50">Send us Message <i
                                            class="fa-regular fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact area end here -->
    @endsection

    @push('frontend_scripts')
        <script></script>
    @endpush
