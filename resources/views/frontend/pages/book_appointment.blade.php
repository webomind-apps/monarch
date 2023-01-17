@extends('frontend.layout.master')

@section('page-contents')
    <style>
        /* h1.anim-about strong {
                                                            font-size: 57px;
                                                            color: #043d72;
                                                            font-weight: 600;
                                                            animation: 1s 1.5s fadeInDown both;
                                                            line-height: 67px;
                                                            font-family: 'Oswald', sans-serif;
                                                        } */

        .square-shape {
            /* padding: 40px 0px 40px 0px; */
            padding: 40px 40px 62px 40px;
        }
    </style>
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid"
                        src={{ asset('monarch-frontend/image/book-an-appointment/book-an-appointment.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Book An <br> Appointment</strong>
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

    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="contact-inner">
                <div class="row m-0">
                    <div class="col-lg-7 col-md-12 p-0 wow fadeInRight">
                        <div class="contact-form">
                            <h2>Book an Appointment</h2>

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
                                            <input type="tel" name="phone_number" id="phone_number" required
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
                                            <label><i class="far fa-calendar"></i><span style="color: red">*</span></label>
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
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}" id="{{ $location->id }}">
                                                        {{ $location->name }} </option>
                                                @endforeach
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
                                    <div class="col-md-12 form-group">
                                        <div class="g-recaptcha" data-callback="validateCaptcha"
                                            data-sitekey="6LcIO8oiAAAAADaqoFOkE6XNb0niDUduHkebp6sK" disabled
                                            id="app-btn"></div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Send Message <i
                                                class="fas fa-paper-plane"></i></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 pt-5 px-4 wow flipInX">
                        <img src={{ asset('monarch-frontend/image/book-an-appointment/book_appointment.jpg') }}
                            alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-map"><img src={{ asset('monarch-frontend/image/book-an-appointment/bg-map.png') }}></div>
    </section>
    <!-- End Contact Area -->
@endsection

