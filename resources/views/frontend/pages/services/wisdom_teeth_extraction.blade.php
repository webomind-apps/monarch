@extends('frontend.layout.master')

@section('page-contents')
    <style>
        /* h1.anim-about {
                font-size: 60px !important;
                color: #fff;
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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/wisdom-teeth-extraction.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about"><strong style="color: #fff !important">Wisdom Teeth
                                                Extraction</strong>
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
                <h2>Wisdom Teeth Extraction</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">
                        <p>Wisdom teeth removal seems intimidating, but it’s important to know that it doesn't have to be!
                            Continue reading to discover more about this very simple operation, which can be performed at
                            Monarch Dentistry in Ontario. A comprehensive dental checkup will be conducted prior to the
                            actual tooth extraction to ensure that you do not have an infection caused by the wisdom tooth.
                            If you have an infection, you'll be given medication and told to come back when the illness has
                            passed. When you arrive to Monarch Dentistry for your treatment, you will be given a local
                            anaesthetic to numb the region surrounding the wisdom tooth. The dentist will numb the region
                            before opening up the gum tissue above the tooth and removing the tooth by separating it from
                            the bone.</p>
                        <p>Some patients will require sutures following surgery to prevent excessive bleeding. You will be
                            given gauze to insert between your gums and instructed to bite down gently to assist absorb the
                            bleeding, which will progressively diminish and should not last more than 24 hours.</p>

                        <p>Monarch Dentistry recommends using an ice pack every 10-15 minutes to minimise swelling. To
                            alleviate discomfort, apply moist heat, such as a warm washcloth. It is also advised that you
                            gargle with salt water for the first twenty-four hours following the treatment to assist
                            decrease discomfort. The good news is that your mouth may recover quite quickly following dental
                            operations. Any discomfort or pain should subside within a few days following your wisdom teeth
                            extraction.</p>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/wisdom.jpg') }}
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
