@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.registration-forms.index') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Name</label>
                            <input type="text" class="form-control"
                                value="{{ $registration_form->first_name }} {{ $registration_form->middle_name }} {{ $registration_form->last_name }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Name</label>
                            <input type="text" class="form-control"
                                value="{{ $registration_form->guardian_first_name }} {{ $registration_form->guardian_middle_name }} {{ $registration_form->guardian_last_name }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="" >Date</label>
                            <input type="text" value= {{ $registration_form->date }}  class="form-control" readonly>
                        </div>
                    </div>
                    {{-- {{ dd($registration_form->cough )}} --}}
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">1. Have you or anyone you have close contact with had acute respiratory
                                illness or travelled outside of Ontario within the past 14 days?</label>
                                
                            <input type="checkbox" 
                                {{ $registration_form->acute_respiratory_illness == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                           
                            <label for="">2. Do you have a concern for a potential COVID-19
                                infections?</label>
                               
                            <input type="checkbox"  onclick="return false;" 
                                {{ $registration_form->covid_infections_concern == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                           
                            <label for="">3. Have you or anyone you have close contact with had a
                                confirmed case of COVID-19?</label>
                                
                            <input type="checkbox"
                                {{ $registration_form->contact_with_covid_case == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">4. Do you have ANY of the following
                                symptoms:</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Fever</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->fever == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">New onset of cough</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->cough == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Shortness of breath or difficulty breathing</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->shortness_of_breath == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Sore throat or difficulty swallowing</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->sore_throat == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Decrease or loss of smell or taste</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->loss_of_smell_taste == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Chills, headache, pink eye</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->pink_eye == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Unexplained fatigue, malaise, muscle aches</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->fatigue == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Nausea, vomiting, diarrhea, abdominal pain</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->nausea == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            &nbsp;
                            <label for="">Runny nose, nasal congestion without a known case</label>
                            &nbsp;
                            <input type="checkbox" {{ $registration_form->nasal_congestion == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">5. If you are 70 years of age or older, are you
                                experiencing delirium, unexplained/increased
                                falls, acute functional decline, or worsening of chronic conditions?</label>
                            <br>
                            <input type="checkbox" {{ $registration_form->seventy_plus == 1 ? 'checked' : '' }} onclick="return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">Signature</label>
                            <br>
                            <img src="{{$registration_form->signature}}" height="200px" >
                        </div>
                    </div>
                    
                </form>
                <a href="{{ route('admin.registration-forms.index') }}">
                    <button class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
