<section class="cta-area ptb-100 mt-5">
    <div class="container">
        <div class="cta-content">
            <div class="icon">
                <img src={{ asset('monarch-frontend/image/contact/ambulance.png') }} alt="ambulance">
            </div>
            <h2>We accept Emergency walk-ins</h2>
            <p>Our Patients are always a priority and we do our best to accommodate those with pain and
                need to be seen by a Dentist.</p>
            {{-- <input type="text" id="addressInput_5" size="20" value="" mid="5"
                class="addressInput pac-target-input" placeholder="Enter Zip Code or City" autocomplete="off"> <span
                class="text-white">or</span>  --}}
            <span class="currentLocationfooter">
                <a href="{{ route('find_location') }}"><input class="button maplocatemebtn" id="currentLocationfooter"
                        mid="4" type="submit" value="Locate Me"></a>
            </span>
        </div>
    </div>
</section>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="#"><img src={{ asset('monarch-frontend/image/white-logo.png') }}
                                alt="image"></a>

                        <p>Monarch Dentistry has 13 convenient locations across Southern Ontario. Our dental team is
                            made up of energetic and experienced professional dentists and hygienists who understand the
                            power of your smile! </p>
                    </div>

                    <!--<ul class="social">
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          </ul>-->
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInDown">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>

                    <ul class="footer-quick-links">
                        <li>
                            <b>Family Dentistry</b>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.dental_exams_cleanings') }}>
                                Exams &amp; Cleanings </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.night_athletic_mouth_guard') }}>
                                Night &amp; Athletic Mouth Guards </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.child_dentistry') }}>
                                Children’s Dentistry </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.dental_emergency') }}>
                                Dental Emergency </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.wisdom_teeth_extraction') }}>
                                Wisdom Teeth Extraction </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.root_canal') }}>
                                Root Canals </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.amalgam') }}>
                                Amalgam Free Fillings </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.denture') }}>
                                Dentures </a>

                        </li>

                        <li>
                            <a href={{ route('services.family_dentistry.bridges_implants') }}>
                                Bridges &amp; Dental Implants </a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight">
                <div class="single-footer-widget">
                    <h3>Navigation links</h3>

                    <ul class="footer-quick-links">

                        <li>
                            <a href={{ route('index') }}>
                                Home </a>

                        </li>

                        <li>
                            <a href={{ route('about') }}>
                                About </a>

                        </li>

                        <li>
                            <a href={{ route('patient') }}>
                                Patients </a>

                        </li>

                        <li>
                            <a href={{ route('services') }}>
                                Services </a>

                        </li>

                        <li>
                            <a href={{ route('find_location') }}>
                                Find Location </a>

                        </li>
                        <li>
                            <a href={{ route('careers') }}>
                                Careers </a>
                        </li>
                        <li>
                            <a href={{ route('blogs') }}>
                                Blog </a>

                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-0 offset-sm-3 offset-md-3 wow fadeInUp">
                <div class="single-footer-widget">
                    <h3>Find Location</h3>
                    <ul class="footer-contact-info" id="footer">
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area wow fadeInUp">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <p><i class="far fa-copyright"></i> 2022 Monarch Dentistry.
                        Powered by  
                        <a
                            href="http://www.tastechnologies.com/" target="_blank">Tas Technologies</a>
                    </p>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6">

                </div>
            </div>
        </div>
    </div>
</footer>

<div class="go-top active"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
