@extends('layouts.app')

@section('front_content')

<!-- Hero Section Start -->
<section class="hero-section" style="background: #fff; padding: 100px 0 80px 0;">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 mx-auto">
                <div class="row align-items-center rounded p-5">
                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                        <div class="hero-content">
                            <span class="d-inline-block mb-2" style="color: #ff6b00; font-weight: 600; letter-spacing: 1px; font-size: 1.1rem;">AI & ML Experts</span>
                            <h1 class="display-5 mb-4" style="font-weight: 800; color: #0a1d37; line-height: 1.2;">
                                AI & Machine Learning <br> Solutions for Your Business
                            </h1>
                            <p class="lead mb-4" style="color: #4a5568; font-size: 1.25rem;">
                                Empower your business with cutting-edge AI and ML technologies. Unlock new opportunities, automate processes, and drive innovation with our expert solutions.
                            </p>
                            <a href="{{ route('contact') }}" class="btn btn-lg px-5 py-3" style="background: #ff6b00; color: #fff; border: none; font-weight: 700; border-radius: 30px; box-shadow: 0 4px 24px rgba(255,107,0,0.15); transition: background 0.2s;">
                                Get Started
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="{{ asset('https://wowtheme7.com/tf/agiletech/agiletech/assets/img/about/22.png') }}" alt="AI ML Hero" class="img-fluid" style="max-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Services Section Start -->
<section class="services-section py-5" style="background: #f7f9fb;">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="subtitle" style="color: #ff6b00; font-weight: 600;">Our Services</span>
            <h2 class="mt-2" style="font-weight: 700;">AI & ML Capabilities</h2>
            <p class="text-muted mt-3">Explore our comprehensive suite of AI and Machine Learning services designed to accelerate your business growth.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card p-4 h-100 text-center shadow-sm bg-white rounded">
                    <div class="icon mb-3">
                        <img src="{{ asset('frontend/assets/icons/automation.svg') }}" alt="Automation" style="height: 48px;">
                    </div>
                    <h5 class="mb-2" style="font-weight: 600;">Process Automation</h5>
                    <p class="text-muted">Automate repetitive tasks and workflows with intelligent AI-driven solutions to boost efficiency and reduce costs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card p-4 h-100 text-center shadow-sm bg-white rounded">
                    <div class="icon mb-3">
                        <img src="{{ asset('frontend/assets/icons/prediction.svg') }}" alt="Prediction" style="height: 48px;">
                    </div>
                    <h5 class="mb-2" style="font-weight: 600;">Predictive Analytics</h5>
                    <p class="text-muted">Leverage data-driven insights and predictive models to make smarter business decisions and stay ahead of the curve.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card p-4 h-100 text-center shadow-sm bg-white rounded">
                    <div class="icon mb-3">
                        <img src="{{ asset('frontend/assets/icons/nlp.svg') }}" alt="NLP" style="height: 48px;">
                    </div>
                    <h5 class="mb-2" style="font-weight: 600;">Natural Language Processing</h5>
                    <p class="text-muted">Transform unstructured text into actionable insights with advanced NLP and language understanding solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- About AI/ML Section Start -->
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('images/about/about-image.png') }}" alt="About AI ML" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <span class="subtitle" style="color: #ff6b00; font-weight: 600;">Why Choose Us</span>
                <h2 class="mt-2 mb-3" style="font-weight: 700;">Transforming Businesses with AI & ML</h2>
                <p class="text-muted mb-4">
                    Our team of AI and ML experts delivers innovative solutions tailored to your unique business needs. From strategy to implementation, we help you harness the power of artificial intelligence to drive growth, efficiency, and competitive advantage.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Customized AI/ML Solutions</li>
                    <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Experienced Data Scientists</li>
                    <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> End-to-End Project Delivery</li>
                    <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Ongoing Support & Optimization</li>
                </ul>
                <a href="{{ route('about-us') }}" class="btn btn-outline-primary mt-3" style="border-color: #ff6b00; color: #ff6b00; font-weight: 600;">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
<!-- About AI/ML Section End -->

