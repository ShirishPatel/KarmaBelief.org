@extends('layouts.app')
@section('title', 'Case Study Details')
@push('styles')
    <style>

    </style>
@endpush
@section('front_content')

    <!-- Banner area start here -->
    <section class="banner-inner-area">
        <div class="container">
            <div class="banner-inner__content">
                <a href='index.html'>home</a><span>/Case Details</span>
                <h2>Case Details</h2>
                <p>We will help a client's problems to develop the products they have with high quality Change
                    the
                    appearance.</p>
            </div>
        </div>
    </section>
    <!-- Banner area end here -->

    <!-- Case details area start here -->
    <section class="case-details-area pb-120">
        <div class="container">
            <div class="image case-details__image">
                <img src="assets/images/case/case-details-image.jpg" alt="image">
            </div>
            <div class="case-details__wrp">
                <div class="case-details__info pt-60 pb-60 bor-top mt-60">
                    <div>
                        <h5>Platforms</h5>
                        <span>ABC Cafe House</span>
                    </div>
                    <div>
                        <h5>Service</h5>
                        <span>Social Media Marketing</span>
                    </div>
                    <div>
                        <h5>Project Timeline</h5>
                        <span>2023-2024</span>
                    </div>
                    <div>
                        <h5>Increased in ROI revenue</h5>
                        <span>30%</span>
                    </div>
                </div>
                <h3>Project Brief</h3>
                <p>ARTVISTA, a prestigious art gallery, collaborated with AgenShark to create a captivating
                    online
                    platform that showcases
                    their extensive collection of artwork while providing an immersive user experience. The
                    project
                    aimed to combine
                    innovative UI/UX design with seamless development to elevate the gallery's digital presence
                    and
                    attract art enthusiasts
                    worldwide.</p>
                <h3 class="mt-30">Challenging Part</h3>
                <p>ARTVISTA faced the challenge of translating the unique ambiance and allure of their physical
                    gallery into an engaging
                    online experience. Additionally, they sought to incorporate innovative features that would
                    set
                    their website apart from
                    traditional art gallery websites and captivate visitors with interactive elements.</p>
                <h3 class="mt-30">Solution</h3>
                <p>AgenShark approached the project with a focus on marrying aesthetics with functionality. We
                    conducted in-depth research
                    to understand ARTVISTA's brand identity, target audience, and industry trends. Leveraging
                    this
                    insight, our team devised
                    a UI/UX design that emphasized visual storytelling, intuitive navigation, and seamless
                    browsing
                    of the gallery's diverse
                    collection.</p>
                <p class="mt-20">In terms of development, we employed cutting-edge technologies to ensure
                    optimal
                    performance and
                    responsiveness across
                    various devices. Our developers meticulously crafted the website's backend infrastructure to
                    support robust features
                    such as high-resolution image galleries, integrated search functionality, and secure online
                    transactions.</p>

                <h3 class="mt-30">Innovation</h3>
                <p class="mb-25">AgenShark introduced several innovative features to differentiate ARTVISTA's
                    website from
                    traditional art gallery
                    platforms:</p>
                <ol>
                    <li><strong>1. Virtual Tours :</strong> Utilizing 360-degree photography and virtual reality
                        technology, visitors can embark on virtual tours of
                        the gallery from the comfort of their homes, offering an immersive experience akin to an
                        in-person visit.</li>
                    <li><strong>2. Artwork Customization Tool:</strong> An interactive tool
                        allows users to visualize artwork within their own space by uploading
                        photos and experimenting with different framing options and wall placements.</li>
                    <li><strong>3. Art Discovery Algorithm:</strong> Leveraging machine learning
                        algorithms, the website recommends artworks based on users'
                        preferences, browsing history, and demographic data, enhancing personalized discovery
                        and
                        engagement.</li>
                </ol>
                <div class="case-details__image-sm mt-30">
                    <div class="image">
                        <img src="assets/images/case/case-details-image2.jpg" alt="image">
                    </div>
                    <div class="image sm-image">
                        <img src="assets/images/case/case-details-image3.jpg" alt="image">
                    </div>
                    <div class="image">
                        <img src="assets/images/case/case-details-image4.jpg" alt="image">
                    </div>
                </div>
                <h3 class="mt-60">Results</h3>
                <ul class="mb-60">
                    <li><strong>Enhanced User Engagement :</strong> The incorporation of interactive features
                        led to
                        a 40% increase in user engagement metrics,
                        including time spent on the website and page views.</li>
                    <li><strong>Increased Sales and Conversions :</strong> The seamless browsing experience and
                        secure checkout process resulted in a 30%
                        increase in online sales and conversion rates.</li>
                    <li><strong>Positive Feedback and Recognition :</strong> ARTVISTA received accolades from
                        both
                        visitors and industry professionals for their
                        innovative approach to online art presentation, solidifying their reputation as a leader
                        in
                        the art world.</li>
                </ul>
                <div class="case-details__testimonial mb-60 bg-image"
                    data-background="assets/images/case/bg-image.png">
                    <p>"AgenShark's innovative design and development transformed our art gallery's online
                        presence.
                        Their seamless integration
                        of technology and creativity elevated user engagement. We're thrilled with the results
                        and
                        look forward to continued
                        collaboration."</p>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-2 w-100 align-items-center"><img
                                src="assets/images/case/user.png" alt="image">
                            <h5><a class="text-white" href="#0">Edward Rafael</a></h5><span
                                class="paragraph-light">, Director of ARTVISTA</span>
                        </div>
                        <svg width="52" height="40" viewBox="0 0 52 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M51.0467 23.7413L43.765 38.2763C43.2833 39.2396 42.2917 39.8346 41.2433 39.8346H33.9617C32.9133 39.8346 32.2333 38.7296 32.6867 37.7946L40.1667 22.8346H33.0833C30.7317 22.8346 28.8333 20.9363 28.8333 18.5846V4.41797C28.8333 2.0663 30.7317 0.167969 33.0833 0.167969H47.25C49.6017 0.167969 51.5 2.0663 51.5 4.41797V21.843C51.5 22.4946 51.3583 23.1463 51.0467 23.7413ZM23.1667 21.843V4.41797C23.1667 2.0663 21.2683 0.167969 18.9167 0.167969H4.75C2.39833 0.167969 0.5 2.0663 0.5 4.41797V18.5846C0.5 20.9363 2.39833 22.8346 4.75 22.8346H11.8333L4.35333 37.7946C3.87167 38.7296 4.57999 39.8346 5.62833 39.8346H12.91C13.9867 39.8346 14.9783 39.2396 15.4317 38.2763L22.7133 23.7413C22.9967 23.1463 23.1667 22.4946 23.1667 21.843Z"
                                fill="white" fill-opacity="0.4" />
                        </svg>

                    </div>
                </div>
                <h3>Conclusion</h3>
                <p>The collaboration between ARTVISTA and AgenShark exemplifies the power of innovative UI/UX
                    design
                    and development in
                    transforming traditional industries for the digital age. By leveraging cutting-edge
                    technologies
                    and pushing the
                    boundaries of creativity, we successfully created a dynamic and immersive online platform
                    that
                    not only showcases
                    ARTVISTA's exquisite collection but also enhances the overall art appreciation experience
                    for
                    visitors worldwide.</p>
            </div>
        </div>
    </section>
    <!-- Case details area end here -->

    <!-- Story area start here -->
    <section class="story-area pb-120">
        <div class="container bor-top pt-120">
            <div class="section-header-flex line-title mb-80">
                <h2 class="fw-300">More Case Studies</h2>
                <div><a href="#0" class="btn-three">Explore More<i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="row g-5 align-items-star">
                <div class="col-lg-6">
                    <div class="story__item inner-page">
                        <div class="image">
                            <img src="assets/images/story/story-image1.png" alt="image">
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-3 justify-content-between mt-20">
                            <div>
                                <h3 class="mb-2"><a href="#0">Dashboard Analytics</a></h3>
                                <div class="story__info">
                                    <ul>
                                        <li>UI/UX Design</li>
                                        <li class="li-dot"></li>
                                        <li>Development</li>
                                        <li class="li-dot"></li>
                                        <li>Creative Service</li>
                                    </ul>
                                </div>
                            </div>
                            <div> <a href="#0" class="btn-one">View Case
                                    <span>
                                        <i class="fa-regular fa-arrow-up-right arry1"></i>
                                        <i class="fa-regular fa-arrow-up-right arry2"></i>
                                    </span>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story__item inner-page">
                        <div class="image">
                            <img src="assets/images/story/story-image2.png" alt="image">
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-3 justify-content-between mt-20">
                            <div>
                                <h3 class="mb-2"><a href="#0">Sequence - Financial Dashboard</a></h3>
                                <div class="story__info">
                                    <ul>
                                        <li>UI/UX Design</li>
                                        <li class="li-dot"></li>
                                        <li>Development</li>
                                        <li class="li-dot"></li>
                                        <li>Creative Service</li>
                                    </ul>
                                </div>
                            </div>
                            <div> <a href="#0" class="btn-one">View Case
                                    <span>
                                        <i class="fa-regular fa-arrow-up-right arry1"></i>
                                        <i class="fa-regular fa-arrow-up-right arry2"></i>
                                    </span>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Story area end here -->

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

                    <a href="#0" class="btn-two border-none ">Get Started with us
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