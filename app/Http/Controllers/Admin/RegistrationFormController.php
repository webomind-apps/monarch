<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\RegistartionForm;
use Illuminate\Http\Request;

class RegistrationFormController extends Controller
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
            $registration_forms = RegistartionForm::orderBy('created_at', 'desc')->paginate(10);
        } else {
            $registration_forms = RegistartionForm::where('clinic_id', $location)->orderBy('created_at', 'desc')->paginate(10);
        }
        // $registration_forms = RegistartionForm::paginate(10);
        return view('admin.registration_forms.index', compact('registration_forms','locations'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registration_form = RegistartionForm::find($id);
        return view('admin.registration_forms.show', compact('registration_form'));
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
        $registration_form = RegistartionForm::find($id);

        $registration_form->delete();

        return redirect()->route('admin.registration-forms.index');
    }
}
