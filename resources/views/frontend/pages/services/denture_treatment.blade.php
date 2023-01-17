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
                    <img class="img-fluid" src={{asset('monarch-frontend/image/service/dentures.jpg')}} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Dentures</strong>
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
                <h2>Dentures</h2>

                <a href={{route('services.family_dentistry')}} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">
                        <p>More and more individuals appear to be seeking the perfect smile, but not everyone has the
                            financial means to pay for cosmetic dentistry operations that are not normally covered by dental
                            insurance in Ontario. That is why Monarch Dentistry wants patients to know that various
                            solutions, including as complete or partial dentures, are available. Continue reading to find
                            out more.</p>

                        <h4>Wondering If You’re a Candidate?</h4>
                        <p>The chances are that if you’re constantly dealing with dental issues that have negatively
                            impacted your quality of life and self-esteem, you are indeed a perfect candidate for full or
                            partial dentures in Ontario from Monarch Dentistry. You might also be a candidate for permanent
                            dentures or dental implants. The best way to learn which restorative dental option will work
                            best for you, your lifestyle and your budget is to make an appointment for a consultation and
                            treatment plan. You can use our convenient online appointment tool or simply call a friendly
                            member of our dental care team.</p>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{asset('monarch-frontend/image/service/dentures-left.jpg')}} alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->


@endsection
