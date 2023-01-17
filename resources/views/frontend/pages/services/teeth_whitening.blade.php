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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/teeth-whitening.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about"><strong>Teeth Whitening</strong>
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
                <h2>Teeth Whitening</h2>

                <a href={{ route('services.family_dentistry') }} class="btn btn-primary">Back <i
                        class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="about-wrapper mb-xl-80">
                        <p>A dazzling, brilliant grin draws attention! It is the most memorable aspect of one's face.
                            Unfortunately, without help, it is difficult to maintain our teeth as white as they once were.
                            The good news is that Monarch Dentistry offers expert tooth whitening. Call our Ontario dentist
                            office now to find out whether dental bleaching is suitable for you! and learn more about Your
                            Teeth Whitening Options.</p>

                        <h4>The Process</h4>

                        <p>Professional teeth bleaching is performed in a dental office. The process will brighten your
                            smile safely and effectively. What’s more, it is one of the most affordable ways to enhance your
                            look. Depending on the whitening system used, the results can be quite dramatic. We offer both
                            in-office dental whitening and take-home kits.</p>

                        <p>In-office whitening can make your smile 3–8 shades whiter in just one hour. This is much faster
                            than over-the-counter dental whitening products. You can also choose to whiten your teeth on
                            your own. Take-home teeth whitening kits from your dentist are also an effective option.
                            However, it will take longer to achieve the desired level of whiteness. But you will enjoy
                            lasting results. Also, it is important to have a dental exam before starting any whitening
                            process. Your dentist in Ontario will make sure your teeth are healthy. Some types of
                            discoloration are caused by an oral health concern that requires treatment. Call Monarch
                            Dentistry today to schedule an exam and a tooth whitening evaluation.</p>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/teeth-wh.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->


@endsection
