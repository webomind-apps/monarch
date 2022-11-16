@extends('frontend.layout.master')

@section('page-contents')
    <style>
        /* h1.anim-about {
                        font-size: 57px !important;
                        color: #043d72;
                        max-width: 60%;
                        font-weight: 500 !important;
                        animation: 1s 1.5s fadeInDown both;
                        line-height: 74px;
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
                    <img class="img-fluid" src={{ asset("storage/$images->banner") }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about"><strong style="color: #fff !important">
                                               {{ $images->title }}</strong>
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




    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <h2>Our Smile Gallery</h2>
            <div class="row align-items-center mt-5">
                @foreach ($smile_images as $image)
                    <div class="col-lg-3 col-md-12 wow fadeInLeftBig dreamit-single-team-box2">
                        <div class="single-team-thumb"><img
                                src={{ asset("storage/$image->images") }} alt="">
                            <div class="port-content-icon">
                                <a class="team-content-icon   " data-fancybox="gallery"
                                    href={{ asset("storage/$image->images") }}><i
                                        class="fas fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End About Area -->
@endsection
