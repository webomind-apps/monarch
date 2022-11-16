@extends('frontend.layout.master')

@section('page-contents')
    <style>
        /* h1.anim-about {
                    font-size: 60px !important;
                    color: #043d72;
                    font-weight: 500 !important;
                    animation: 1s 1.5s fadeInDown both;
                    line-height: 67px;
                    font-family: 'Oswald', sans-serif;
                } */

        .square-shape {
            /* padding: 40px 0px 40px 0px; */
            padding: 40px 40px 62px 40px;
        }
    </style>


    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/about/about-us.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>About Us</strong>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
        </div>
    </section>
    <!-- End Main Banner Area -->


    <!-- Start FunFacts Area -->
    <section class="info-top" style="background: none;">
        <div class="container">
            <h2 class="text-center mb-4 mbl-f" style="font-size: 40px; font-weight: 400;font-family: Anton, sans-serif;">
                About Monarch dentistry</h2>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="paketler wow bounceIn" data-wow-delay="0.5s"
                        onclick="location.href='{{ route('about.who_are_we') }}'"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="#">Who We Are</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <img src={{ asset('monarch-frontend/image/about/who-we-are.png') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Info 2-->
                <div class="col-lg-3 col-md-12">
                    <div class="paketler wow bounceIn" data-wow-delay="0.6s"
                        onclick="location.href='{{ route('about.meet_the_doctors') }}'"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="#">Meet the Doctors</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <img src={{ asset('monarch-frontend/image/about/meet-the-Doctors.png') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Info 3
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="paketler wow bounceIn" data-wow-delay="0.7s" onclick="location.href='#';" style="cursor: pointer; visibility: visible; animation-delay: 0.7s; animation-name: bounceIn;">
                                                            <div class="hizmet-kutu">
                                                                <div class="kutu-duzen">
                                                                    <h3><a href="#">Blog</a></h3>
                                                                    <div class="boslukicon"></div>
                                                                    <div class="icon-box">
                                                                        <span class="border-layer"></span>
                                                                        <i class="fa fa-blog"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>-->
                <!--Info 4-->
                <div class="col-lg-3 col-md-12">
                    <div class="paketler wow bounceIn" data-wow-delay="0.8s"
                        onclick="location.href='{{ route('about.photo_gallery') }}'"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="#">Photo Gallery</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    {{-- <img src="assets/image/about/photo-gallery.png"> --}}
                                    <img src={{ asset('monarch-frontend/image/about/photo-gallery.png') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Info 5-->
                <div class="col-lg-3 col-md-12">
                    <div class="paketler wow bounceIn" data-wow-delay="0.8s"
                        onclick="location.href='{{ route('about.smile_gallery') }}'"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="#">Smile Gallery</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <img src={{ asset('monarch-frontend/image/about/smile-gallery.png') }}>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->

@endsection
