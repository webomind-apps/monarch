<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationFormMail;
use App\Models\Clinic;
use App\Models\RegistartionForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $registration_form = new RegistartionForm();
        $registration_form->first_name = $request->first_name;
        $registration_form->middle_name = $request->middle_name;
        $registration_form->last_name = $request->last_name;
        $registration_form->guardian_first_name = $request->guardian_first_name;
        $registration_form->guardian_middle_name = $request->guardian_middle_name;
        $registration_form->guardian_last_name = $request->guardian_last_name;
        $registration_form->date = $request->date;
        $registration_form->clinic_id = $request->clinic_id;
        $registration_form->acute_respiratory_illness = $request->acute_respiratory_illness;
        $registration_form->covid_infections_concern = $request->covid_infections_concern;
        $registration_form->contact_with_covid_case = $request->contact_with_covid_case;
        $registration_form->seventy_plus = $request->seventy_plus;
        $registration_form->fever = $request->fever;
        $registration_form->cough = $request->cough;
        $registration_form->shortness_of_breath = $request->shortness_of_breath;
        $registration_form->loss_of_smell_taste = $request->loss_of_smell_taste;
        $registration_form->sore_throat = $request->sore_throat;
        $registration_form->pink_eye = $request->pink_eye;
        $registration_form->fatigue = $request->fatigue;
        $registration_form->nausea = $request->nausea;
        $registration_form->nasal_congestion = $request->nasal_congestion;
        // $file = $request->file('signature')->store('signature', 'public');
        $registration_form->signature = $request->signature;
        $registration_form->save();

        $admin_mails = Clinic::where('id', $request->clinic_id)->first();

        $admin = explode(',', $admin_mails->admin_email);

        $country_codes = [
            '403', '587', '780', '825', '236', '778', '604',
            '250', '204', '431', '506', '709', '867', '902', '782',
            '437', '519', '647', '905', '249', '343', '416', '548', '705',
            '365', '613', '807', '226', '289', '902', '782', '514', '581',
            '819', '438', '450', '418', '579', '873', '367', '639', '306', '867'
        ];

        $phone = $request->phone_number;
        $phone1 = substr($phone, 0, 3);
       
        if (in_array($phone1, $country_codes)) {
            Mail::to($admin)->send(new RegistrationFormMail($registration_form));
        } else {
            Mail::to('surabhi@webomindapps.com')->send(new RegistrationFormMail($registration_form));
        }

        return redirect()->back()->with('message', 'FORM SUBMITTED SUCCESSFULLY, THANK YOU!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
