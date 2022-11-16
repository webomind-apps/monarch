@extends('frontend.layout.master')

@section('page-contents')
    {{-- <link rel="stylesheet" href="./assets/css/find-location.css"> --}}
    <link rel="stylesheet" href={{ asset('monarch-frontend/css/find-location.css') }}>

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 contact-banner px-0">
                <img src={{ asset('monarch-frontend/image/find-location/find-location.jpg') }} class="img-fluid"
                    alt="" srcset="">
                <div class="overlay-content">
                    <h2>Find Location</h2>
                </div>
            </div>
        </div>
    </div> --}}

    <section>
        <div id="map"></div>

    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-6 bg-red-strip">New location in Niagara coming soon</div>
        </div>
    </div>

    <section class="find-location">
        <div class="container">
            <h2>Find a Location</h2>

            {{-- find location --}}
            <div class="row m-0">
                <div class="col-md-6 offset-md-3 p-0 wow fadeInLeft contact-inner">
                    <div class="contact-form">
                        <form name="contactus" id='contactus' accept-charset='UTF-8' onsubmit="return checkformVal(this);"
                            class="form-horizontal">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-6">
                                    <div class="form-group">
                                        <label><i class="fal fa-map-marker-alt"></i></label>
                                        <input type="text" name="name" id="name" class="form-control" required
                                            placeholder="Enter Zip Code or City">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-2 col-1">
                                    <div class="form-group" style="line-height: 50px;">OR</div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-5 locate">
                                    <div class="form-group">
                                        <span class="currentLocationfooter">
                                            <a href="javascript:void()"><input class="button maplocatemebtn"
                                                    id="currentLocationfooter" mid="4" type="button"
                                                    onclick="getLocation()" value="Locate Me"></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group" style="margin-left: 4px">
                                        <label><i class="fa fa-circle-notch"></i></label>
                                        <select class="form-select" id="miles" name="Radius">
                                            <option selected disabled>Radius</option>
                                            <option value="1">1mi</option>
                                            <option value="5">5mi</option>
                                            <option value="10">10mi</option>
                                            <option value="25">25mi</option>
                                            <option value="50">50mi</option>
                                            <option value="75">75mi</option>
                                            <option value="100">100mi</option>
                                            <option value="150">150mi</option>
                                            <option value="200">200mi</option>
                                            <option value="300">300mi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <button type="button" id="btn-search-map" class="btn btn-primary">Search <i
                                            class="fas fa-search"></i></button>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <button type="button" id="btn-reset" class="btn btn-primary">Reset <i
                                            class="fas fa-trash-restore"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($locations as $item)
                    <div class="col-md-3">
                        <a href={{ route('detail_page', $item->slug) }}>
                            <div class="research-box">
                                <div class="research-box-bg">
                                    <img src="{{ asset("storage/$item->banner") }}" height="100px">
                                </div>
                                <div class="research-info text-center">
                                    <h4>{{ $item->name }}</h4>
                                    <p>{{ $item->address }}
                                        <br>
                                        <strong><a href="tel:(226) 400-0564"><i class="fa fa-phone-volume"></i>
                                                {{ $item->phone_number }}</a></strong>
                                    </p>
                                    <a href={{ route('detail_page', $item->slug) }}>
                                        <h3 class="title">Link</h3>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection

@push('scripts')
@endpush
