@extends('frontend.layout.master')

{{-- @section('title')
    {{ $seo_contents->patients_title }}
@endsection --}}
@section('title')
    <title>{{ $seo_contents->patients_meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $seo_contents->patients_meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $seo_contents->patients_meta_keywords }}">
@endsection

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

    <!-- Header -->

    <!-- End Header -->
    <!-- Start Main Banner Area -->

    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/patient/patients.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Patients</strong>
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


    <section class="info-top" style="background: none;">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 offset-1">
                    <div class="paketler wow bounceIn" data-wow-delay="0.5s"
                        onclick="location.href='{{ route('patients.financials') }}';"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="financials.php">Financials</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <img src={{ asset('monarch-frontend/image/patient/flat1.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Info 2-->
                <div class="col-lg-3 col-md-12">
                    <div class="paketler wow bounceIn" data-wow-delay="0.6s"
                        onclick="location.href='{{ route('patients.promotions') }}';"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="promotions.php">Promotions</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <img src={{ asset('monarch-frontend/image/patient/flat2.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Info 3-->
                <div class="col-lg-3 col-md-12">
                    <div class="paketler wow bounceIn" data-wow-delay="0.7s" onclick="location.href='{{ route('patients.registartion_form') }}';"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.7s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="{{ route('patients.registartion_form') }}">Patient Registration Form</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <img src={{ asset('monarch-frontend/image/patient/flat3.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Info 4-->

            </div>
        </div>
    </section>
@endsection
