@extends('frontend.layout.master')

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    {{-- <img class="img-fluid" src="assets/image/service/sedation-dentistry.jpg" alt="..."> --}}
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/sedation-dentistry.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Sedation Dentistry</strong>
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
                    <a href={{ route('services.sedation_dentistry.iv_sedation') }}>
                        <div class="single-services-box">
                            {{-- <h3><img src="assets/image/homepage/IV-sedation.png" style="width: 50px;"> IV Sedation</h3> --}}
                            <h3><img src={{ asset('monarch-frontend/image/homepage/IV-sedation.png') }}
                                    style="width: 50px;"> IV Sedation</h3>
                            <p><br>One of the most common reasons individuals avoid having their teeth operated on is the
                                fear of pain and discomfort.</p>

                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.sedation_dentistry.laughing_gas') }}>
                        <div class="single-services-box">
                            {{-- <h3><img src="assets/image/homepage/Laughing-gas.png" style="width: 50px;">Laughing Gas</h3> --}}
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Laughing-gas.png') }}
                                    style="width: 50px;">Laughing Gas</h3>
                            <p><br>One of the most difficult difficulties in dentistry is ensuring that patients are
                                comfortable throughout a procedure.</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->
@endsection
