@extends('frontend.layout.master')

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/orthodontics.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Orthodontics</strong>
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
                <span class="sub-title">Our Services</span>
                <h2>What We Offer for You to Our Patients to solve Cure</h2>

                <a href={{ route('services') }} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a>
            </div>

            <div class="row m-0">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.orthodontics.family_orthodontics') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Family-Orthodontics.png') }}
                                    style="width: 50px;"> Family
                                <br>Orthodontics
                            </h3>
                            <p>Orthodontics is the treatment of improperly positioned jaws and teeth in the mouth. Teeth
                                that are crooked..</p>

                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.orthodontics.invisalign') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Invasilgan.png') }}
                                    style="width: 50px;">Invisalign</h3>
                            <p><br>What images spring to mind when you consider orthodontic treatment? Do you picture a
                                young adolescent..</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->
@endsection
