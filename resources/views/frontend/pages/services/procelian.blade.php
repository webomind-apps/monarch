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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/porcelain-inlays-onlays.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Porcelain Inlays Onlays</strong>
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
                <h2>Porcelain Inlays Onlays</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="services-details-desc">
                        <p>Your teeth are incredibly sturdy, yet they may still be damaged. For example, if proper dental
                            hygiene practises such as frequent brushing and flossing are not maintained, teeth may develop
                            tooth rot (cavities). In addition, teeth can be damaged by injury or stress. Small areas of
                            damage, like as cavities, are generally efficiently addressed with a dental filling, however
                            severe damage or decay may need the use of a crown. However, sometimes the damage falls
                            somewhere in the between, when a filling is insufficient to fix the condition but a crown would
                            necessitate extensive dental treatment. In certain circumstances, a dental inlay or onlay may be
                            the solution. </p>
                        <h4>Benefits of Inlays and Onlays</h4>
                        <p>Both restorations are custom-made for a patient and are bonded to an affected tooth or teeth. In
                            this way, they effectively repair damage and restore functionality and appearance to a tooth.
                            Benefits of both restorations include:</p>
                        <p>Preserve more of the natural tooth (dental crowns require a certain portion of a tooth to be
                            filed down):</p>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Look natural</li>
                            <li><i class="fas fa-check"></i> Strengthen the structure of a tooth</li>
                            <li><i class="fas fa-check"></i> Are durable and withstand forces well</li>
                        </ul>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/Porcelain.jpg') }}
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
