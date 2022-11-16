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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/amalgam-free-fillings.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                 <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Amalgam Free Filling</strong>
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
                <h2>Amalgam Free Fillings</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">
                        <p>If you peek into an elderly person's mouth, you may find a significant quantity of metal. This is
                            commonly done with amalgam fillings. It is a metallic solution used to repair cavities and
                            fissures in teeth. However, it goes without saying that this is not the ideal appearance for a
                            tooth. Back in the day, amalgam fillings were popular because they were simple to apply and
                            allowed the dentist to reassure the patient that the filling would stay. There are now
                            amalgam-free fillings that provide many of the same benefits.</p>

                        <h4>What is an Amalgam-Free Filling?</h4>
                        <p>An amalgam-free filling is just a fancy way of saying composite resin filling. These fillings are
                            the same as amalgam fillings in that the dentist is essentially gluing parts of the tooth
                            together so that the tooth’s structure can say intact. The composite dries to the same color as
                            your teeth, so essentially you are getting all the benefits of amalgam fillings without the
                            clear sign that you indeed have a filling. The amalgam free filling is indistinguishable to
                            people when you smile and laugh, and that’s why it is preferred to the amalgam filling.</p>

                        <p>The reason why folks need fillings is cavities. A dental cavity is the beginning of a bigger
                            problem. The problem being the enamel of the tooth is degraded in an area, and the tooth is
                            breaking down. If the cavity exposes the nerve root to the outside elements, then you could have
                            even more issues. The amalgam-free filling is what fills in the cavity and gives the tooth the
                            strength it needs to work as it did before the cavity.</p>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/Amalgam.jpg') }}
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
