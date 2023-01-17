@extends('frontend.layout.master')

{{-- @section('title')
    {{ $seo_contents->career_title }}
@endsection --}}
@section('title')
    <title>{{ $seo_contents->career_meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $seo_contents->career_meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $seo_contents->career_meta_keywords }}">
@endsection

@section('page-contents')
    <style>
        .square-shape {

            padding: 40px 40px 62px 40px;
        }
    </style>
    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            {{ session()->get('message') }}
        </div>
    @endif
    {{-- <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/career/career.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-7 col-sm-8 ms-auto">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Career</strong>
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
    </section> --}}
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/career/career.jpg') }} alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Career</strong>
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


    <div class="container career-container">
        <div class="row">
            <div class="career-wrapper col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h6>CAREERS</h6>
                        <h2>Becoming a Monarch Dentistry team member</h2>
                        <p>Monarch Dentistry is always looking for talented, experienced professionals to join our team. We
                            have 13 convenient locations and various positions available such as Associate Dentist, Dental
                            Assistants, Dental Hygienists, Office Manager, and Receptionist.</p>
                        <p>Please submit your contact information and upload your resume if you are interested in becoming a
                            Monarch Dentistry team member.</p>
                    </div>
                    <form method="POST" action="{{ route('career_form') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-12 mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon"><i class="far fa-user-secret"></i></div>
                                        <select name="position" required>
                                            <option value="" selected="selected">SELECT YOUR POSITIONS
                                            </option>
                                            <option value="position-1">POSITION-1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon"><i class="far fa-user-secret"></i></div>
                                        <input type="text" name="first_name" id="first_name" placeholder="FIRST NAME"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon"><i class="far fa-user-secret"></i></div>
                                        <input type="text" name="last_name" id="last_name" placeholder="LAST NAME"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon"><i class="far fa-envelope"></i></div>
                                        <input type="text" name="email" id="email" placeholder="YOUR EMAIL"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon"><i class="far fa-phone-alt"></i></div>
                                        <input type="text" name="phone_number" id="phone_number" 
                                            required placeholder="PHONE NUMBER">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                                        <select name="clinic_id" required>
                                            <option value="" selected="selected">CHOOSE LOCATION</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}" id="{{ $location->id }}"
                                                    name="clinic_id">
                                                    {{ $location->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon"><i class="fal fa-file-alt"></i></div>
                                        <input type="file" class="form-control" name="file" id="file"
                                            accept="application/pdf" placeholder="Resume" required>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="g-recaptcha" data-callback="validateCaptcha"
                                        data-sitekey="6LcIO8oiAAAAADaqoFOkE6XNb0niDUduHkebp6sK"></div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="send-msg-btn"  id="app-btn"> SUBMIT
                                        <div class="icon"> <i class="far fa-arrow-right"></i> </div>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


