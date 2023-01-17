@extends('frontend.layout.master')

@section('page-contents')
    <style>
        /* h1.anim-about {
            font-size: 60px !important;
            color: #043d72;
            font-weight: 500 !important;
            animation: 1s 1.5s fadeInDown both;
            line-height: 70px !important;
            font-family: 'Oswald', sans-serif;
        } */

        .img-box-style8 .shape-1 {
            position: absolute;
            left: -25px;
            top: 12px;
            width: 90%;
            height: calc(100% - 30px);
            background-color: #1C6FAD;
            border-radius: 10px;
        }

        .img-box-style8 {
            position: relative;
            padding: 35px 0 0 0;
            margin: 0 0 30px 30px;
        }

        .img-box-style8 .img-1 img {
            position: relative;
            z-index: 3;
            border-radius: 10px;
        }

        .square-shape {
            /* padding: 40px 0px 40px 0px; */
            padding: 40px 40px 62px 40px;
        }

        .hizmet-kutu .kutu-duzen .icon-box img {
            position: relative;
            display: inline-block;
            font-size: 80px;
            background: #fff0;
            width: 140px;
            height: 140px;
            line-height: 130px;
            text-align: center;
            border-radius: 50%;
            color: #56BAD8;
            box-shadow: 0 0 50px rgb(0 0 0 / 10%);
            transition: all 500ms ease;
        }
    </style>

    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/dental-veneers.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about"><strong>Dental Veneers</strong>
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
    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title text-start">
                <h2>Dental Veneers</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">
                        <p>Your teeth go through a lot over time and might get discoloured or develop oral health problems
                            like infection or decay. The meals and beverages you consume both contribute to the hue of your
                            smile. When your teeth aren't bright and attractive, it might affect your confidence and make
                            you smile less. Your teeth may have an impact on every aspect of your life, but this does not
                            have to be a negative thing. Contact Monarch Dentistry to make an appointment with an Ontario
                            dentist who can restore your smile with dental veneers. Veneers are porcelain or composite resin
                            shells that are designed to mimic the appearance of your real teeth.</p>

                        <p>Veneers, whether porcelain or resin, are extremely robust. Both solutions may be worn for
                            extended periods of time and let you to eat and enjoy life without worrying about your teeth's
                            look. If properly cared for and placed, high-quality dental veneers can endure for more than a
                            decade. This means you'll be able to enjoy your lovely smile for the rest of your life.</p>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/dental_veneer.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->

@endsection
