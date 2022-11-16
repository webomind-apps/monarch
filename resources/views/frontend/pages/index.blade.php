@extends('frontend.layout.master')

@section('page-contents')
    <!-- Header -->
    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- End Header -->
    <!-- Start Bannner -->
    <section class="home-banner2">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item banner {{ $key == 0 ? 'active' : '' }}"
                        style="background-image: url({{ asset("storage/$slider->slider") }}); background-size: cover; background-repeat:no-repeat; background-position:center">
                        <div class="container ">
                            <div class="row ">
                                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                                    <div class="square-shape ">
                                        <h1 class="anim-2 white-color"><strong>{{ $slider->title }}</strong>
                                        </h1>
                                        <div class="tagline anim-3">{{ $slider->note }}</div>
                                        <div class="slider-button mobile_view anim-3">
                                            <a href={{ route('book_appointment') }} class="btn btn-primary">Book Appointment
                                                <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="i-left"> <i class="fas fa-chevron-left"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="i-right"> <i class="fas fa-chevron-right"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- Start Free Consultation Area -->
    <section class="featured-services-area">
        <div class="container">
            <div class="row">
                <div class="partner-slides owl-home-plan owl-carousel owl-theme">
                    @foreach ($advantages as $advantage)
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="featured-services-box">
                                <div class="icon">
                                    <img src={{ asset("storage/$advantage->icon_path") }} alt="image"
                                        style="width: 35px">
                                </div>
                                <h3>{{ $advantage->name }}</h3>
                                <p>{!! $advantage->description !!} </p>

                                <div class="shape"><img src={{ asset('monarch-frontend/image/homepage/line-shape.png') }}
                                        alt="image"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Free Consultation Area -->

    <!-- Start About Area -->
    <div id="home-about">
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 wow fadeInLeftBig">
                        <img src={{ asset("storage/$whoWeAreDetails->image") }} alt="">
                    </div>

                    <div class="col-lg-6 col-md-12 wow fadeInRightBig">
                        <div class="about-content">
                            {!! $whoWeAreDetails->description !!}
                            <a href={{ route('about.who_are_we') }} class="btn btn-primary">Learn More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End About Area -->

    <!-- Start FunFacts Area -->
    <section class="info-top">
        <div class="container">
            <h2 class="text-center text-white mb-4"
                style="font-size: 40px; font-weight: 400;font-family: Anton, sans-serif;">Promotion Plans</h2>
            <div class="row">
                <div class="partner-slides owl-home-plan owl-carousel owl-theme">
                    @foreach ($plans as $plan)
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="paketler wow bounceIn" data-wow-delay="0.5s"
                                onclick="location.href='{{ route('book_appointment') }}'"
                                style="cursor: pointer; visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                                <div class="hizmet-kutu">
                                    <div class="kutu-duzen">
                                        <h3><a href="#">{{ $plan->name }}</a></h3>
                                        <div class="boslukicon"></div>
                                        <div class="icon-box">
                                            <span class="border-layer"></span>
                                            <!-- <i class="flaticon-020-ekg-monitor"></i> -->
                                            <img src={{ asset("storage/$plan->icon_path") }}>
                                        </div>
                                        <p>{{ $plan->note }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->

    <!-- Start Services Area -->
    <section class="services-area ptb-100">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5 col-md-12 wow fadeInLeft">
                    <div class="services-title-content">
                        <h2>COVID-19 Update</h2>

                        {!! $covid_updates->covid_update !!}

                    </div>
                </div>

                <div class="col-lg-7 col-md-12 wow bounceIn">
                    <div class="services-slides owl-one owl-carousel owl-theme mbl-r">
                        @foreach ($services as $service)
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                                        <div class="single-services-box">
                                            <h3><img src={{ asset("storage/$service->icon_path") }} style="width: 50px;">
                                                {{ $service->name }}</h3>
                                            <p>{!! $service->description !!}</p>
                                            <a href={{ route('services_description', $service->slug) }}
                                                class="read-more-btn">Read More <i class="fa fa-arrow-right"></i></a>
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
    <!-- End Services Area -->
    <!-- Start Doctor Area -->
    <section class="doctor-area pt-5 extra-pb bg-image">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Partners</h2>
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 col-md-12 col-sm-12 m-auto">
                    <div class="partner-slides owl-partner owl-carousel owl-theme">
                        @foreach ($partners as $partner)
                            <div class="single-partner-item">
                                <a href="#">
                                    <img src={{ asset("storage/$partner->image") }} alt="image" style="width:95%">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
    <!-- End Doctor Area -->

    <!-- Start Free Consultation Area -->
    <section class="free-consultation-area pb-5 wow fadeInLeftBig">
        <div class="container">
            <div class="free-consultation-content">
                <h2>Get the right Dentist Book your Doctor</h2>

                <form action="{{ route('contact_us') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label><i class="fas fa-user-cog"></i></label>
                                <input type="text" class="form-control" name="first_name" placeholder="FIRST NAME"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label><i class="fas fa-user-cog"></i></label>
                                <input type="text" class="form-control" name="last_name" placeholder="LAST NAME"
                                    required>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label><i class="far fa-envelope"></i></label>
                                <input type="email" class="form-control" name="email" placeholder="YOUR EMAIL"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label><i class="fas fa-phone-volume"></i></label>
                                <input type="text" class="form-control" name="phone_number" placeholder="YOUR PHONE"
                                    required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label><i class="fas fa-street-view"></i></label>
                                <select class="form-select" name="clinic_id" required>
                                    <option value="" selected="selected">CHOOSE LOCATION</option>
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}" id="{{ $location->id }}">
                                            {{ $location->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 ">
                            <div class="form-group">
                                <label><i class="fal fa-comment-smile"></i></label>
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="YOUR MESSAGE" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="g-recaptcha" data-callback="validateCaptcha"
                                data-sitekey="6LcIO8oiAAAAADaqoFOkE6XNb0niDUduHkebp6sK"></div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Book Your Appointment <i
                                    class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Free Consultation Area -->
@endsection
