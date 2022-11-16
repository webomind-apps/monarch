@extends('frontend.layout.master')

@section('page-contents')
    <style>
        .color2 {
            color: #fff;
        }
    </style>

    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 contact-banner px-0">
                <img src={{ asset("storage/$contacts->banner") }} class="img-fluid" alt=""
                    srcset="">
                <div class="overlay-content">
                    <h2>{{$contacts->banner_header}}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container contact-container">
        <div class="row">
            <div class="contact-wrapper col-md-12">
                <div class="row">
                    <div class="col-md-4 contact-item">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <h6 class="color2">Location</h6>
                            <p class="color2">{{ $contacts->address }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-item">
                        <div class="icon">
                            <i class="fal fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h6 class="color2">Phone Number</h6>
                            <a href="tel:{{ $contacts->phone_number }}">{{ $contacts->phone_number }}</a>
                        </div>
                    </div>
                    <div class="col-md-4 contact-item">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h6 class="color2">Email Address</h6>
                            <a href="mailto:info@monarchdentistry.ca">{{$contacts->email}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-form-map">
        <div class="container ">
            <div class="contact-inner">
                <div class="row">
                    <div class="col-md-7 form-section">
                        <h6>CONTACT</h6>
                        <h2>Drop us Message for any Query</h2>

                        <form action="{{ route('contact_us') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="input-container">
                                <div class="input-group">
                                    <div class="icon"><i class="far fa-user-secret"></i></div>
                                    <input type="text" name="first_name" id="first_name" placeholder="FIRST NAME" required>
                                </div>
                                <div class="input-group">
                                    <div class="icon"><i class="far fa-user-secret"></i></div>
                                    <input type="text" name="last_name" id="last_name" placeholder="LAST NAME" required>
                                </div>
                                <div class="input-group">
                                    <div class="icon"><i class="far fa-phone-alt"></i></div>
                                    <input type="tel" name="phone_number" id="phone_number" placeholder="YOUR PHONE" required>
                                </div>

                                <div class="input-group-lg">
                                    <div class="icon"><i class="far fa-envelope"></i></div>
                                    <input type="email" name="email" id="email" placeholder="YOUR EMAIL" required>
                                </div>

                                <div class="input-group-lg">
                                    <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <select name="clinic_id" required>
                                        <option value="" selected="selected">CHOOSE LOCATION</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}" id="{{ $location->id }}">
                                                {{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group-xl">
                                    <div class="icon"><i class="fal fa-comment-smile"></i></div>
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="YOUR MESSAGE" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="g-recaptcha" data-callback="validateCaptcha"
                                    data-sitekey="6LcIO8oiAAAAADaqoFOkE6XNb0niDUduHkebp6sK"></div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="send-msg-btn">
                                    Send Message
                                    <div class="icon">
                                        <i class="fas fa-paper-plane"></i>
                                    </div>
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-5 map-section">
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.3276519229516!2d-80.24408378497516!3d43.13964849350484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c6679ed555347%3A0x5d49156ccbe3156f!2s603%20Colborne%20St%20E%2C%20Brantford%2C%20ON%20N3S%207S8%2C%20Canada!5e0!3m2!1sen!2sin!4v1664781240803!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        <iframe
                            src="{{ $contacts->map_link}}"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-map">
            <img src="./bg-map.png" alt="">
        </div>
    </section>
@endsection
