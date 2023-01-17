<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Mail\ThankYouMail;
use App\Models\Clinic;
use App\Models\ContactUs;
use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $query = new Query();
        $query->first_name = $request->first_name;
        $query->last_name = $request->last_name;
        $query->phone_number = $request->phone_number;
        $query->email = $request->email;
        $query->message = $request->message;
        $query->clinic_id  = $request->clinic_id;

        $query->save();

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
            Mail::to($admin)->send(new ContactUsMail($query));
        } else {
            Mail::to('info@tastechnologies.com')->send(new ContactUsMail($query));
        }

        Mail::to($query->email)->send(new ThankYouMail($query));

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
    }
}
