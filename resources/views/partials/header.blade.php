<header>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i
                                    class="fa fa-home me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" id="mainNavbar">
            <a href="{{ route('home') }}" class="navbar-brand p-0 d-flex align-items-center">
                {{-- White Logo (shows on top) --}}
                <img src="{{ asset('assets/img/main-logo.png') }}" alt="{{ config('app.name', 'PAK-Trips') }}"
                    class="logo-white" height="50">

                {{-- Blue Logo (shows when scrolled) --}}
                <img src="{{ asset('assets/img/main-logo-blue.png') }}" alt="{{ config('app.name', 'PAK-Trips') }}"
                    class="logo-blue" height="50">

                <span class="brand-text ms-2 fw-bold position-relative" style="font-family: 'Cinzel', serif; font-size: 1.7rem; 
             color: #13357B; letter-spacing: 2px; 
             text-transform: uppercase;
             text-shadow: 0 1px 3px rgba(19, 53, 123, 0.2);">
                    PAK-Trips
                    <span style="position: absolute; bottom: -3px; left: 20%; width: 60%; height: 2px; 
                 background: linear-gradient(90deg, transparent, #13357B, transparent); 
                 border-radius: 2px;"></span>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}"
                        class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('packages') }}"
                        class="nav-item nav-link {{ request()->routeIs('packages') ? 'active' : '' }}">Packages</a>
                    <a href="{{ route('blog') }}"
                        class="nav-item nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('destinations') }}" class="dropdown-item">Destination</a>
                            <a href="{{ route('explore.tours') }}" class="dropdown-item">Explore Tour</a>
                            <a href="{{ route('gallery') }}" class="dropdown-item">Our Gallery</a>
                            <a href="{{ route('travel.guides') }}" class="dropdown-item">Travel Guides</a>
                            
                            <a href="#" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <a href="{{ route('booking') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                
            </div>
        </nav>

        <!-- Carousel Hero Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/carousel-2.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore
                                    The World</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Let's The World Together!</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore
                                    The World</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Find Your Perfect Tour At Travel
                                </h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/carousel-3.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore
                                    The World</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">You Like To Go?</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel Hero End -->
    </div>

    <!-- Search Bar -->
    <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
        <div class="container">
            <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Eg: Thailand">
                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2"
                    style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    {{-- ============================================ --}}
    {{-- INTERNAL CSS FOR NAVBAR SCROLL EFFECT --}}
    {{-- ============================================ --}}
    <style>
        /* ========================================
                   NAVBAR DEFAULT STATE (TRANSPARENT)
                   ======================================== */
        #mainNavbar {
            background: transparent !important;
            transition: all 0.4s ease-in-out;
            padding: 20px 0;
        }

        /* ----- Logo Display ----- */
        #mainNavbar .logo-white {
            display: block;
        }

        #mainNavbar .logo-blue {
            display: none;
        }

        /* ----- Brand Text: WHITE ----- */
        #mainNavbar .brand-text {
            color: #ffffff !important;
            transition: color 0.4s ease;
        }

        /* ----- Nav Links: WHITE (Default) ----- */
        #mainNavbar .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            transition: color 0.3s ease;
            position: relative;
        }

        /* ----- Nav Links Hover: WHITE (Stay White) ----- */
        #mainNavbar .nav-link:hover {
            color: #ffffff !important;
        }

        /* ----- Active Nav Link: WHITE ----- */
        #mainNavbar .nav-link.active {
            color: #ffffff !important;
        }

        /* ----- Dropdown Toggle: WHITE ----- */
        #mainNavbar .dropdown-toggle {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        #mainNavbar .dropdown-toggle:hover {
            color: #ffffff !important;
        }


        /* ========================================
                   NAVBAR SCROLLED STATE (WHITE BACKGROUND)
                   ======================================== */
        #mainNavbar.navbar-scrolled {
            background: #ffffff !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        /* ----- Logo Switching ----- */
        #mainNavbar.navbar-scrolled .logo-white {
            display: none;
        }

        #mainNavbar.navbar-scrolled .logo-blue {
            display: block;
        }

        /* ----- Brand Text: NAVY BLUE ----- */
        #mainNavbar.navbar-scrolled .brand-text {
            color: #13357B !important;
        }

        /* ----- Nav Links: NAVY BLUE (Default) ----- */
        #mainNavbar.navbar-scrolled .nav-link {
            color: #13357B !important;
        }

        /* ----- Nav Links Hover: DARKER NAVY BLUE ----- */
        #mainNavbar.navbar-scrolled .nav-link:hover {
            color: #0a1f4a !important;
        }

        /* ----- Active Nav Link: NAVY BLUE with Underline ----- */
        #mainNavbar.navbar-scrolled .nav-link.active {
            color: #f9f9f9 !important;
            font-weight: 600;
        }

        /* ----- Dropdown Toggle: NAVY BLUE ----- */
        #mainNavbar.navbar-scrolled .dropdown-toggle {
            color: #13357B !important;
        }

        #mainNavbar.navbar-scrolled .dropdown-toggle:hover {
            color: #0a1f4a !important;
        }


        /* ========================================
                   NAVBAR TOGGLER BUTTON
                   ======================================== */
        /* Default: White toggler */
        #mainNavbar .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5);
        }

        #mainNavbar .navbar-toggler .fa-bars {
            color: #ffffff;
        }

        /* Scrolled: Navy blue toggler */
        #mainNavbar.navbar-scrolled .navbar-toggler {
            border-color: rgba(19, 53, 123, 0.3);
        }

        #mainNavbar.navbar-scrolled .navbar-toggler .fa-bars {
            color: #13357B;
        }


        /* ========================================
                   DROPDOWN MENU
                   ======================================== */
        .dropdown-menu {
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(249, 247, 247, 0.1);
        }

        .dropdown-item {
            color: #757575 !important;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: #13357B !important;
            color: #ffffff !important;
        }


        /* ========================================
                   RESPONSIVE (MOBILE VIEW)
                   ======================================== */
        @media (max-width: 991.98px) {
            #mainNavbar {
                background: #ffffff !important;
                padding: 10px 0;
            }

            #mainNavbar .logo-white {
                display: none;
            }

            #mainNavbar .logo-blue {
                display: block;
            }

            #mainNavbar .brand-text {
                color: #13357B !important;
            }

            /* Mobile Nav Links: NAVY BLUE */
            #mainNavbar .nav-link {
                color: #13357B !important;
                padding: 10px 0 !important;
            }

            #mainNavbar .nav-link:hover {
                color: #0a1f4a !important;
                background: rgba(19, 53, 123, 0.05);
                border-radius: 5px;
            }

            #mainNavbar .nav-link.active {
                color: #13357B !important;
                font-weight: 600;
            }

            #mainNavbar .dropdown-toggle {
                color: #13357B !important;
            }

            /* Mobile Toggler: Navy Blue */
            #mainNavbar .navbar-toggler {
                border-color: rgba(19, 53, 123, 0.3);
            }

            #mainNavbar .navbar-toggler .fa-bars {
                color: #13357B;
            }

            /* Mobile Dropdown */
            .dropdown-menu {
                background: #f8f9fa !important;
                border: none !important;
            }

            .dropdown-item {
                color: #13357B !important;
            }

            .dropdown-item:hover {
                background: #13357B !important;
                color: #ffffff !important;
            }
        }


        /* ========================================
                   DESKTOP HOVER EFFECT (Underline Animation)
                   ======================================== */
        @media (min-width: 992px) {
            #mainNavbar .nav-link {
                position: relative;
            }

            #mainNavbar .nav-link::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 50%;
                width: 0;
                height: 2px;
                background: #ffffff;
                transition: all 0.3s ease;
                transform: translateX(-50%);
            }

            #mainNavbar .nav-link:hover::after,
            #mainNavbar .nav-link.active::after {
                width: 60%;
            }

            /* Scrolled state underline: Navy Blue */
            #mainNavbar.navbar-scrolled .nav-link::after {
                background: #13357B;
            }

            #mainNavbar.navbar-scrolled .nav-link:hover::after,
            #mainNavbar.navbar-scrolled .nav-link.active::after {
                width: 60%;
            }
        }
    </style>
</header>

<script>
    /**
     * Main JavaScript File
     */
    document.addEventListener('DOMContentLoaded', function () {
        'use strict';

        // ========================================
        // Navbar Scroll Effect - Logo Switching
        // ========================================

        const navbar = document.getElementById('mainNavbar');

        if (navbar) {
            // Check scroll position on page load
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            }

            // Listen for scroll events
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        }

        console.log('Navbar scroll effect initialized.');
    });
</script>