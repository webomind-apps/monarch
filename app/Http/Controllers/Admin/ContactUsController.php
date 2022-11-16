<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactUs::first();
        return view('admin.contact-us.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact-us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'banner' => 'required',
            'banner_header' => 'required',
            'email' => 'required',
            'address' => 'required',
            'map_link' => 'required',
            'covid' => 'required',
        ]);

        $banner = request()->file('banner')->store('contact-us/banner', 'public');
        $contactDetails = new ContactUs();
        $contactDetails->banner = $banner ;
        $contactDetails->banner_header = $request->banner_header ;
        $contactDetails->phone_number = $request->phone_number ;
        $contactDetails->email = $request->email ;
        $contactDetails->address = $request->address ;
        $contactDetails->map_link = $request->map_link ;
        $contactDetails->covid_update = $request->covid ;
        $contactDetails->save() ;

        return redirect()->route('admin.contact-us.index')->with('message', 'Contact details saved successfully!');
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
        $contact = ContactUs::find($id);
        return view('admin.contact-us.edit', compact('contact'));
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
        $this->validate($request, [
            // 'banner' => 'required',
            'banner_header' => 'required',
            'email' => 'required',
            'address' => 'required',
            'map_link' => 'required',
            'covid' => 'required',
        ]);

        $contactDetails = ContactUs::find($id);
        $contactDetails->banner_header = $request->banner_header ;
        $contactDetails->phone_number = $request->phone_number ;
        $contactDetails->email = $request->email ;
        $contactDetails->address = $request->address ;
        $contactDetails->map_link = $request->map_link ;
        $contactDetails->covid_update = $request->covid ;
        if ($request->hasFile('banner')) {
            $banner_image = $request->file('banner')->store('contact-us/banner', 'public');
            $contactDetails->banner = $banner_image ;
        }
        $contactDetails->save() ;

        return redirect()->route('admin.contact-us.index')->with('message', 'Contact details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactUs::find($id);

        $contact->delete();

        return redirect()->route('admin.contact-us.index')->with('message', 'Contact deleted successfully!');
    }
}
