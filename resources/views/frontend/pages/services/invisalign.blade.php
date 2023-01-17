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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/invialign.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about"><strong>Invisalign</strong>
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
                <h2>Invisalign</h2>

                <a href={{ route('services.orthodontics') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="services-details-desc">
                        <p>What images spring to mind when you consider orthodontic treatment? Do you picture a young
                            adolescent with metal-plated teeth? To be honest, this is a true representation of many
                            orthodontic patients. Modern dentistry, on the other hand, has broadened our tooth-correction
                            possibilities. Invisalign discreet aligners are a transparent alternative to metal brackets and
                            wires.</p>
                        <p>Invisalign trays are constructed of transparent polyurethane plastic, as the name indicates. As a
                            result, transparent aligners are nearly undetectable. Invisalign is removable rather than glued
                            to the teeth like metal or transparent braces. Clear aligners are removable for social
                            occasions, eating, and, most importantly, cleaning and flossing your teeth.</p>

                        <h4>Benefits of Invisalign</h4>

                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> <strong>Clean your teeth easier</strong> — It is so much easier
                                to brush and floss your teeth properly with a removable orthodontic appliance. You will also
                                avoid the tooth discoloration that sometimes occurs with metal braces.</li>

                            <li><strong>Discreet orthodontic correction</strong> — Every patient has unique needs, and
                                Invisalign isn’t right for all. But, if you don’t feel that traditional metal brac<i
                                    class="fas fa-check"></i> kets and wires will fit into your lifestyle, you have a more
                                discreet option.</li>

                            <li><i class="fas fa-check"></i> <strong>No dietary restrictions</strong> — To avoid damaging
                                metal braces and wires, it is necessary to adhere to some diet modifications. With
                                Invisalign at Monarch Dentistry, you can continue to enjoy all your favorite foods.</li>

                            <li><i class="fas fa-check"></i> <strong>No irritation</strong> — The thin, flexible material of
                                which Invisalign is made will not irritate the soft tissues of the mouth, as metal wires and
                                braces can.</li>

                            <li><i class="fas fa-check"></i> <strong>A barrier against teeth grinding</strong> — Clear
                                aligners provide protection against clenching and grinding. The trays function as
                                mouthguards that will safeguard your teeth from excessive wear.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/invisalign.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->



@endsection
