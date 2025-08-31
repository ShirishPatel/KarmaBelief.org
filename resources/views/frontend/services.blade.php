@extends('layouts.app')
@section('title', 'Services')
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

    <!-- Service area start here -->
    <section class="service-two-area pb-120">
        <div class="container">
            <div class="section-header text-center mb-80">
                <h2 class="fw-300">Grow Your Business with Our <br> Exceptional Services</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="service-two__item bg1">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon1.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Social Media Marketing</h3>
                            <p class="mb-20">Leverage the power of social media platforms to connect with your
                                audience
                                and drive
                                engagement.</p>
                            <a class="explore-btn" href="#0">Explore more <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-two__item bg2">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon2.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Email Marketing Services</h3>
                            <p class="mb-20">Nurture leads and build customer loyalty through personalized and
                                effective email campaigns.</p>
                            <a class="explore-btn" href="#0">Explore more <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-two__item bg3">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon3.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Social Media Marketing</h3>
                            <p class="mb-20">Leverage the power of social media platforms to connect with your
                                audience and drive engagement.</p>
                            <a class="explore-btn" href="#0">Explore more <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-two__item bg4">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon4.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Search Engine Optimization (SEO)</h3>
                            <p class="mb-20">Boost your website's visibility and organic traffic with our
                                comprehensive SEO strategies.</p>
                            <a class="explore-btn" href="#0">Explore more <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-two__item bg5">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon5.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Pay-Per-Click (PPC) Advertising</h3>
                            <p class="mb-20">Drive instant traffic to your website with targeted PPC campaigns
                                and
                                maximize your ROI.</p>
                            <a class="explore-btn" href="#0">Explore more <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-two__item bg6">
                        <div class="icon">
                            <img src="assets/images/icon/service-icon6.png" alt="icon">
                        </div>
                        <div class="service-two__content">
                            <h3 class="mb-10">Analytics and Data Insights</h3>
                            <p class="mb-20">Harness the power of data to make informed decisions and
                                continually
                                optimize your digital marketing efforts.</p>
                            <a class="explore-btn" href="#0">Explore more <i class="fa-light ms-1 fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end here -->

    <!-- Pricing area start here -->
    <section class="pricing-two-area gray__bg pt-120 pb-120">
        <div class="container">
            <div class="d-flex align-items-end gap-5 flex-wrap justify-content-between mb-80">
                <div class="section-header">
                    <h2 class="fw-300">Choose Your Best Plan</h2>
                    <p>Discover the transformative impact of our digital marketing expertise through <br> the
                        words
                        of
                        those
                        who matter most – our
                        clients.</p>
                </div>
                <div class="pricing-two__tab">
                    <img class="price-save" src="assets/images/shape/save.png" alt="image">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="pt-1-tab" data-bs-toggle="tab" data-bs-target="#pt-1"
                                type="button" role="tab" aria-controls="pt-1" aria-selected="true">Monthly</button>
                            <button class="nav-link" id="pt-2-tab" data-bs-toggle="tab" data-bs-target="#pt-2" type="button"
                                role="tab" aria-controls="pt-2" aria-selected="false">Annually</button>

                        </div>
                    </nav>
                </div>
            </div>
            <div class="pricing__tab-content">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="pt-1" role="tabpanel" aria-labelledby="pt-1-tab">
                        <div class="pricing-package-wrapper">
                            <div class="row g-4">
                                <div class="col-xl-4 col-md-6">
                                    <div class="pricing-two__item">
                                        <div class="pricing-head pb-30 bor-bottom">
                                            <h4 class="mb-20">Basic Plan</h4>
                                            <h2>$ 29.00 USD<span class="month">/month</span>
                                            </h2>
                                            <p>Ideal for startups and small businesses.</p>
                                        </div>
                                        <ul class="mt-4">
                                            <li><i class="fa-duotone fa-check"></i>Engaging blog posts and
                                                articles.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Customized content strategy.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Automated workflows for
                                                efficiency
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Customer-Centric Approaches
                                            </li>
                                        </ul>
                                        <a href="#0" class="btn-one  mt-60 w-100 text-center">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="pricing-two__item">
                                        <div class="pricing-head pb-30 bor-bottom">
                                            <h4 class="mb-20">Standard Plan</h4>
                                            <h2>$ 49.00 USD<span class="month">/month</span>
                                            </h2>
                                            <p>Perfect for growing businesses.</p>
                                        </div>
                                        <ul class="mt-4">
                                            <li><i class="fa-duotone fa-check"></i>Get All Basic’s Features.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Detailed content calendar.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Infographics and visual
                                                content.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Email analytics and A/B
                                                testing.
                                            </li>
                                        </ul>
                                        <a href="#0" class="btn-one active mt-60 w-100 text-center">Get
                                            Started</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="pricing-two__item">
                                        <div class="pricing-head pb-30 bor-bottom">
                                            <h4 class="mb-20">Premium Plan</h4>
                                            <h2>$ 99.00 USD<span class="month">/month</span>
                                            </h2>
                                            <p>Businesses seeking a robust online presence</p>
                                        </div>
                                        <ul class="mt-4">
                                            <li><i class="fa-duotone fa-check"></i>All Basic’s and Standard’s
                                                Features.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>SEO-optimized content for
                                                ranking.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Social media advertising for
                                                reach.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Monthly performance reports.
                                            </li>
                                        </ul>
                                        <a href="#0" class="btn-one  mt-60 w-100 text-center">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pt-2" role="tabpanel" aria-labelledby="pt-2-tab">
                        <div class="pricing-package-wrapper">
                            <div class="row g-4">
                                <div class="col-xl-4 col-md-6">
                                    <div class="pricing-two__item">
                                        <div class="pricing-head pb-30 bor-bottom">
                                            <h4 class="mb-20">Basic Plan</h4>
                                            <h2>$ 299.00 USD<span class="month">/year</span>
                                            </h2>
                                            <p>Ideal for startups and small businesses.</p>
                                        </div>
                                        <ul class="mt-4">
                                            <li><i class="fa-duotone fa-check"></i>Engaging blog posts and
                                                articles.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Customized content strategy.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Automated workflows for
                                                efficiency
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Customer-Centric Approaches
                                            </li>
                                        </ul>
                                        <a href="#0" class="btn-one  mt-60 w-100 text-center">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="pricing-two__item">
                                        <div class="pricing-head pb-30 bor-bottom">
                                            <h4 class="mb-20">Standard Plan</h4>
                                            <h2>$ 449.00 USD<span class="month">/year</span>
                                            </h2>
                                            <p>Perfect for growing businesses.</p>
                                        </div>
                                        <ul class="mt-4">
                                            <li><i class="fa-duotone fa-check"></i>Get All Basic’s Features.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Detailed content calendar.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Infographics and visual
                                                content.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Email analytics and A/B
                                                testing.
                                            </li>
                                        </ul>
                                        <a href="#0" class="btn-one active mt-60 w-100 text-center">Get
                                            Started</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="pricing-two__item">
                                        <div class="pricing-head pb-30 bor-bottom">
                                            <h4 class="mb-20">Premium Plan</h4>
                                            <h2>$ 999.00 USD<span class="month">/year</span>
                                            </h2>
                                            <p>Businesses seeking a robust online presence</p>
                                        </div>
                                        <ul class="mt-4">
                                            <li><i class="fa-duotone fa-check"></i>All Basic’s and Standard’s
                                                Features.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>SEO-optimized content for
                                                ranking.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Social media advertising for
                                                reach.
                                            </li>
                                            <li><i class="fa-duotone fa-check"></i>Monthly performance reports.
                                            </li>
                                        </ul>
                                        <a href="#0" class="btn-one  mt-60 w-100 text-center">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing area end here -->

    <!-- About area start here -->
    <section class="about-area pt-120 pb-120">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img class="w-100" src="assets/images/about/about-image.png" alt="image">
                        <img class="about-line" src="assets/images/shape/about-three-shape.png" alt="shape">
                        <img class="about-kit" src="assets/images/about/about-three-kit.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__item-right">
                        <div class="section-header">
                            <h5>Why Choose Us?</h5>
                            <h2 class="fw-300">Our Tailored Strategies for Your Success</h2>
                            <p>Crafting precision in every detail, our tailored strategies pave the way for your
                                unparalleled success in the digital
                                landscape.</p>
                        </div>
                        <ul class="mt-40">
                            <li class="d-flex align-items-center gap-4">
                                <div class="icon bg1"><img src="assets/images/icon/about-icon1.png" alt="icon">
                                </div>
                                <div>
                                    <h3>First Working Process</h3>
                                    <p>We analyze your needs, setting the stage for a bespoke and impactful SEO
                                        strategy.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <div class="icon bg2"><img src="assets/images/icon/about-icon2.png" alt="icon">
                                </div>
                                <div>
                                    <h3>Dedicated Expert Team</h3>
                                    <p>Empower your success with our dedicated expert team, committed to
                                        navigating
                                        the complexities of SEO.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <div class="icon bg3"><img src="assets/images/icon/about-icon3.png" alt="icon">
                                </div>
                                <div>
                                    <h3>24/7 Customer Support</h3>
                                    <p>Experience peace of mind with our 24/7 customer support, ensuring prompt
                                        assistance and personalized service.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end here -->

    <!-- Process area start here -->
    <section class="process-area pb-120">
        <div class="container">
            <div class="d-flex flex-wrap mb-80 justify-content-between align-items-end gap-3">
                <div class="section-header">
                    <h5>Map Your Roadmap</h5>
                    <h2 class="fw-300">Our Proven Work Process</h2>
                </div>
                <p>Our Proven Work Process blends experience, precision, <br> and innovation for consistently
                    outstanding results.</p>
            </div>
            <div class="process__wrp">
                <div class="process__line">
                    <img src="assets/images/shape/process-line.png" alt="line">
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="process__item">
                            <div class="process__number bg1">
                                <h4>1</h4>
                            </div>
                            <h3 class="mb-10 mt-25">Keyword Research</h3>
                            <p class="fs-16">We pinpoint and leverage the most impactful <br> terms, aligning
                                your
                                content
                                seamlessly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="process__item">
                            <div class="process__number">
                                <h4>2</h4>
                                <img src="assets/images/shape/process-circle.png" alt="image">
                            </div>
                            <h3 class="mb-10 mt-25">Link Building</h3>
                            <p class="fs-16">We secure high-quality backlinks, boosting <br> your site's
                                credibility
                                and
                                contributing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="process__item">
                            <div class="process__number bg3">
                                <h4>3</h4>
                            </div>
                            <h3 class="mb-10 mt-25">Fast Ranking</h3>
                            <p class="fs-16">Our goal is clear - secure top rankings. Through meticulous
                                optimization.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process area end here -->

    <!-- Book area start here -->
    <section class="book-area">
        <div class="container">
            <div class="book__wrp">
                <div class="book__shape1">
                    <img src="assets/images/shape/book-star.png" alt="shape">
                </div>
                <div class="book__shape2">
                    <img src="assets/images/shape/book-star.png" alt="shape">
                </div>
                <div class="book__left-arry">
                    <img src="assets/images/shape/book-btn-left.png" alt="shape">
                </div>
                <div class="book__right-arry">
                    <img src="assets/images/shape/book-btn-right.png" alt="shape">
                </div>
                <div class="book__item">
                    <h2>Let's Do Something <span>Amazing <img src="assets/images/shape/title-line-book.png"
                                alt="shape"></span> Together!</h2>
                    <p class="mt-20 mb-25">Ready to elevate your online presence? Get in touch with us today for
                        personalized <br> solutions tailored to your business needs.</p>
                    <ul class="d-flex align-items-center gap-2 gap-md-4 flex-wrap justify-content-center">
                        <li><svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.1221 6.88023L16.6812 6.43922C16.4002 6.15822 16.2421 5.77622 16.2421 5.37822V4.75722C16.2421 3.10122 14.9002 1.75923 13.2442 1.75923H12.6232C12.2252 1.75923 11.8442 1.60124 11.5622 1.32024L11.1212 0.879227C9.95017 -0.291773 8.05218 -0.291773 6.88118 0.879227L6.44014 1.32024C6.15914 1.60124 5.77723 1.75923 5.37923 1.75923H4.75826C3.10225 1.75923 1.76021 3.10122 1.76021 4.75722V5.37822C1.76021 5.77622 1.60224 6.15722 1.32124 6.43922L0.880203 6.88023C-0.290797 8.05123 -0.290797 9.94922 0.880203 11.1202L1.32124 11.5612C1.60224 11.8422 1.76021 12.2242 1.76021 12.6222V13.2432C1.76021 14.8992 3.10225 16.2412 4.75826 16.2412H5.37923C5.77723 16.2412 6.15814 16.3992 6.44014 16.6802L6.88118 17.1212C8.05218 18.2922 9.95017 18.2922 11.1212 17.1212L11.5622 16.6802C11.8432 16.3992 12.2252 16.2412 12.6232 16.2412H13.2442C14.9002 16.2412 16.2421 14.8992 16.2421 13.2432V12.6222C16.2421 12.2242 16.4002 11.8432 16.6812 11.5612L17.1221 11.1202C18.2931 9.94922 18.2931 8.05123 17.1221 6.88023ZM12.5302 7.53023L8.53023 11.5302C8.38423 11.6762 8.1922 11.7502 8.0002 11.7502C7.8082 11.7502 7.61617 11.6772 7.47017 11.5302L5.47017 9.53023C5.17717 9.23723 5.17717 8.76222 5.47017 8.46922C5.76317 8.17622 6.2382 8.17622 6.5312 8.46922L8.00117 9.93922L11.4711 6.46922C11.7641 6.17622 12.2392 6.17622 12.5322 6.46922C12.8232 6.76222 12.8232 7.23823 12.5302 7.53023Z"
                                    fill="white" fill-opacity="0.7" />
                            </svg>
                            <span class="count paragraph-light">60</span>+ Team Members
                        </li>
                        <li>
                            <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.1221 6.88023L16.6812 6.43922C16.4002 6.15822 16.2421 5.77622 16.2421 5.37822V4.75722C16.2421 3.10122 14.9002 1.75923 13.2442 1.75923H12.6232C12.2252 1.75923 11.8442 1.60124 11.5622 1.32024L11.1212 0.879227C9.95017 -0.291773 8.05218 -0.291773 6.88118 0.879227L6.44014 1.32024C6.15914 1.60124 5.77723 1.75923 5.37923 1.75923H4.75826C3.10225 1.75923 1.76021 3.10122 1.76021 4.75722V5.37822C1.76021 5.77622 1.60224 6.15722 1.32124 6.43922L0.880203 6.88023C-0.290797 8.05123 -0.290797 9.94922 0.880203 11.1202L1.32124 11.5612C1.60224 11.8422 1.76021 12.2242 1.76021 12.6222V13.2432C1.76021 14.8992 3.10225 16.2412 4.75826 16.2412H5.37923C5.77723 16.2412 6.15814 16.3992 6.44014 16.6802L6.88118 17.1212C8.05218 18.2922 9.95017 18.2922 11.1212 17.1212L11.5622 16.6802C11.8432 16.3992 12.2252 16.2412 12.6232 16.2412H13.2442C14.9002 16.2412 16.2421 14.8992 16.2421 13.2432V12.6222C16.2421 12.2242 16.4002 11.8432 16.6812 11.5612L17.1221 11.1202C18.2931 9.94922 18.2931 8.05123 17.1221 6.88023ZM6.26021 12.4502C6.26021 12.6162 6.12616 12.7502 5.96016 12.7502H5.46016C5.07016 12.7502 4.7502 12.4302 4.7502 12.0402V8.74022C4.7502 8.34922 5.07016 8.03023 5.46016 8.03023H5.96016C6.12616 8.03023 6.26021 8.16422 6.26021 8.33022V12.4502ZM13.1302 8.95024L12.1901 11.7802C11.9901 12.3602 11.7902 12.7502 10.8402 12.7502H7.56026C7.39426 12.7502 7.26021 12.6162 7.26021 12.4502V7.62822C7.26021 7.59622 7.26522 7.56423 7.27522 7.53423L8.20015 4.74022C8.31015 4.43022 8.59021 4.25023 8.89021 4.25023C9.03021 4.25023 9.18026 4.29023 9.31026 4.38023C9.71026 4.64023 9.94014 5.08022 9.94014 5.55022V7.08022H11.7902C13.2102 7.08022 13.4402 8.03024 13.1302 8.95024Z"
                                    fill="white" fill-opacity="0.7" />
                            </svg>
                            Award Winning Agency
                        </li>
                        <li>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.1221 6.88023L16.6812 6.43922C16.4002 6.15822 16.2421 5.77622 16.2421 5.37822V4.75722C16.2421 3.10122 14.9002 1.75923 13.2442 1.75923H12.6232C12.2252 1.75923 11.8442 1.60124 11.5622 1.32024L11.1212 0.879227C9.95017 -0.291773 8.05218 -0.291773 6.88118 0.879227L6.44014 1.32024C6.15914 1.60124 5.77723 1.75923 5.37923 1.75923H4.75826C3.10225 1.75923 1.76021 3.10122 1.76021 4.75722V5.37822C1.76021 5.77622 1.60224 6.15722 1.32124 6.43922L0.880203 6.88023C-0.290797 8.05123 -0.290797 9.94922 0.880203 11.1202L1.32124 11.5612C1.60224 11.8422 1.76021 12.2242 1.76021 12.6222V13.2432C1.76021 14.8992 3.10225 16.2412 4.75826 16.2412H5.37923C5.77723 16.2412 6.15814 16.3992 6.44014 16.6802L6.88118 17.1212C8.05218 18.2922 9.95017 18.2922 11.1212 17.1212L11.5622 16.6802C11.8432 16.3992 12.2252 16.2412 12.6232 16.2412H13.2442C14.9002 16.2412 16.2421 14.8992 16.2421 13.2432V12.6222C16.2421 12.2242 16.4002 11.8432 16.6812 11.5612L17.1221 11.1202C18.2931 9.94922 18.2931 8.05123 17.1221 6.88023ZM11.0352 12.5352C10.6752 12.8962 10.2212 13.1252 9.73018 13.2092V13.5002C9.73018 13.9142 9.39418 14.2502 8.98018 14.2502C8.56618 14.2502 8.23018 13.9142 8.23018 13.5002V13.2082C7.19818 13.0132 6.38624 12.1652 6.26424 11.0852C6.21724 10.6732 6.51325 10.3022 6.92525 10.2552C7.33225 10.2092 7.70823 10.5042 7.75423 10.9162C7.80823 11.3922 8.20816 11.7502 8.68416 11.7502H9.31514C9.56314 11.7502 9.7962 11.6522 9.9742 11.4752C10.1522 11.2972 10.2492 11.0622 10.2492 10.8152C10.2492 10.3862 9.95714 10.0132 9.53914 9.90724L8.09419 9.54823C7.56419 9.41423 7.09216 9.10621 6.76216 8.67921C6.43316 8.26421 6.24922 7.73123 6.24922 7.18523C6.24922 5.99823 7.1032 5.01022 8.2292 4.79622V4.50023C8.2292 4.08623 8.5652 3.75023 8.9792 3.75023C9.3932 3.75023 9.7292 4.08623 9.7292 4.50023V4.78923C10.7792 4.97023 11.6102 5.82221 11.7342 6.91621C11.7812 7.32821 11.4852 7.69923 11.0732 7.74623C10.6712 7.79423 10.2902 7.49722 10.2442 7.08522C10.1902 6.60922 9.79016 6.25124 9.31416 6.25124H8.68318C8.16718 6.25124 7.74825 6.67023 7.74825 7.18623C7.74825 7.39523 7.81624 7.59823 7.94124 7.75523C8.07224 7.92423 8.25321 8.04222 8.45821 8.09422L9.90315 8.45323C10.9912 8.72823 11.7482 9.70024 11.7482 10.8162C11.7502 11.4632 11.4962 12.0742 11.0352 12.5352Z"
                                    fill="white" fill-opacity="0.7" />
                            </svg>
                            Affordable Pricing Plan
                        </li>
                    </ul>
                    <a href="#0" class="btn-two border-none mt-45">Book a Free Consultation
                        <span>
                            <i class="fa-regular fa-arrow-up-right arry1"></i>
                            <i class="fa-regular fa-arrow-up-right arry2"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Book area end here -->
@endsection

@push('frontend_scripts')
    <script>

    </script>
@endpush