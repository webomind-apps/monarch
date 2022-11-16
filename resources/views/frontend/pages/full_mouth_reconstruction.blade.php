@extends('frontend.layout.master')

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/full-mouth-reconstruction.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong style="color: #fff !important">Full Mouth
                                                Reconstruction</strong>
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
                <h2>Full Mouth Reconstruction</h2>

                <a href={{ route('services') }} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">
                        <p>Missing teeth cause shifting, rotting, an unpleasant bite, and more tooth loss. Full mouth
                            restoration will replace lost, decayed, or damaged teeth. The purpose of this procedure is to
                            restore your smile, ensure appropriate mouth function, and leave you feeling comfortable and
                            complete.</p>
                        <p>These objectives are met by obtaining x-rays, making diagnostic wax-ups, and developing an action
                            plan for the patient's specific needs, which may include dental crowns, white fillings,
                            dentures, or dental implants. We offer all-inclusive solutions.</p>

                        <p>If you've ever thought about getting a full smile makeover with full mouth reconstruction from a
                            dentist near you, you'll be relieved to know that Monarch Dentistry can supply every service
                            required in either an accelerated treatment protocol or a segmented treatment plan.</p>
                        <h4>Treatment Plan</h4>

                        <p>Many patients feel that a bright, white smile is the key to a smile makeover, so they schedule a
                            tooth whitening treatment before undergoing additional reconstructive operations such as tooth
                            replacement. By addressing your smile makeover in a methodical manner, our team can create a
                            treatment plan that incorporates operations in the sequence that best meets your current and
                            long-term requirements and goals.</p>

                        <p>Some of the most frequent full mouth reconstruction procedures include dental crowns and bridges,
                            dental veneers, dental implants, tooth extraction, dental aligners, gum disease therapy, and
                            more - but the key to a successful smile makeover is obtaining the treatments in the correct
                            order.</p>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/full-mouth.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->
@endsection
