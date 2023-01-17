@extends('frontend.layout.master')

{{-- @section('title')
    {{ $location_details->name }}
@endsection --}}
@section('title')
    <title>{{ $location_details->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $location_details->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $location_details->meta_keywords }}">
@endsection


@push('styles')
    <style>
        .color2 {
            color: #fff;
        }

        .hizmet-kutu .kutu-duzen h3 {
            margin-bottom: 8px;

        }

        .doctor-area.extra-pb {
            padding-bottom: 41px;
        }

        .hizmet-kutu .kutu-duzen {

            height: 390px;
        }

        .py-b {
            margin-top: 50px;
        }

        .vdcontainers video {
            width: 135%;
        }

        .owl-two button.owl-prev span {
            position: absolute;
            top: 5px;
            color: #fff !important;
            font-size: 50px !important;
            left: -26px;
        }

        .owl-two button.owl-next span {
            position: absolute;
            top: 5px;
            color: #fff !important;
            font-size: 50px !important;
            right: -23px;
        }

        .owl-theme .owl-nav [class*=owl-]:hover {
            background: #86979100;
            color: #FFF;
            text-decoration: none;
        }

        .owl-three button.owl-prev span {
            position: absolute;
            top: -4px;
            color: #b6b0b0 !important;
            font-size: 60px !important;
            left: 17px;
        }

        .owl-three button.owl-next span {
            position: absolute;
            top: 2px;
            color: #b6b0b0 !important;
            font-size: 60px !important;
            left: -31px;
        }

        .owl-five button.owl-prev span {
            position: absolute;
            top: 44px;
            color: #b6b0b0 !important;
            font-size: 60px !important;
            left: -37px;
        }

        .owl-five button.owl-next span {
            position: absolute;
            top: 44px;
            color: #b6b0b0 !important;
            font-size: 60px !important;
            right: -37px;
        }

        .sec-title {
            position: relative;
            margin-bottom: 70px;
        }

        .sec-title .title {
            position: relative;
            display: block;
            font-size: 16px;
            line-height: 1em;
            color: #ff8a01;
            font-weight: 500;
            background: rgb(247, 0, 104);
            background: -moz-linear-gradient(to left, rgba(247, 0, 104, 1) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
            background: -webkit-linear-gradient(to left, rgba(247, 0, 104, 1) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
            background: linear-gradient(to left, rgba(247, 0, 104) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F70068', endColorstr='#441066', GradientType=1);
            color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: 15px;
        }

        .sec-title h2 {
            position: relative;
            display: inline-block;
            font-size: 48px;
            line-height: 1.2em;
            color: #1e1f36;
            font-weight: 700;
        }

        .sec-title .text {
            position: relative;
            font-size: 16px;
            line-height: 28px;
            color: #888888;
            margin-top: 30px;
        }

        .sec-title.light h2,
        .sec-title.light .title {
            color: #ffffff;
            -webkit-text-fill-color: inherit;
        }

        .pricing-section {
            position: relative;
            padding: 60px 0 10px;
            overflow: hidden;
        }

        .pricing-section .outer-box {

            margin: 0 auto;
        }


        .pricing-section .row {
            margin: 0 -30px;
        }

        .pricing-block {
            position: relative;
            padding: 0 30px;
            margin-bottom: 40px;
            width: 380px;
        }

        .pricing-block .inner-box {
            position: relative;
            background-color: #ffffff;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            padding: 0 0 30px;
            max-width: 370px;
            margin: 0 auto;
            border-bottom: 5px solid #043d72;
            height: 417px;
        }

        .pricing-block .icon-box {
            position: relative;
            padding: 50px 30px 0;
            background-color: #1c6fad;
            text-align: center;
        }

        .pricing-block .icon-box:before {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 75px;
            width: 100%;
            border-radius: 50% 50% 0 0;
            background-color: #ffffff;
            content: "";
        }


        .pricing-block .icon-box .icon-outer {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #ffffff;
            border-radius: 50%;
            margin: 0 auto;
            padding: 10px;
        }

        .pricing-block .icon-box i {
            position: relative;
            display: block;
            height: 130px;
            width: 130px;
            line-height: 120px;
            border: 5px solid #1c6fad;
            border-radius: 50%;
            font-size: 50px;
            color: #1c6fad;
            -webkit-transition: all 600ms ease;
            -ms-transition: all 600ms ease;
            -o-transition: all 600ms ease;
            -moz-transition: all 600ms ease;
            transition: all 600ms ease;
        }

        .pricing-block .inner-box:hover .icon-box i {
            transform: rotate(360deg);
        }

        .pricing-block .price-box {
            position: relative;
            text-align: center;
            padding: 10px 20px;
        }

        .pricing-block .title {
            position: relative;
            display: block;
            font-size: 24px;
            line-height: 1.2em;
            color: #222222;
            font-weight: 600;
        }

        .pricing-block .price {
            display: block;
            font-size: 30px;
            color: #222222;
            font-weight: 700;
            color: #46605b;
        }


        .pricing-block .features {
            position: relative;
            max-width: 200px;
            margin: 0 auto 20px;


        }

        .pricing-block .features li {
            position: relative;
            display: block;
            font-size: 14px;
            line-height: 30px;
            color: #848484;
            font-weight: 500;
            padding: 5px 0;
            padding-left: 30px;
            border-bottom: 1px dashed #dddddd;
        }

        .pricing-block .features li:before {
            position: absolute;
            left: 0;
            top: 50%;
            font-size: 16px;
            color: #2bd40f;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
            content: "\f058";
            font-family: "Font Awesome 5 Free";
            margin-top: -8px;
        }

        .pricing-block .features li.false:before {
            color: #e1137b;
            content: "\f057";
        }

        .pricing-block .features li a {
            color: #848484;
        }

        .pricing-block .features li:last-child {
            border-bottom: 0;
        }

        .pricing-block .btn-box {
            position: relative;
            text-align: center;
        }

        .pricing-block .btn-box a {
            position: relative;
            display: inline-block;
            font-size: 14px;
            line-height: 25px;
            color: #ffffff;
            font-weight: 500;
            padding: 8px 30px;
            background-color: #043d72;
            border-radius: 10px;
            border-top: 2px solid transparent;
            border-bottom: 2px solid transparent;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -ms-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            transition: all 300ms ease;
        }

        .pricing-block .btn-box a:hover {
            color: #ffffff;
        }

        .pricing-block .inner-box:hover .btn-box a {
            color: #40cbb4;
            background: none;
            border-radius: 0px;
            border-color: #043d72;
        }

        .pricing-block:nth-child(2) .icon-box i,
        .pricing-block:nth-child(2) .inner-box {
            border-color: #1d95d2;
        }

        .pricing-block:nth-child(2) .btn-box a,
        .pricing-block:nth-child(2) .icon-box {
            background-color: #1d95d2;
        }

        .pricing-block:nth-child(2) .inner-box:hover .btn-box a {
            color: #1d95d2;
            background: none;
            border-radius: 0px;
            border-color: #1d95d2;
        }

        .pricing-block:nth-child(2) .icon-box i,
        .pricing-block:nth-child(2) .price {
            color: #1d95d2;
        }

        .pricing-block:nth-child(3) .icon-box i,
        .pricing-block:nth-child(3) .inner-box {
            border-color: #ffc20b;
        }

        .pricing-block:nth-child(3) .btn-box a,
        .pricing-block:nth-child(3) .icon-box {
            background-color: #ffc20b;
        }

        .pricing-block:nth-child(3) .icon-box i,
        .pricing-block:nth-child(3) .price {
            color: #ffc20b;
        }

        .pricing-block:nth-child(3) .inner-box:hover .btn-box a {
            color: #ffc20b;
            background: none;
            border-radius: 0px;
            border-color: #ffc20b;
        }

        .owl-four .owl-nav {
            display: none;
        }

        .info-top {
            padding: 50px 0 40px;

            background: linear-gradient(90deg, #1e61a6 0%, #14b4d0 100%);
            margin-top: 35px;
        }

        .cl-r p {
            color: #fff;
        }

        .cpi {
            margin-bottom: 1px;
        }

        @media screen and (max-width: 768px) {
            .doctor-area.extra-pb {
                padding-bottom: 54px !important;
            }

            .info-top {
                padding: 40px 0 !important;
                margin-top: 10px !important;
            }
        }

        /* advantages top list */
        .hederlocation {
            background: #14b4d0;
            background: linear-gradient(90deg, #1e61a6 0%, #14b4d0 100%);
            padding: 10px 0;
        }

        .hederlocation-inner {
            text-align: center;
        }

        .hederlocation-inner .finde-office-text,
        .mallocortxt {
            color: #ffffff;
        }

        .hederlocation-inner .finde-office-text {
            margin: 11px 10px 11px 0;
            text-align: center;
            display: inline-block;
            color: #ffffff;
            font-weight: normal;
            vertical-align: top;
            line-height: 1;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .hederlocation-inner .finde-office-text {
                width: 100%;
            }
        }

        /* review link section  */

        .review-section .review-box {
            height: 500px;
            width: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
            border: 1px solid #e1e1e1;
            padding: 20px;
        }

        .review-section .review-box::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        .review-section .review-box::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        .review-section .review-box::-webkit-scrollbar-thumb {
            background: rgb(207, 207, 207);
        }

        .eapps-widget-toolbar {
            position: absolute;
            top:
                -32px;
            display: none !important;
            left: 0;
            right: 0;
            display: block;
            z-index: 99999;
            padding-bottom:
                4px;
            transition: all .3s ease;
            pointer-events: none;
            opacity: 0;
        }
    </style>
@endpush


@section('page-contents')



    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            {{ session()->get('message') }}
        </div>
    @endif

    <section class="detail-banner">
        <div class="container-fluid px-0">
            <div class="hederlocation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hederlocation-inner">

                                @foreach ($location_details->advantagesToList as $advantagesTop)
                                    @php
                                        $advantagesTop = \App\Models\Advantage::find($advantagesTop->advantage_id);
                                    @endphp
                                    <div class="finde-office-text">
                                        <i class="fas fa-check"></i>
                                        {{-- Direct Billing To Insurance --}}
                                        {{ $advantagesTop->name }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($location_details->map_link)
                <div id="map1">
                    <iframe src="{{ $location_details->map_link }}" width="100%" height="100%" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            @else
                <section class="home-banner home-slider-two">
                    <div id="Bannerslider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src={{ asset("storage/$location_details->banner") }} alt="...">
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        </div>
    </section>

    <div class="container contact-container" id="locationIcon">
        <div class="row">
            <div class="contact-wrapper col-md-12">
                <div class="row">
                    <div class="col-md-4 contact-item">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <h6 class="color2">Location</h6>
                            <p class="color2"><b>{{ $location_details->name }}</b><br>{{ $location_details->address }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fal fa-calendar-check"></i>
                            </div>
                            <div class="content">
                                <h6 class="color2">Office Hours</h6>
                                <ul class="foothours">
                                    {!! $location_details->office_hours !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <h6 class="color2">Phone Number</h6>
                                <a
                                    href="tel:{{ $location_details->phone_number }}">{{ $location_details->phone_number }}</a>
                            </div>
                        </div>
                        @if ($location_details->fax_number)
                            <div class="contact-item" style="margin-top: -30px;">
                                <div class="icon">
                                    <i class="fal fa-fax"></i>
                                </div>
                                <div class="content">
                                    <h6 class="color2">Fax Number</h6>
                                    <a
                                        href="tel:{{ $location_details->fax_number }}">{{ $location_details->fax_number }}</a>
                                </div>
                            </div>
                        @endif
                        <div class="contact-item" style="margin-top: -30px;">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h6 class="color2">Email Address</h6>
                                <a href="mailto:{{ $location_details->email }}">{{ $location_details->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center py-2 new-location" style="background-color: #f70101;">
                        <h6 class="pt-1 text-white">New location in Niagara coming soon</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-area ptb-100">
        <div class="container">
            <div class="contact-inner">
                <div class="row m-0">
                    <div class="col-lg-7 col-md-12 p-0 wow fadeInRight">
                        <div class="contact-form">
                            <h2>Book an Appointment</h2>
                            @if ($location_details->appointment_note)
                                <p style="margin-top:-15px">{{ $location_details->appointment_note }}</p>
                            @else
                            @endif
                            <form action="{{ route('appointment') }}" method='post' enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <input type='hidden' name='submitted' id='submitted' value='1' />
                                <div><span class='error'></span></div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group" style="line-height: 55px;">
                                            <input type="radio" name="patient_type" value="New Patient" required> New
                                            Patient&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="patient_type" value="Returning Patient" required>
                                            Returning Patient

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label><i class="far fa-user"></i><span style="color: red">*</span></label>
                                            <input type="text" name="full_name" id="full_name" class="form-control"
                                                required placeholder="FULL NAME">

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label><i class="far fa-phone-volume"></i><span
                                                    style="color: red">*</span></label>
                                            <input type="text" name="phone_number" id="phone_number" required
                                                class="form-control" placeholder="YOUR PHONE">

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label><i class="far fa-envelope-open"></i><span
                                                    style="color: red">*</span></label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                required placeholder="YOUR EMAIL">

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label><i class="far fa-calendar"></i><span
                                                    style="color: red">*</span></label>
                                            <input type="date" name="date" id="date" class="form-control"
                                                required placeholder="PREFFERED DATE" min="<?= date('Y-m-d') ?>">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label><i class="far fa-clock"></i><span style="color: red">*</span></label>
                                            <select class="form-select" name="time" required>
                                                <option value="" selected="selected">Preferred Time</option>
                                                <option value="Morning">Morning</option>
                                                <option value="Afternoon">Afternoon</option>
                                                <option value="Evening">Evening</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label><i class="far fa-street-view"></i><span
                                                    style="color: red">*</span></label>
                                            <select class="form-select" name="clinic_id" required>
                                                <option value="" selected="selected">Choose Location
                                                </option>
                                                <option value="{{ $location_details->id }}" name="clinic_id"
                                                    selected="selected">
                                                    {{ $location_details->name }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label><i class="far fa-comments"></i><span
                                                    style="color: red">*</span></label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                                placeholder="YOUR MESSAGE" required></textarea>

                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="g-recaptcha"
                                                data-sitekey="6LcWvysfAAAAAMy7upCse01RYeMolj2AIwDPN_mz"></div>
                                        </div>
                                    </div> --}}

                                    <div class="col-md-12 form-group">
                                        <div class="g-recaptcha" data-callback="validateCaptcha"
                                            data-sitekey="6LcIO8oiAAAAADaqoFOkE6XNb0niDUduHkebp6sK"></div>
                                    </div>
                                    {{-- <div class="col-12 text-center">
                                        <!-- <button class="g-recaptcha vs-btn" id="app-btn" data-sitekey="6Lf_h58iAAAAADsLSRj3Kytmm3uQtbPV8vGpL0o3" data-callback='onSubmit' data-action='submit'>Submit</button> -->
                                        <button class="btn" disabled id="app-btn" name="dfgfshdhdf">Send Message</i></button>
                                    </div> --}}

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-primary" id="app-btn">Send
                                            Message <i class="fa fa-paper-plane"></i></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    @if ($location_details->google_review_link)
                        <div class="col-md-5 px-5 review-section">
                            <div class="review-box">
                                {{-- <div class="elfsight-app-2c83bda2-858d-4d6c-9945-0faa79562835"></div> --}}
                                {!! $location_details->google_review_link !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="bg-map"><img src={{ asset('monarch-frontend/image/book-an-appointment/bg-map.png') }}></div>
    </section>


    <!-- ////////bg col/////       -->
    <div class="container about-bg">
        <div class="bg-col-change">
            <div class="pad-color">
                <div class="row">

                    <div class="col-md-12 ">
                        <p class="cl-ph">
                            {!! $location_details->description !!}
                        </p>
                        <p class="h-tes">
                            <a href="tel:{{ $location_details->phone_number }}"
                                class="btn btn-primary">{{ $location_details->phone_number }} <i
                                    class="fa fa-phone"></i></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ////end bg/// -->

    <!-- Start Services Area -->
    <section class="services-area ptb-100" id="service-area">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5 col-md-12 wow fadeInLeft">
                    <div class="services-title-content">
                        <h2>COVID-19 Update</h2>
                        {{-- <ul class="features-list"> --}}
                        {{-- <li> --}}
                        {!! $location_details->covid_update !!}
                        {{-- </li> --}}
                        {{-- </ul> --}}
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 wow bounceIn" id="service-slide">
                    <div class="services-slides owl-one owl-carousel owl-theme mbl-r">
                        @foreach ($location_details->services as $service)
                            @php
                                $service = \App\Models\Services::find($service->service_id);
                            @endphp
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                                        <div class="single-services-box">
                                            {{-- <h3><img src={{ asset('monarch-frontend/image/homepage/dental.png') }} --}}
                                            <h3><img src={{ asset("storage/$service->icon_path") }} style="width: 50px;">
                                                {{ $service->name }}</h3>
                                            <p>{!! $service->description !!}</p>
                                            <a href="{{ $service->url }}" class="read-more-btn">Read More <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{-- <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                                    <div class="single-services-box">
                                        <h3><img src={{ asset('monarch-frontend/image/homepage/child-dentistry.png') }}
                                                style="width: 50px;">
                                            Children’s <br>Dentistry</h3>
                                        <p>Although general dentists may treat patients of all ages, including children, you
                                            may want to investigate..</p>
                                        <a href="{{ route('services.family_dentistry.child_dentistry') }}"
                                            class="read-more-btn">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div> --}}

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    @if ($location_details->plans()->exists())
        <section class="doctor-area pt-5 pb-5" id="promotion-plans">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                        <h1 class="text-white mb-4">Promotion Plans</h1> --}}
                    <div class="row">
                        <div class="col-md-12 mb-1 text-center">
                            <div class="section-title text-center">
                                <h2 class="text-white">Promotion Plans</h2>
                            </div>
                        </div>
                    </div>
                    <div class="partner-slides owl-plan owl-carousel owl-theme">
                        @foreach ($location_details->plans as $plan)
                            @php
                                $plan = \App\Models\Plan::find($plan->plan_id);
                            @endphp
                            <div class="single-partner-item">
                                <div class="paketler wow bounceIn" data-wow-delay="0.5s"
                                    onclick="location.href='{{ route('book_appointment') }}';"
                                    style="cursor: pointer; visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                                    <div class="hizmet-kutu">
                                        <div class="kutu-duzen">
                                            <h3 class="promotion-title"><a href="#">{{ $plan->cost }}
                                                    <br>{{ $plan->name }} </a></h3>
                                            <div class="boslukicon"></div>
                                            <div class="icon-box">
                                                <span class="border-layer"></span>
                                                {{-- <img src="{{ asset('monarch-frontend/image/patient/flat1.png') }}" --}}
                                                <img src="{{ asset("storage/$plan->icon_path") }}" alt="">
                                            </div>
                                            @if ($plan->note)
                                                <p>{{ $plan->note }}</p>
                                            @else
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endif

    <section class="featured-services-area" id="advantage-sec">
        <div class="container">
            <div class="row">
                <section class="gallery-section">
                    <div class="container">
                        <h2>Video Gallery</h2>
                        <div class="row d-flex justify-content-center">
                            @foreach ($location_details->Videos as $video)
                                @php
                                    $video = \App\Models\ClinicVideo::find($video->id);
                                @endphp
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class=" vdcontainers" style="margin-top: -50px">
                                        <a href={{ asset("storage/$video->video_path") }} data-fancybox="gallery">
                                            <video controls="" loop="true" width="500px" id="myVideo"
                                                poster="{{ asset('monarch-frontend/image/homepage/video-image.jpg') }}">
                                                <source src={{ asset("storage/$video->video_path") }} type="video/mp4">
                                            </video>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
    </section>


    <!-- Start Free Consultation Area -->
    @if ($location_details->advantages()->exists())
        <section class="featured-services-area" id="advantage-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-1 text-center">
                        <div class="section-title text-center">
                            <h2>Advantage</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="partner-slides owl-seven owl-carousel owl-theme">
                        @foreach ($location_details->advantages as $advantage)
                            @php
                                $advantage = \App\Models\Advantage::find($advantage->advantage_id);
                            @endphp
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="featured-services-box">
                                    <div class="icon">
                                        <img src="{{ asset("storage/$advantage->icon_path") }}" style="width: 50px;">
                                    </div>
                                    <h3>{{ $advantage->name }}</h3>
                                    <p>{!! $advantage->description !!} </p>
                                    <div class="shape"><img
                                            src={{ asset('monarch-frontend/image/homepage/line-shape.png') }}
                                            alt="image"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- End Free Consultation Area -->


    <!-- gallery  -->

    <section class="pt-5 mt-5 extra-pb bg-image" id="gallery">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Gallery</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="partner-slides owl-gallery owl-carousel owl-theme">
                        @foreach ($location_details->images as $image)
                            @php
                                $image = \App\Models\ClinicGallery::find($image->id);
                            @endphp
                            {{-- <a href="assets/image/find-location/2-1.jpeg" data-fancybox="gallery"> --}}
                            <a href={{ asset("storage/$image->gallery_path") }} data-fancybox="gallery">
                                <div class="item-box">
                                    {{-- <img src="assets/image/find-location/2-1.jpeg" alt="img-2" srcset=""> --}}
                                    <img src={{ asset("storage/$image->gallery_path") }} alt="img-2" srcset="">
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
@endsection
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
