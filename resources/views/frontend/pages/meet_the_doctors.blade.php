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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/about/meet-the-doctor.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about"><strong>Meet The Dentists</strong>
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
            <h2>Our Talented Team</h2>
            <p>Our team is made up of experienced dental professionals who are devoted to providing the best care and
                service. Our specialists below are only a few of our talented and caring team of dentists, hygienists and
                support staff.</p>
            @foreach ($doctors as $doctor)
                <div class="row align-items-start mt-5">
                    <div class="col-lg-3 col-md-12 wow flipInX">
                        <img src={{ asset("storage/$doctor->image") }} alt="">
                    </div>
                    <div class="col-lg-8 col-md-12 wow fadeInRightBig">
                        <div class="about-content">
                            <h3>{{ $doctor->name }}</h3>
                            <h6>{{ $doctor->designation }}</h6>
                            {!! $doctor->description !!}
                            <br>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End About Area -->

@endsection
