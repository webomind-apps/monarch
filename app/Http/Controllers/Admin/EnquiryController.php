<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\ClinicAdmin;
use App\Models\Enquiry;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->admin_type == 1) {
            $location = request()->location;
            $locations = Clinic::all();
            if (is_null($location)) {
                $enquiries = Enquiry::with('clinic')->orderBy('created_at', 'desc')->paginate(10);
            } else {
                $enquiries = Enquiry::where('clinic_id', $location)->orderBy('created_at', 'desc')->paginate(10);
            }
        } elseif (Auth::user()->admin_type == 0) {
            $locations = Clinic::all();
            $clinic_id = Auth::user()->clinics()->get(['clinic_id']);
            $enquiries = Enquiry::whereIn('clinic_id', $clinic_id->toArray())->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('admin.enquiry.index', compact('enquiries', 'locations'));
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
        // $enquiry = new Enquiry();
        // $enquiry->full_name = $request->full_name;
        // $enquiry->patient_type = $request->patient_type;
        // $enquiry->phone_number = $request->phone_number;
        // $enquiry->email = $request->email;
        // $enquiry->clinic_id = $request->clinic_id;
        // $enquiry->message = $request->message;
        // $enquiry->preferred_time = $request->time;
        // $enquiry->preferred_date = $request->date;
        // $enquiry->save();

        // return redirect()->back()->with('message', 'APPOINTMENT BOOKED SUCCESSFULLY. THANK YOU!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enquiry = Enquiry::find($id);
        return view('admin.enquiry.show', compact('enquiry'));
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
        $enquiry = Enquiry::find($id);

        $enquiry->delete();

        return redirect()->back();
    }
}
