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
                    <img class="img-fluid" src={{ asset("storage/$details->banner") }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>{{ $details->banner_header }}</strong>
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

    <!-- Start CTA Area -->

    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 wow fadeInLeftBig">
                    <img src={{ asset("storage/$details->image") }} alt="">
                </div>

                <div class="col-lg-6 col-md-12 wow fadeInRightBig">
                    <div class="about-content">
                       {!! $details->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


