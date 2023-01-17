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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/family-orthodontics.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Family Orthodontics</strong>
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
                <h2>Family Orthodontics</h2>

                <a href={{ route('services.orthodontics') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="services-details-desc">
                        <p>Orthodontics is the treatment of improperly positioned jaws and teeth in the mouth. Teeth that
                            are crooked or do not fit together properly are more difficult to clean and may be prone to
                            decay or gum disease. Improper alignment can also put strain on the teeth and chewing muscles,
                            resulting in headaches and pain in the shoulders or back.</p>

                        <p>Orthodontic therapy can improve the health of your mouth and make your smile more attractive.
                            Your teeth may also survive significantly longer, resulting in a smile that will look wonderful
                            for the rest of your life.</p>

                        <h4>Need for Orthodontics</h4>

                        <p>You may look at your smile and believe that you need braces or orthodontic treatment, but only a
                            dentist will be able to diagnose your orthodontic issues and determine whether or not you would
                            benefit from orthodontic treatment. X-rays, exams, and models of your teeth may be used to
                            determine how to correct your issues. Some of the things that make patients a good candidate for
                            orthodontic treatment include:</p>

                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> <strong>Overbite:</strong> Front teeth are too far forward</li>
                            <li><i class="fas fa-check"></i> <strong>Underbite:</strong> Lower teeth are too far
                                forward/Upper teeth too far back</li>
                            <li><i class="fas fa-check"></i> <strong>Open bite:</strong> Space between teeth when they come
                                together</li>
                            <li><i class="fas fa-check"></i> <strong>Crossbite:</strong> Upper and lower teeth meet when
                                biting together</li>
                            <li><i class="fas fa-check"></i> <strong>Spacing:</strong> Gaps or spaces exist between teeth
                            </li>
                            <li><i class="fas fa-check"></i> <strong>Crowding:</strong> The dental arch cannot accommodate
                                the teeth in the mouth</li>

                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/family-orthodontics2.jpg') }}
                                alt="About Image">
                        </div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->


@endsection
