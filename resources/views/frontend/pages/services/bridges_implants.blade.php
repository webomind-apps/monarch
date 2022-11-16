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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/bridges-dental-implants.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about  "><strong>Bridges Dental Implants</strong>
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
                <h2>Bridges Dental Implants</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">


                        <p>Aside from standard dentures, there are other forms of prostheses in use in dentistry nowadays.
                            The fact is that most people do not have a whole set of teeth missing, necessitating dentures,
                            but rather are missing teeth here and there, leaving empty areas in their mouth. Of course, no
                            one likes to have gaps in their mouth since it makes you less likely to smile and impairs your
                            oral hygiene. The good news is that there are options for a mouth with some empty areas, and
                            bridges and dental implants are two of the most common. These prostheses are intended to fill in
                            the gaps in your mouth so well that only a trained eye can tell the difference.</p>
                        <h4>Bridges</h4>
                        <p>The way bridges work is that they use the adjacent teeth for support. You can have a bridge of up
                            to three teeth, provided that there is support on either side. The bridges essentially will clip
                            onto the healthy teeth and should fit properly in the gap. The dentist may have to do a little
                            filing just to make the bridge fit right, but this is not to the detriment of the teeth. Bridges
                            also can be removed easily.</p>
                        <h4>Implants</h4>
                        <p>Dental implants are permanent bridges except they do not require using the adjacent teeth for
                            support. These implants are notable because while they are more expensive than bridges, they are
                            quite strong and can handle the duty of a regular tooth. The best part about implants is that
                            they are designed to last for a long time. While the price tag for some may seem a bit
                            prohibitive, the reality is that there are amazing benefits that you get with implants that you
                            won’t get with other types of dental prosthetics, durability being the most prominent of the
                            benefits.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/bridges.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->


    <!-- Start CTA Area -->
    <section class="cta-area ptb-100">
        <div class="container">
            <div class="cta-content">
                <div class="icon">
                    <img src={{ asset('monarch-frontend/image/contact/ambulance.png') }} alt="ambulance">
                </div>
                <h2>Emergency Medical Care 24/7</h2>
                <p>With access to 24 hour emergency assistance, It’s so important you can continue to help others.</p>
              {{-- <input type="text" id="addressInput_5" size="20" value="" mid="5"
                    class="addressInput pac-target-input" placeholder="Enter Zip Code or City" autocomplete="off"> <span
                    class="text-white">or</span>  --}}
                    <span class="currentLocationfooter">
                        <a href="{{ route('find_location') }}"><input class="button maplocatemebtn" id="currentLocationfooter"
                                mid="4" type="submit" value="Locate Me"></a>
                    </span>
            </div>
        </div>
    </section>
    <!-- End CTA Area -->
@endsection
