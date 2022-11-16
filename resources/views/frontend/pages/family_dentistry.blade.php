@extends('frontend.layout.master')

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/family-dentistry.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Family Dentistry</strong>
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
    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title text-start">
                <span class="sub-title">Our Services</span>
                <h2>What We Offer for You to Our Patients to solve Cure</h2>

                <a href={{ route('services') }} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a>
            </div>

            <div class="row m-0">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.dental_exams_cleanings') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/dental.png') }} style="width: 50px;">
                                Dental Exams & Cleanings
                            </h3>
                            <p>Every dental checkup and professional teeth cleaning session will begin with a member of our
                                dental care team..</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.night_athletic_mouth_guard') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/night.png') }} style="width: 50px;">Night
                                & Athletic Mouth
                                Guards</h3>
                            <p>People have a serious problem with teeth grinding, and the main issue is that grinding teeth
                                erodes the biting..</p>

                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.child_dentistry') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/child-dentistry.png') }}
                                    style="width: 50px;"> Children’s
                                <br>Dentistry
                            </h3>
                            <p>Although general dentists may treat patients of all ages, including children, you may want to
                                investigate..</p>

                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.dental_emergency') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/dental-emergency.png') }}
                                    style="width: 50px;">Dental
                                <br>Emergency
                            </h3>
                            <p>A dental emergency can be defined as a sudden development of severe discomfort or when an
                                underlying condition..</p>

                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.teeth_whitening') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Teeth-Whitening.png') }}
                                    style="width: 50px;"> Teeth
                                <br>Whitening
                            </h3>
                            <p>A dazzling, brilliant grin draws attention! It is the most memorable aspect of one's face.
                                Unfortunately, without help,.</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.wisdom_teeth_extraction') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Wisdom-Teeth-Extraction.png') }}
                                    style="width: 50px;"> Wisdom
                                Teeth Extraction</h3>
                            <p>Wisdom teeth removal seems intimidating, but it’s important to know that it doesn't have to
                                be! Continue reading..</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.root_canal') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Root-Canals.png') }}
                                    style="width: 50px;"> Root <br>Canals</h3>
                            <p>Isn't it unfortunate that the root canal has such a bad rep? A root canal is linked to the
                                worst things in the world..</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.amalgam') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/amalgam-free-fillings.png') }}
                                    style="width: 50px;">Amalgam Free
                                Fillings</h3>
                            <p>If you peek into an elderly person's mouth, you may find a significant quantity of metal.
                                This is commonly done with amalgam..</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.cosmetic_bonding') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Cosmetic-Bonding.png') }}
                                    style="width: 50px;"> Cosmetic
                                <br>Bonding
                            </h3>
                            <p>Simply glancing at the number of commercials for a picture-perfect smile reveals that
                                healthy-looking teeth are high..</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.dental_veeners') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Dental-Veneers.png') }}
                                    style="width: 50px;"> Dental <br>Veneers
                            </h3>
                            <p>Your teeth go through a lot over time and might get discoloured or develop oral health
                                problems like infection or decay. .</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.crowns_caps') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Dental-Crowns-And-Caps.png') }}
                                    style="width: 50px;"> Dental
                                Crowns and Caps</h3>
                            <p>A crown is typically put in two visits to your dentist. Your dentist will inspect the tooth
                                at the initial session to establish..</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.procelian') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Porcelain-Inlays-Onlays.png') }}
                                    style="width: 50px;">Porcelain
                                Inlays & Onlays</h3>
                            <p>Your teeth are incredibly sturdy, yet they may still be damaged. For example, if proper
                                dental hygiene practises such as frequent..</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.denture') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Dentures-treatment.png') }}
                                    style="width: 50px;"> Dentures
                                <br>Treatment
                            </h3>
                            <p>More and more individuals appear to be seeking the perfect smile, but not everyone has the
                                financial means to pay for..</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <a href={{ route('services.family_dentistry.bridges_implants') }}>
                        <div class="single-services-box">
                            <h3><img src={{ asset('monarch-frontend/image/homepage/Bridges-&-Dental-Implants.png') }}
                                    style="width: 50px;">Bridges
                                & Dental Implants</h3>
                            <p>Aside from standard dentures, there are other forms of prostheses in use in dentistry
                                nowadays. The fact..</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->

@endsection
