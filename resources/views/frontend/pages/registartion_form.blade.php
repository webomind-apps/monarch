@extends('frontend.layout.master')

@section('page-contents')
    <section>
        <div class="container pt-5">
            <div class="form-wrapper">
                <div class="row">
                    <div class="col-md-6 patientformheadtitle">
                        <h1>COVID-19 Pandemic Consent Form</h1>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src={{ asset('monarch-frontend/image/logo.png') }} alt="logo" class="main-logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session()->has('message'))
        <div class="alert alert-success" style="text-align: center">
            {{ session()->get('message') }}
        </div>
    @endif
    <section class="bg-light inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 required-field text-end">
                    <p>*Required Fields</p>
                </div>

                <div class="col-lg-12">
                    <p> I, (patient/guardian) knowingly and willingly consent to have dental treatment during the COVID-19
                        pandemic.
                        I understand that the COVID-19 virus has a long incubation period during which carriers of the virus
                        may not
                        show symptoms and still be highly contagious. It is impossible to determine who has it and who does
                        not given
                        these circumstances.
                    </p>
                    <p>
                        Dental procedures create water spray, which is how the virus is spread. The ultra-fine nature of the
                        spray can
                        linger in the air for minutes to hours, which can transmit the COVID-19 virus.
                        I understand that due to the frequency of visits of other dental patients, the characteristics of
                        the virus,
                        and the characteristics of the dental procedure, that I have an elevated risk of contracting the
                        virus simply by being in the dental office.
                    </p>
                    <p>
                        I have been aware of the Public Health Ontario, RCDSO and CDC/US guidelines that recommend essential
                        care under the current pandemic.
                    </p>


                    <form action="{{ route('regisration_form') }}" method='post' enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row input-section">
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="">Patient First name:*</label>
                                <input type="text" name="first_name" id="first_name" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="">Patient Middle name:*</label>
                                <input type="text" name="middle_name" id="middle_name" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="">Patient Last name:*</label>
                                <input type="text" name="last_name" id="last_name" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="">Guardian First name:</label>
                                <input type="text" name="guardian_first_name" id="guardian_first_name" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="">Guardian Middle name:</label>
                                <input type="text" name="guardian_middle_name" id="guardian_middle_name" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="">Guardian Last name:</label>
                                <input type="text" name="guardian_last_name" id="guardian_last_name" required>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="" class="mb-4">1. Have you or anyone you have close contact with had
                                    acute respiratory
                                    illness or travelled outside of Ontario within the past 14 days?*
                                </label>

                                <input class="form-check-input" type="radio" name="acute_respiratory_illness"
                                    id="acute_respiratory_illness" value="1" required>
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                                <input class="form-check-input" type="radio" name="acute_respiratory_illness"
                                    id="acute_respiratory_illness" value="0" required>
                                <label class="form-check-label" for="exampleRadios2">
                                    No
                                </label>

                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="" class="mb-4">2. Do you have a concern for a potential COVID-19
                                    infections?* </label>

                                <input class="form-check-input" type="radio" name="covid_infections_concern"
                                    id="covid_infections_concern" value="1" required>
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                                <input class="form-check-input" type="radio" name="covid_infections_concern"
                                    id="covid_infections_concern" value="0" required>
                                <label class="form-check-label" for="exampleRadios2">
                                    No
                                </label>

                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <label for="" class="mb-4">3. Have you or anyone you have close contact with had a
                                    confirmed case of COVID-19?* </label>

                                <input class="form-check-input" type="radio" name="contact_with_covid_case"
                                    id="contact_with_covid_case" value="1" required>
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                                <input class="form-check-input" type="radio" name="contact_with_covid_case"
                                    id="contact_with_covid_case" value="0" required>
                                <label class="form-check-label" for="exampleRadios2">
                                    No
                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 mt-5">
                                <label for="" class="mb-4">4. Do you have ANY of the following
                                    symptoms:*</label>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8"></div>
                                            <div class="col-lg-1 col-md-2 col-sm-1 col-2"><label>Yes</label></div>
                                            <div class="col-lg-1 col-md-2 col-sm-1 col-2"><label>No</label></div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Fever</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="fever" id="fever" value="1"
                                                    required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="fever" id="fever" value="0"
                                                    required>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">New onset of cough</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="cough" id="cough" value="1"
                                                    required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="cough" id="cough" value="0"
                                                    required>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Shortness of breath or difficulty breathing</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="shortness_of_breath" id="shortness_of_breath"
                                                    value="1" required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="shortness_of_breath" id="shortness_of_breath"
                                                    value="0" required>
                                            </div>


                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Sore throat or difficulty swallowing</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="sore_throat" id="sore_throat" value="1"
                                                    required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="sore_throat" id="sore_throat" value="0"
                                                    required>
                                            </div>


                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Decrease or loss of smell or taste</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="loss_of_smell_taste" id="loss_of_smell_taste"
                                                    value="1" required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="loss_of_smell_taste" id="loss_of_smell_taste"
                                                    value="0" required>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Chills, headache, pink eye</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="pink_eye" id="pink_eye" value="1"
                                                    required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="pink_eye" id="pink_eye" value="0"
                                                    required>
                                            </div>


                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Unexplained fatigue, malaise, muscle aches</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="fatigue" id="fatigue" value="1"
                                                    required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="fatigue" id="fatigue" value="0"
                                                    required>
                                            </div>


                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Nausea, vomiting, diarrhea, abdominal pain</label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="nausea" id="nausea" value="1"
                                                    required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="nausea" id="nausea" value="0"
                                                    required>
                                            </div>


                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <label for="">Runny nose, nasal congestion without a known case
                                                </label>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="nasal_congestion" id="nasal_congestion"
                                                    value="1" required>
                                            </div>
                                            <div class="col-lg-1 col-md-8 col-sm-8 col-2 ml-auto">
                                                <input type="radio" name="nasal_congestion" id="nasal_congestion"
                                                    value="0" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 mt-5">
                                <label for="" class="mb-4">5. If you are 70 years of age or older, are you
                                    experiencing delirium, unexplained/increased
                                    falls, acute functional decline, or worsening of chronic conditions?</label>

                                <input class="form-check-input" type="radio" name="seventy_plus" id="seventy_plus"
                                    value="1" required>
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                                <input class="form-check-input" type="radio" name="seventy_plus" id="seventy_plus"
                                    value="0" required>
                                <label class="form-check-label" for="exampleRadios2">
                                    No
                                </label>

                            </div>
                            <div class="col-lg-4 mt-4">
                                <label for="">Date:*</label>
                                <input type="date" name="date" id="date" required min="<?= date('Y-m-d') ?>">
                            </div>

                            <div class="col-lg-4 mt-4">
                                <label for="">Location:*</label>
                                <div class="input-group">
                                    <select class="form-control" name="clinic_id" required>
                                        <option value="" selected="selected">CHOOSE LOCATION</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}" id="{{ $location->id }}"
                                                name="clinic_id">
                                                {{ $location->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-5">
                                <label for="">Signature of Patient or Guardian: *</label>
                            </div>
                            <div class="col-lg-12">
                                <p class="modal-form" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fa fa-signature"></i> Sign
                                </p>

                            </div>

                            {{-- <div id="results"><b>Preview:</b></div> --}}

                            <input type="text" id="signature" hidden name="signature" class="signature">

                          
                            <div class="col-lg-12 mt-5 text-center">
                                <button type="submit" class="submit-btn"> Submit </button>
                            </div>

                        </div>
                    </form>


                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Signature</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                {{-- <div class="modal-body"> --}}
                                <div class="wrapper-signature">

                                    <canvas id="signature-pad" class="signature-pad" width=600 height=200></canvas>
                                </div>

                                <div>

                                </div>
                                {{-- </div> --}}
                                <div class="modal-footer">
                                    <button type="button" class="btn-sm btn-secondary" id="save">Save</button>
                                    <button type="button" class="btn-sm btn-secondary" id="clear">Clear</button>
                                    <button type="button" class="btn-sm btn-secondary"
                                        data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
