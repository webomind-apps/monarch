@extends('frontend.layout.master')

{{-- @section('title')
  {{ $promotions->title }}
@endsection --}}
@section('title')
    <title>{{ $promotions->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $promotions->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $promotions->meta_keywords }}">
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
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset("storage/$promotions->banner") }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>{{ $promotions->title }}</strong>
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
    <section class="info-top" style="background: none;">
        <div class="container">
            <h2 class="text-center mb-4" style="font-size: 40px; font-weight: 400;font-family: Anton, sans-serif;">Promotion
                Plans</h2>
            <div class="row">

                @foreach ($promotions->promotions as $key => $promotion)
                    @php
                        $plan = \App\Models\Plan::find($promotion->plans_id);
                    @endphp
                    <div class="col-lg-3 col-md-12">
                        <div class="paketler wow bounceIn thumb-pad1" data-wow-delay="0.5s"
                            onclick="location.href='{{ route('book_appointment') }}';"
                            style="cursor: pointer; visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                            <div class="hizmet-kutu">
                                <div class="kutu-duzen">
                                    <h3><a href="#">{{ $plan->name }}</a></h3>
                                    <div class="boslukicon"></div>
                                    <div class="icon-box">
                                        <span class="border-layer"></span>
                                        <!-- <i class="flaticon-020-ekg-monitor"></i> -->
                                        {{-- <img src="assets/image/promotion/Complimentary-Orthodontic-Consultation.png"> --}}
                                        <img src={{ asset("storage/$plan->icon_path") }}>
                                    </div>
                                    <p>{{ $plan->note }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- End FunFacts Area -->
@endsection