<!-- AI Solutions Overview Section Start -->
<section class="ai-overview-section py-5" style="background: #f7f9fb;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Left Column -->
            <div class="col-lg-4">
                <div class="mb-4 p-4 bg-white rounded shadow-sm">
                    <h5 class="mb-2" style="font-weight: 600;">AI Consult</h5>
                    <p class="text-muted mb-0">Aliquam eros justo, posuere loborti inh thi viverra coin design here laoreet min ouimatti posuere lorem</p>
                    <div class="icon position-absolute" style="right: 24px; top: 24px;">
                        <img src="{{ asset('images/icon/about-icon1.png') }}" alt="AI Consult" style="height: 48px;">
                    </div>
                </div>
                <div class="mb-4 p-4 bg-white rounded shadow-sm">
                    <h5 class="mb-2" style="font-weight: 600;">Data Mind</h5>
                    <p class="text-muted mb-0">Aliquam eros justo, posuere loborti inh thi viverra coin design here laoreet min ouimatti posuere lorem</p>
                    <div class="icon position-absolute" style="right: 24px; top: 24px;">
                        <img src="{{ asset('images/icon/about-icon2.png') }}" alt="Data Mind" style="height: 48px;">
                    </div>
                </div>
                <div class="mb-4 p-4 bg-white rounded shadow-sm">
                    <h5 class="mb-2" style="font-weight: 600;">IntelliSense</h5>
                    <p class="text-muted mb-0">Aliquam eros justo, posuere loborti inh thi viverra coin design here laoreet min ouimatti posuere lorem</p>
                    <div class="icon position-absolute" style="right: 24px; top: 24px;">
                        <img src="{{ asset('images/icon/about-icon3.png') }}" alt="IntelliSense" style="height: 48px;">
                    </div>
                </div>
            </div>
            <!-- Center Robot Image -->
            <div class="col-lg-4 text-center d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                <img src="{{ asset('https://wowtheme7.com/tf/agiletech/agiletech/assets/img/about/22.png') }}" alt="AI Robot" class="img-fluid" style="max-height: 500px;">
            </div>
            <!-- Right Column -->
            <div class="col-lg-4">
                <div class="mb-4 p-4 bg-white rounded shadow-sm" style="background: #2bb6a3; color: #0a1d37;">
                    <h5 class="mb-2" style="font-weight: 600;">Neural Solutions</h5>
                    <p class="mb-0">Aliquam eros justo, posuere loborti inh thi viverra coin design here laoreet min ouimatti posuere lorem</p>
                    <div class="icon position-absolute" style="right: 24px; top: 24px;">
                        <img src="{{ asset('images/icon/about-icon1.png') }}" alt="Neural Solutions" style="height: 48px;">
                    </div>
                </div>
                <div class="mb-4 p-4 bg-white rounded shadow-sm">
                    <h5 class="mb-2" style="font-weight: 600;">Smart Vision</h5>
                    <p class="text-muted mb-0">Aliquam eros justo, posuere loborti inh thi viverra coin design here laoreet min ouimatti posuere lorem</p>
                    <div class="icon position-absolute" style="right: 24px; top: 24px;">
                        <img src="{{ asset('images/icon/about-icon2.png') }}" alt="Smart Vision" style="height: 48px;">
                    </div>
                </div>
                <div class="mb-4 p-4 bg-white rounded shadow-sm" style="opacity: 0.5;">
                    <h5 class="mb-2" style="font-weight: 600;">Wise Logic</h5>
                    <p class="text-muted mb-0">Aliquam eros justo, posuere loborti inh thi viverra coin design here laoreet min ouimatti posuere lorem</p>
                    <div class="icon position-absolute" style="right: 24px; top: 24px;">
                        <img src="{{ asset('images/icon/about-icon3.png') }}" alt="Wise Logic" style="height: 48px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AI Solutions Overview Section End -->

<!-- Case Studies Section Start -->
<section class="case-studies-section py-5" style="background: #f7f9fb;">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="subtitle" style="color: #ff6b00; font-weight: 600;">Case Studies</span>
            <h2 class="mt-2" style="font-weight: 700;">Success Stories</h2>
            <p class="text-muted mt-3">Discover how we've helped businesses achieve remarkable results with AI and ML.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="case-card bg-white rounded shadow-sm p-3 h-100">
                    <img src="{{ asset('images/about/about-image.png') }}" alt="Case Study 1" class="img-fluid rounded mb-3">
                    <h5 class="mb-2" style="font-weight: 600;">Retail Demand Forecasting</h5>
                    <p class="text-muted">Implemented ML models to predict product demand, reducing stockouts by 30% for a leading retailer.</p>
                    <a href="{{ route('case-study-details') }}" class="text-primary" style="color: #ff6b00;">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="case-card bg-white rounded shadow-sm p-3 h-100">
                    <img src="{{ asset('images/about/about-image.png') }}" alt="Case Study 2" class="img-fluid rounded mb-3">
                    <h5 class="mb-2" style="font-weight: 600;">Customer Churn Prediction</h5>
                    <p class="text-muted">Developed AI-driven churn models, enabling proactive retention strategies for a telecom company.</p>
                    <a href="{{ route('case-study-details') }}" class="text-primary" style="color: #ff6b00;">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="case-card bg-white rounded shadow-sm p-3 h-100">
                    <img src="{{ asset('images/about/about-image.png') }}" alt="Case Study 3" class="img-fluid rounded mb-3">
                    <h5 class="mb-2" style="font-weight: 600;">Intelligent Chatbots</h5>
                    <p class="text-muted">Deployed NLP-powered chatbots to automate customer support, improving response time by 50%.</p>
                    <a href="{{ route('case-study-details') }}" class="text-primary" style="color: #ff6b00;">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Case Studies Section End -->

<!-- Call to Action Section Start -->
<section class="cta-section py-5" style="background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <h2 class="text-white mb-2" style="font-weight: 700;">Ready to Transform Your Business with AI & ML?</h2>
                <p class="text-white-50 mb-0">Contact us today to discuss your project and discover how our AI/ML solutions can drive your success.</p>
            </div>
            <div class="col-lg-4 col-md-12 text-lg-end mt-4 mt-lg-0">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg" style="background: #ff6b00; border: none; font-weight: 600;">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action Section End -->

@endsection
