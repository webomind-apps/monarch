@extends('frontend.layout.master')

@section('page-contents')
    <section class="home-banner home-slider-two">
        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src={{ asset('monarch-frontend/image/service/sleep-dentistry.jpg') }}
                        alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8">
                                    <div class="square-shape">
                                        <h1 class="anim-about "><strong>Sleep Dentistry</strong>
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
                <h2>Sleep Dentistry</h2>

                <a href={{ route('services') }} class="btn btn-primary">Back <i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 wow fadeInUp" data-wow-duration="2s"
                    style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">

                    <div class="services-details-desc">
                        <p>Many individuals are nervous about undergoing dental treatment. According to studies, more than
                            half of patients are afraid of going to the dentist. As a result, people prefer to put off
                            necessary dental procedures that they need and deserve.</p>

                        <p>This might raise the likelihood of future pain and suffering. To keep you comfortable, our
                            trained dentists near you use a variety of efficient sedative procedures.</p>

                        <p>Dentists can sedate you using conscious or oral sleep dentistry. Our patients enjoy little to no
                            discomfort, even during difficult treatments, thanks to the advantages of sleep dentistry. Our
                            trained dentists can do in-office dental procedures while also optimising patient experience.
                        </p>

                        <h4>Different Types of Dental Sedation</h4>

                        <p>Our experienced dentists at Monarch Dentistry will record important health information, including
                            allergies to medication, and details about recent surgical and dental procedures.</p>

                        <h4>Common dental sedation techniques include:</h4>

                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> <strong>Oral Sedation</strong> – The patient may need to take
                                one pill 30 minutes or one hour before the scheduled procedure, as prescribed by our trained
                                dentists. Oral sedation relaxes the patient without putting them to sleep completely. You
                                will be able to respond to questions but will not experience any pain during treatment.</li>

                            <li><i class="fas fa-check"></i> <strong>Conscious or Intravenous Sedation</strong> –
                                Intravenous sleep dentistry results in reduced awareness and invokes a deep state of
                                relaxation. We will administer the medicine through an IV line, and the sedation medication
                                acts faster than oral pills.</li>
                        </ul>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInRight">
                    <div class="img-box-style8">
                        <div class="img-1"><img src={{ asset('monarch-frontend/image/service/sleep.jpg') }}
                                alt="About Image"></div>
                        <div class="shape-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFacts Area -->
@endsection
