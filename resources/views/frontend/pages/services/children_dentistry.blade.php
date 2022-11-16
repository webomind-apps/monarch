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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/childrens-dentistry.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Children's Dentistry</strong>
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
                <h2>Children's Dentistry</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">
                        <p>Although general dentists may treat patients of all ages, including children, you may want to
                            investigate children's dentistry to ensure that your kid receives the care that he or she
                            requires. This speciality treats children from infancy to puberty, including the use of sedation
                            dentistry for young patients who require it. At Monarch Dentistry, we strive to offer great
                            treatment for your children while also developing a positive connection with them in Ontario to
                            ensure that they maintain frequent appointments as they grow.</p>

                        <h4>Primary Teeth</h4>

                        <p>The primary teeth, sometimes known as "baby" teeth, begin to emerge between the ages of six and
                            twelve months. It is advised that children have their first dental appointment within six months
                            of the emergence of their first tooth, or by the age of one. The baby teeth will continue to
                            appear until about the age of three. There will be 20 primary teeth in total, which will begin
                            to fall out and be replaced by permanent teeth around the age of six.</p>

                        <h4>Good Oral Habits</h4>

                        <p>Brushing should be supervised until you are sure that your child can do it on their own without
                            accidentally swallowing the toothpaste. Fluoride is not recommended for children unless your
                            dentist specifically advises using it. Appointments to the dentist for a cleaning and exam
                            should be made every six months. If your child participates in sports activities, a sports guard
                            should be used. For quality dental care for your children in Ontario, come visit us at Monarch
                            Dentistry.</p>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/child.jpg') }} alt="">
                        </div>
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
