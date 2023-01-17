@extends('frontend.layout.master')

{{-- @section('title')
    {{ $service_details->title }}
@endsection --}}
@section('title')
    <title>{{ $service_details->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $service_details->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $service_details->meta_keywords }}">
@endsection

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset("storage/$service_details->banner") }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>{{ $service_details->title }}</strong>
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

    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title text-start">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="sub-title">Our Services</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12"> <a href="{{ route('services') }}"
                            class="btn btn-primary">Back<i class="fa fa-arrow-left"></i></a> </div>
                </div>

                {{-- <h2>What We Offer for You to Our Patients to solve Cure</h2> --}}

                {{-- <a href={{ route('services') }} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a> --}}


            </div>

            {{-- {{dd($service_details->services())}} --}}
            <div class="row m-0">
                @foreach ($service_details->services as $item)
                    @php
                        $service = \App\Models\Services::find($item->minor_service_id);
                    @endphp

                    <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                        <a href={{ route('services_description', $service->slug) }}>
                            <div class="single-services-box">
                                <h3><img src={{ asset("storage/$service->icon_path") }} style="width: 50px;">
                                    {{ $service->name }}
                                </h3>
                                <p>{!! $service->description !!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
    </section>
@endsection
