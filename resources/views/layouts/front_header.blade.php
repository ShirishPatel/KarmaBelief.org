<!-- Header area start here -->
<header class="header-area border-none">
    <div class="container">
        <div class="header__main">
            <a class='logo_' href='{{ route('home') }}'>
                <img src="{{ asset('storage/' . siteConfig()->site_logo_light) }}" width="80px" alt="logo">
            </a>
            <div class="main-menu">
                <nav>
                    <ul>
                        <li><a href='{{ route('home') }}'>Home</a></li>
                        <li>
                            <a href="#0" class="d-flex align-items-center">About<i
                                    class="fa-solid fa-angle-down ms-2"></i></a>
                            <ul class="sub-menu">
                                <li><a href='{{ route('about-us') }}'>About Us</a></li>
                                <li><a href='{{ route('about-us') }}'>Certificates</a></li>
                                <li><a href='{{ route('about-us') }}'>Tax Exemption</a></li>
                                <li><a href='{{ route('about-us') }}'>Donation Policy</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0" class="d-flex align-items-center">Activities<i
                                    class="fa-solid fa-angle-down ms-2"></i></a>
                            <ul class="sub-menu">
                                <li><a href='{{ route('about-us') }}'>Gallery</a></li>
                                <li><a href='{{ route('about-us') }}'>Events</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0" class="d-flex align-items-center">Get Involved<i
                                    class="fa-solid fa-angle-down ms-2"></i></a>
                            <ul class="sub-menu">
                                <li><a href='{{ route('about-us') }}'>Causes</a></li>
                                <li><a href='{{ route('about-us') }}'>Donate</a></li>
                            </ul>
                        </li>
                        <li><a href='{{ route('home') }}'>Contact Us</a></li>
                        <li><a href='{{ route('blog') }}'>News & Updates</a></li>
                    </ul>
                </nav>
            </div>
            <div class="menu-btns d-none d-lg-flex">
                <a class='sign-in' href='{{ route('contact') }}'>Get In Touch</a>
            </div>
            <button class="menubars d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#menubar">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
<!-- Header area end here -->