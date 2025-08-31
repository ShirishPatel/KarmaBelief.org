<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            @if (!empty(siteConfig()->site_logo_light))
                <img src="{{ asset('storage/' . siteConfig()->site_logo_light) }}" width="100%" alt="Website Logo">
            @else
                <span>Admin</span>
            @endif
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    {{-- <ul class="menu-inner py-1">

        <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item open" style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Home</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('home-hero-sections.*') ? 'active' : '' }}">
                    <a href="{{ route('home-hero-sections.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">Hero Section</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('our-value-sections.*') ? 'active' : '' }}">
                    <a href="{{ route('our-value-sections.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">Our Values</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('solutions.*') ? 'active' : '' }}">
                    <a href="{{ route('solutions.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Smart-Solution">Smart Solution</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('why-choose-us-list.*') ? 'active' : '' }}">
                    <a href="{{ route('why-choose-us-list.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="why-choose-us-list">Why Choose Us</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('success.*') ? 'active' : '' }}">
                    <a href="{{ route('success.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="why-choose-us-list">Success</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('services.*') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="why-choose-us-list">Services</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('client-stories-section.*') ? 'active' : '' }}">
                    <a href="{{ route('client-stories-section.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="why-choose-us-list">Client Stories</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item open" style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">About </div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item  {{ Request::routeIs('about-technologie.*') ? 'active' : '' }}">
                    <a href="{{ route('about-technologie.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">About Technologies</div>
                    </a>
                </li>
                <li class="menu-item  {{ Request::routeIs('about-counter.*') ? 'active' : '' }}">
                    <a href="{{ route('about-counter.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">Mission Vission</div>
                    </a>
                </li>

                <li class="menu-item  {{ Request::routeIs('our-progress-section.*') ? 'active' : '' }}">
                    <a href="{{ route('our-progress-section.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">Our Progress Section</div>
                    </a>
                </li>
                <li class="menu-item  {{ Request::routeIs('about-inquiry.*') ? 'active' : '' }}">
                    <a href="{{ route('about-inquiry.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">About Inquiry</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::routeIs('blog-categories.*') ? 'active' : '' }}">
            <a href="{{ route('blog-categories.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div class="text-truncate" data-i18n="blogs-categories">Blogs Categories</div>
            </a>
        </li>

        <li class="menu-item {{ Request::routeIs('blogs.*') ? 'active' : '' }}">
            <a href="{{ route('blogs.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Blogs">Blogs</div>
            </a>
        </li>

        <li class="menu-item open ">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div class="text-truncate" data-i18n="Testimonial">Testimonial</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item  {{ Request::routeIs('testimonial.*') ? 'active' : '' }}">
                    <a href="{{ route('testimonial.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">Testimonial</div>
                    </a>
                </li>
                <li class="menu-item  {{ Request::routeIs('award-testimonial.*') ? 'active' : '' }}">
                    <a href="{{ route('award-testimonial.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="hero-section">Award Testimonials</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::routeIs('newsletter') ? 'active' : '' }}">
            <a href="{{ route('newsletter') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div class="text-truncate" data-i18n="Configurations">Newsletter</div>
            </a>
        </li>


        <li class="menu-item {{ Request::routeIs('settings.*') ? 'active' : '' }}">
            <a href="{{ route('settings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div class="text-truncate" data-i18n="Configurations">Configurations</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div class="text-truncate" data-i18n="Newsletter">Logout</div>
            </a>
        </li>
    </ul> --}}
    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Home Section -->
        <li
            class="menu-item {{ Request::routeIs('home-hero-sections.*', 'our-value-sections.*', 'solutions.*', 'why-choose-us-list.*', 'success.*', 'services.*', 'client-stories-section.*') ? 'open' : '' }}">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Home">Home</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('home-hero-sections.*') ? 'active' : '' }}">
                    <a href="{{ route('home-hero-sections.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Hero Section">Hero Section</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('our-value-sections.*') ? 'active' : '' }}">
                    <a href="{{ route('our-value-sections.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Our Values">Our Values</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('solutions.*') ? 'active' : '' }}">
                    <a href="{{ route('solutions.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Smart Solution">Smart Solution</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('why-choose-us-list.*') ? 'active' : '' }}">
                    <a href="{{ route('why-choose-us-list.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Why Choose Us">Why Choose Us</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('success.*') ? 'active' : '' }}">
                    <a href="{{ route('success.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Success">Success</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('services.*') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Services">Services</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('client-stories-section.*') ? 'active' : '' }}">
                    <a href="{{ route('client-stories-section.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Client Stories">Client Stories</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item  {{ Request::routeIs('c-d-home-hero.*', 'c-d-process.*') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-message-dots"></i>
                <div class="text-truncate" data-i18n="custom-development">Custom Development</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('c-d-home-hero.*') ? 'active' : '' }}">
                    <a href="{{ route('c-d-home-hero.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="c-d-home-hero">Home Hero Section</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('c-d-process.*') ? 'active' : '' }}">
                    <a href="{{ route('c-d-process.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="c-d-process">Process</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item  {{ Request::routeIs('ai-ml.*', 'ai-ml-gallery.*', 'ai-ml-process.*', 'ai-ml-tag-gallery.*') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-message-dots"></i>
                <div class="text-truncate" data-i18n="custom-development">AI & ML</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('ai-ml.*') ? 'active' : '' }}">
                    <a href="{{ route('ai-ml.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="ai-ml">Home Hero Section</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('ai-ml-process.*') ? 'active' : '' }}">
                    <a href="{{ route('ai-ml-process.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="ai-ml-process">Process</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('ai-ml-gallery.*') ? 'active' : '' }}">
                    <a href="{{ route('ai-ml-gallery.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="ai-ml-gallery">Gallery</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- About Section -->
        <li
            class="menu-item {{ Request::routeIs('about-technologie.*', 'about-counter.*', 'our-progress-section.*', 'about-inquiry.*') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div class="text-truncate" data-i18n="About">About</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('about-technologie.*') ? 'active' : '' }}">
                    <a href="{{ route('about-technologie.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="About Technologies">About Technologies</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('about-counter.*') ? 'active' : '' }}">
                    <a href="{{ route('about-counter.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Mission Vision">Mission Vision</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('our-progress-section.*') ? 'active' : '' }}">
                    <a href="{{ route('our-progress-section.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Our Progress">Our Progress</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item {{ Request::routeIs('about-inquiry.*') ? 'active' : '' }}">
            <a href="{{ route('about-inquiry.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div class="text-truncate" data-i18n="About Inquiry">Inquiry Section</div>
            </a>
        </li>

        <!-- Blog Categories -->
        <li class="menu-item {{ Request::routeIs('blog-categories.*') ? 'active' : '' }}">
            <a href="{{ route('blog-categories.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div class="text-truncate" data-i18n="Blog Categories">Blog Categories</div>
            </a>
        </li>

        <!-- Blogs -->
        <li class="menu-item {{ Request::routeIs('blogs.*') ? 'active' : '' }}">
            <a href="{{ route('blogs.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div class="text-truncate" data-i18n="Blogs">Blogs</div>
            </a>
        </li>

        <!-- Testimonial -->
        <li class="menu-item  {{ Request::routeIs('testimonial.*', 'award-testimonial.*') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-message-dots"></i>
                <div class="text-truncate" data-i18n="Testimonial">Testimonial</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('testimonial.*') ? 'active' : '' }}">
                    <a href="{{ route('testimonial.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Testimonial">Testimonial</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('award-testimonial.*') ? 'active' : '' }}">
                    <a href="{{ route('award-testimonial.index') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Award Testimonials">Award Testimonials</div>
                    </a>
                </li>
            </ul>
        </li>

        <!--case Study-->
        <li class="menu-item {{ Request::routeIs(['case-studies.*', 'project.*']) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Stages">Case Study</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('case-studies.*') ? 'active' : '' }}">
                    <a href="{{ route('case-studies.index') }}" class="menu-link">
                        <div data-i18n="Case Study Categoty">Case Study Categoty</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::routeIs('project.*') ? 'active' : '' }}">
                    <a href="{{ route('project.index') }}" class="menu-link">
                        <div data-i18n="Projects">Projects</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Newsletter -->
        <li class="menu-item {{ Request::routeIs('newsletter') ? 'active' : '' }}">
            <a href="{{ route('newsletter') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div class="text-truncate" data-i18n="Newsletter">Newsletter</div>
            </a>
        </li>

        <li class="menu-item {{ Request::routeIs('terms-policy.*') ? 'active' : '' }}">
            <a href="{{ route('terms-policy.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate" data-i18n="Newsletter">Policy Pages</div>
            </a>
        </li>

        <!-- Configurations -->
        <li class="menu-item {{ Request::routeIs('settings.*') ? 'active' : '' }}">
            <a href="{{ route('settings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div class="text-truncate" data-i18n="Configurations">Configurations</div>
            </a>
        </li>

        <!-- Logout -->
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div class="text-truncate" data-i18n="Logout">Logout</div>
            </a>
        </li>
    </ul>
</aside>