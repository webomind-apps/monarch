<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\AdminMail;
use App\Mail\ThankYouMail;
use App\Models\Career;
use App\Models\Clinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerFormController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $careers = new Career();
        $careers->position = $request->position;
        $careers->first_name = $request->first_name;
        $careers->last_name = $request->last_name;
        $careers->phone_number = $request->phone_number;
        $careers->email = $request->email;
        $file = $request->file('file')->store('resume_file', 'public');
        $careers->file_path = $file;
        $careers->clinic_id = $request->clinic_id;

        $careers->save();

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
            Mail::to($admin)->send(new AdminMail($careers));
        } else {
            Mail::to('info@tastechnologies.com')->send(new AdminMail($careers));
        }

        Mail::to($careers->email)->send(new ThankYouMail($careers));

        return redirect()->back()->with('message', 'FORM SUBMITTED SUCCESSFULLY, THANK YOU!');
    }
}
