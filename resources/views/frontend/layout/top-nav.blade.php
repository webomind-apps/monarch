<?php
// $pagename = basename($_SERVER['PHP_SELF']);
?>


<style>
    .offcanvas-end {
        top: 0;
        right: 0;
        width: 40% !important;
        border-left: 1px solid rgba(0, 0, 0, .2);
        transform: translateX(100%);
    }

    .social {
        padding-left: 0;
        list-style-type: none;
        margin-bottom: 0;
        margin-top: 20px;
        text-align: center;
    }

    .social li {
        display: inline-block;
        margin: 0 1px;
        padding-left: 0;
    }

    .social li a:hover {
        background-color: red;
        color: #fff;
    }

    .social li a {
        width: 35px;
        height: 35px;
        line-height: 33px;
        border: 1px solid #dadada;
        border-radius: 50%;
        color: #aba5a5;
        text-align: center;
        display: block;
    }

    .social li a i {
        font-size: 14px;
    }

    .offcanvas-header {
        display: flex;
        align-items: center;
        justify-content: right;
        padding: 1rem 1rem;
        margin-right: 20px;
    }

    .btn-close {
        box-sizing: content-box;
        width: 1em;
        height: 1em;
        padding: 0.25em 0.25em;
        color: #000;
        background: transparent url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e) center/1em auto no-repeat;
        border: 0;
        border-radius: 50%;
        opacity: .5;
        border: 1px solid;
    }

    .btn-close:hover {
        background-color: red;
        border: 1px solid #fff;
    }
</style>

<header class="header-area">

    <!-- Start Top Header -->
    <div class="top-header wow fadeInDown">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <ul class="header-contact-info">
                        @if (isset($location_details))
                            <li><i class="fal fa-phone-volume"></i>
                                <a
                                    href="tel:{{ $location_details->phone_number }}">{{ $location_details->phone_number }}</a>
                            </li>
                        @else
                            <li><i class="fa fa-bullhorn"></i> <a href={{ route('patients.promotions') }}>Promotions</a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="headbox">

                        <div class="headbookapp"><a href={{ route('find_location') }}><i
                                    class="fas fa-map-marker-alt"></i> Find A Location</a></div>
                        <div class="headbookapp"><a href={{ route('book_appointment') }}>Book Appointment</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="klev-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                        <a class="navbar-brand wow fadeInLeft" href={{ route('index') }}>
                            {{-- <img src="assets/image/logo.png" alt="logo"> --}}
                            <img src={{ asset('monarch-frontend/image/logo.png') }} alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  mb-2 mb-lg-0">
                                <li class="nav-item {{ request()->segment(1) == '' ? 'active' : '' }}"><a
                                        href={{ route('index') }} class="nav-link">Home</a></li>
                                <li class="nav-item {{ request()->segment(1) == 'about' ? 'active' : '' }}"><a
                                        href={{ route('about') }} class="nav-link">About</a></li>
                                <li class="nav-item {{ request()->segment(1) == 'patient' ? 'active' : '' }}"><a
                                        href={{ route('patient') }} class="nav-link">Patients</a></li>
                                <li class="nav-item {{ request()->segment(1) == 'services' ? 'active' : '' }}"><a
                                        href={{ route('services') }} class="nav-link">Services</a></li>
                                <li class="nav-item {{ request()->segment(1) == 'find-location' ? 'active' : '' }}"><a
                                        href={{ route('find_location') }} class="nav-link">Find
                                        Location</a></li>
                                <li class="nav-item {{ request()->segment(1) == 'careers' ? 'active' : '' }}"><a
                                        href={{ route('careers') }} class="nav-link">Careers</a></li>
                                <li class="nav-item {{ request()->segment(1) == 'contact' ? 'active' : '' }}"><a
                                        href={{ route('contact') }} class="nav-link">Contact Us</a></li>
                            </ul>

                            @if (isset($location_details))
                            @else
                                <div class="others-option" id="burger">
                                    <div class="burger-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                        aria-controls="offcanvasRight">
                                        <img src={{ asset('monarch-frontend/image/hamburg.png') }}>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </nav>
            </div>
        </div>



        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header text-right">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h5 class="px-4">WHY US</h5>
                <section class="featured-services-area mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 p-0 col-md-6 col-sm-6">
                                <div class="featured-services-box">
                                    <div class="icon">

                                        {{-- <i class="fas fa-street-view"></i> --}}
                                        <img src={{ asset('monarch-frontend/image/homepage/Multiple-locations.png') }}
                                            alt="image" style="width: 35px">
                                    </div>

                                    <h3>Multiple Locations</h3>
                                    <p>Monarch Dentistry has 13 locations across Southern Ontario. For your convenience,
                                        we'll transfer files from office to office to visit any location! </p>

                                    <div class="shape"><img
                                            src={{ asset('monarch-frontend/image/homepage/line-shape.png') }}
                                            alt="image"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 p-0 col-md-6 col-sm-6">
                                <div class="featured-services-box">
                                    <div class="icon">
                                        {{-- <i class="fas fa-user-friends"></i> --}}
                                        <img src={{ asset('monarch-frontend/image/homepage/Family-Friendly.png') }}
                                            alt="image" style="width: 35px">

                                    </div>

                                    <h3>Family Friendly</h3>
                                    <p>Our highly-trained staff can provide quality dental care for your entire family!
                                        Drop by the Monarch Dentistry nearest you to receive the treatment.</p>

                                    <div class="shape"><img
                                            src={{ asset('monarch-frontend/image/homepage/line-shape.png') }}
                                            alt="image"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 p-0 col-sm-6">
                                <div class="featured-services-box">
                                    <div class="icon">
                                        {{-- <i class="fas fa-search-minus"></i> --}}
                                        <img src={{ asset('monarch-frontend/image/homepage/Advanced-technology.png') }}
                                            alt="image" style="width: 35px">
                                    </div>

                                    <h3>Advanced Technology</h3>
                                    <p>We utilize state-of-the-art technology in order to provide all of our patients
                                        with the best dental experience possible. </p>

                                    <div class="shape"><img
                                            src={{ asset('monarch-frontend/image/homepage/line-shape.png') }}
                                            alt="image"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 p-0 col-sm-6">
                                <div class="featured-services-box">
                                    <div class="icon">
                                        {{-- <i class="fas fa-user-graduate"></i> --}}
                                        <img src={{ asset('monarch-frontend/image/homepage/Friendly-staff.png') }}
                                            alt="image" style="width: 35px">
                                    </div>

                                    <h3>Friendly Staff</h3>
                                    <p>Our dental team is made up of experienced professional dentists and
                                        hygienists who understand your smile.</p>

                                    <div class="shape"><img
                                            src={{ asset('monarch-frontend/image/homepage/line-shape.png') }}
                                            alt="image"></div>
                                </div>
                            </div>



                        </div>
                    </div>
                </section>
                {{-- <h2 class="mt-4 text-danger text-center">519-304-6550</h2> --}}


                <ul class="social my-4">
                    <li><a href="https://mobile.twitter.com/monarchdentist" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/monarchdentistrycanada/" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- End Navbar Area -->
</header>
