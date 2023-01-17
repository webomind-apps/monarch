@extends('frontend.layout.master')

{{-- @section('title')
    {{ $financials->title }}
@endsection --}}
@section('title')
    <title>{{ $financials->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $financials->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $financials->meta_keywords }}">
@endsection

@section('page-contents')
    <style>
        /* h1.anim-about {
                    font-size: 60px !important;
                    color: #fff;
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


    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset("storage/$financials->banner") }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about white-color"><strong
                                                style="color:#fff !important">{{ $financials->title}}</strong>
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


    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 col-md-12 wow fadeInLeftBig">
                    <img src={{ asset("storage/$financials->image") }} alt="">
                </div>

                <div class="col-lg-6 col-md-12 wow fadeInRightBig">
                    <div class="about-content">

                        {!! $financials->description !!}


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

@endsection
