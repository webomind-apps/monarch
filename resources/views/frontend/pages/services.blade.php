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
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/services.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Services</strong>
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
            <h2 class="text-center mb-4" style="font-size: 40px; font-weight: 400;font-family: Anton, sans-serif;">Our
                Services</h2>
            <div class="row">
                @foreach($services as $key => $service)
                {{-- <div class="col-lg-3 col-md-12 @if($key%2 == 1) mt-5 @else   @endif"> --}}
                <div class="col-lg-3 col-md-12 {{ $key%2 == 1 ? 'mt-5' : '' }}">
                
                    <div class="paketler wow bounceIn thumb-pad1" data-wow-delay="0.5s"
                        onclick="location.href='{{ route('services_details', $service->slug) }}';"
                        style="cursor: pointer; visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                        <div class="hizmet-kutu">
                            <div class="kutu-duzen">
                                <h3><a href="about.php">{{$service->title}}</a></h3>
                                <div class="boslukicon"></div>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <img src={{ asset("storage/$service->icon") }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
