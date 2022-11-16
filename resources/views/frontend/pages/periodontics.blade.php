@extends('frontend.layout.master')

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/paeriodic4.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about  "><strong>Periodontics</strong>
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
                <h2>Periodontics</h2>

                <a href={{ route('services') }} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="services-details-desc">
                        <p>Unfortunately, many of us take our teeth for granted. Gum tissue supports our teeth in place
                            while also acting as a barrier against oral germs. Food debris and germs can enter the soft
                            tissue and cause gum disease to develop in the absence of proper gum care. Our highly skilled
                            dentists in your area provide sophisticated conservative and surgical periodontal care.</p>

                        <p>Signs That You Need Periodontics</p>

                        <p>Healthy gums appear firm and pink to touch, while unhealthy gums may appear red, swollen, tender,
                            and sore.</p>

                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> <strong>Red and Swollen Gums</strong> – Oral bacteria attack
                                the base of the teeth near the gum line and cause inflammation and irritation of gum tissue.
                            </li>

                            <li><i class="fas fa-check"></i> <strong>Bleeding Gums</strong> – If you notice regular bleeding
                                from the gums, it could be due to advancing gum disease. The continued bleeding may also
                                cause a metallic taste in the mouth.</li>

                            <li><i class="fas fa-check"></i> <strong>Bad Breath</strong> – When bacteria act on trapped food
                                particles, they produce foul-smelling gases and toxins that result in bad breath. Halitosis,
                                or bad breath, is often an indication of gum disease.</li>

                            <li><i class="fas fa-check"></i> <strong>Loose Teeth</strong> – Loose teeth occurs when bacteria
                                attack the surrounding bone and may indicate advanced gum disease or periodontitis.</li>
                        </ul>

                        <h4 class="pt-4">Periodontal Disease Treatment at Monarch Dentistry</h4>

                        <p>Once we evaluate your oral cavity, our skilled dentists will determine the most suitable
                            treatment for your needs:</p>

                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> <strong>Scaling and Root Planing</strong> – We will perform a
                                deep cleaning of teeth and gums to eliminate tartar and calculus from below the gum line and
                                between the teeth.</li>

                            <li><i class="fas fa-check"></i> <strong>Antibiotics</strong> – Our skilled dentists may place
                                antibiotic sachets in the gum pockets or prescribe oral medication to clear up the bacterial
                                infection.</li>

                            <li><i class="fas fa-check"></i> <strong>Gum Surgery</strong> – In advanced cases, we may need
                                to perform gum surgery to eliminate the infection.</li>
                        </ul>

                        <p>Untreated periodontal disease can increase the risks of stroke, cardiovascular disease and cause
                            pregnancy complications. To learn more, please book a consultation at Monarch Dentistry for a
                            consultation today.</p>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/periodontics.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->
@endsection
