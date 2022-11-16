<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

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
        return redirect()->back()->with('message', 'FORM SUBMITTED SUCCESSFULLY, THANK YOU!');
    }
}
