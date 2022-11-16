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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/dental-crowns-and-caps.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about"><strong>Dental Crowns And Caps</strong>
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
                <h2>Dental Crowns And Caps</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="services-details-desc mb-xl-80">
                        <p>A crown is typically put in two visits to your dentist. Your dentist will inspect the tooth at
                            the initial session to establish the severity of your dental troubles and whether or not a crown
                            can be supported. If a crown can be placed, the tooth will be shaved down so that the crown may
                            be firmly placed on it.</p>

                        <p>Following the filing of the tooth, an imprint of your teeth will be utilised to make the crown,
                            and your dentist may supply you with a temporary crown. The temporary crown preserves the tooth
                            and gets you used to how your new crown will feel. The crown will be applied at your second
                            visit after it has been completed. </p>

                        <p>The temporary crown will be removed, and the permanent crown will be fitted to make sure that it
                            fits into the mouth and onto the tooth correctly. If the tooth needs any adjustments, your
                            dentist will make these corrections and then bond the crown to your tooth. Bonding it to the
                            tooth keeps it from slipping out of place of falling off of the tooth. Your crown will feel odd
                            at first, but soon it will feel just like one of your natural teeth.</p>

                        <p>Reasons To Have Crowns Put In
                        </p>
                        <p>Your dentist may recommend a dental crown for your teeth to accomplish any of the following:</p>

                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Replace old or damaged fillings</li>
                            <li><i class="fas fa-check"></i> Protect teeth from breaks and fractures</li>
                            <li><i class="fas fa-check"></i> Attach partials and bridges onto teeth</li>
                            <li><i class="fas fa-check"></i> Restore the beauty and function of teeth</li>
                            <li><i class="fas fa-check"></i> Cover dental implants when they have been installed</li>
                            <li><i class="fas fa-check"></i> Hide any discoloration in teeth</li>
                            <li><i class="fas fa-check"></i> Protect teeth after a root canal has been performed</li>
                        </ul>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/dental-crowns.jpg') }}
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
