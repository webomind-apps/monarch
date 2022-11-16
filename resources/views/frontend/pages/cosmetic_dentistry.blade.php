@extends('frontend.layout.master')

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/cosmetic-dentistry.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                    <div class="square-shape">
                                        <h1 class="anim-about  "><strong>Cosmetic Dentistry</strong>
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
                <h2>Cosmetic Dentistry</h2>

                <a href={{ route('services') }} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp services-details-desc" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">


                    <h4>Teeth Whitening</h4>

                    <p>The color of your teeth can darken with age and with accumulation of surface stains. Monarch
                        Dentistry provides whitening services to remove stains and make your smile sparkle.</p>

                    <p>Here are some tips to keeping your teeth white and bright!</p>

                    <ul class="features-list mb-4">
                        <li><i class="fas fa-check"></i> Maintain a regular oral hygiene regime including brushing and
                            flossing</li>
                        <li><i class="fas fa-check"></i> Brush your teeth at least twice a day with whitening toothpaste
                        </li>
                        <li><i class="fas fa-check"></i> Floss at least once each day</li>
                        <li><i class="fas fa-check"></i> Schedule regular dental visits and cleanings</li>
                        <li><i class="fas fa-check"></i> Limit intake of liquids that cause stains such as red wine, coffee
                            and black tea</li>
                        <li><i class="fas fa-check"></i> Limit habits that cause colouring of teeth such as smoking and
                            chewing tobacco</li>
                    </ul>

                    <h4>Cosmetic Bonding</h4>

                    <p>Bonding is a treatment that can be used to restore decayed, chipped, fractured or discolored teeth.
                        Our dentists at Monarch Dentistry can help you find the perfect shade to mimic the appearance of
                        your natural teeth and keep consistency in your smile. Cosmetic bonding is an option for people of
                        every age, along with children, to fix small chips, close small gaps and provide erosion spots.</p>
                    <h4>Invisalign</h4>

                    <p>Invisalign Invisible braces help to straighten your teeth without traditional metallic brackets and
                        wires. Invisalign can correct many dental issues that include teeth gaps, alignment issues,
                        straightening of crooked or overlapping teeth and more! Invisalign provides many of the benefits of
                        traditional braces while offering the ease of brushing and flossing.</p>
                    <h4>Orthodontics</h4>

                    <p>It is strongly recommended that children are seen by the orthodontist by age 7. The very first
                        permanent molars and incisors have usually come in by that time and cross bites, crowding, and other
                        difficulties can be assessed. Often, when treatment is started early, orthodontists can guide the
                        development of the jaws and incoming permanent teeth. Early treatment can also regulate the width of
                        the upper and lower dental arches, gain space for permanent teeth, avoid the need for permanent
                        tooth extractions, reduce likelihood of impacted permanent teeth, correct thumb sucking and
                        eliminate abnormal swallowing or speech problems. To put it simply, early treatment may simplify
                        later treatment.</p>

                    <p>At Monarch Dentistry we offer orthodontics for patients of all ages. Its never too early or late to
                        perfect you smile. Contact Monarch Dentistry to book a consultation to discover what orthodontic
                        solution is right for you.</p>
                    <h4>Veneers</h4>

                    <p>Veneers are sturdy, thin pieces of porcelain which are bonded to the teeth. They’re used to repair
                        chipped, decayed or stained teeth and aid in closing gaps between teeth. With a little bit of
                        contouring, veneers may additionally correct teeth that are slightly crowded or overlapping.</p>
                    <h4>Crowns and Caps</h4>

                    <p>A crown or cap is a cover that fits over a tooth that’s been broken, badly stained, damaged by rot or
                        mis-shaped. A crown might be made of acrylic, metal, porcelain, or porcelain bonded to metal.
                        All-porcelain crowns have the look of natural teeth, and are typically used for front teeth, while
                        porcelain bonded to metal is commonly used for crowns in the rear of the mouth. Occasionally
                        all-metal crowns are used for back teeth.</p>
                    <h4>Porcelain Inlays/Onlays</h4>

                    <p>Porcelain Inlays and Onlays are an excellent option of treatment for restoring weak teeth and for
                        restoring more visible tooth surfaces. They offer an alternative to traditional composite fillings.
                        Inlays and onlays offer the safety and strength of a crown without the need for substantial teeth
                        guidance. They are custom designed to suit your enamel form and colour and are stronger and more
                        durable than composite restorations.</p>

                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/cosmetic_densitry.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->
@endsection
