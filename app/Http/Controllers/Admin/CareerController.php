<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Clinic;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = request()->location;
        $locations = Clinic::all();
        if (is_null($location)) {
            $careers = Career::orderBy('created_at', 'desc')->paginate(10);
        } else {
            $careers = Career::where('clinic_id', $location)->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('admin.careers.index', compact('careers', 'locations'));
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
        // $careers = new Career();
        // $careers->position = $request->position;
        // $careers->first_name = $request->first_name;
        // $careers->last_name = $request->last_name;
        // $careers->phone_number = $request->phone_number;
        // $careers->email = $request->email;
        // $file = $request->file('file')->store('resume_file', 'public');
        // $careers->file_path = $file;
        // $careers->clinic_id = $request->clinic_id;

        // $careers->save();
        // return redirect()->back()->with('message', 'FORM SUBMITTED SUCCESSFULLY, THANK YOU!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $careers = Career::find($id);
        return view('admin.careers.show', compact('careers'));
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
        $careers = Career::find($id);
        $careers->delete();
        return redirect()->route('admin.careers.index')->with('message', 'Deleted successfully');
    }
}
