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
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'map_link' => 'required',
            'covid' => 'required',

            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',

            // 'patients_title' => 'required',
            'patients_meta_title' => 'required',
            'patients_meta_keywords' => 'required',
            'patients_meta_description' => 'required',

            // 'home_title' => 'required',
            'home_meta_title' => 'required',
            'home_meta_description' => 'required',
            'home_meta_keywords' => 'required',

            // 'about_title' => 'required',
            'about_meta_title' => 'required',
            'about_meta_keywords' => 'required',
            'about_meta_description' => 'required',

            // 'services_title' => 'required',
            'services_meta_title' => 'required',
            'services_meta_keywords' => 'required',
            'services_meta_description' => 'required',

            // 'location_title' => 'required',
            'location_meta_title' => 'required',
            'location_meta_keywords' => 'required',
            'location_meta_description' => 'required',

            // 'career_title' => 'required',
            'career_meta_title' => 'required',
            'career_meta_keywords' => 'required',
            'career_meta_description' => 'required',

            // 'doctors_title' => 'required',
            'doctors_meta_title' => 'required',
            'doctors_meta_keywords' => 'required',
            'doctors_meta_description' => 'required',
        ]);

        $banner = request()->file('banner')->store('contact-us/banner', 'public');
        $contactDetails = new ContactUs();
        $contactDetails->banner = $banner;
        $contactDetails->banner_header = $request->banner_header;
        $contactDetails->phone_number = $request->phone_number;
        $contactDetails->email = $request->email;
        $contactDetails->address = $request->address;
        $contactDetails->map_link = $request->map_link;
        $contactDetails->covid_update = $request->covid;

        $contactDetails->meta_title = $request->meta_title;
        $contactDetails->meta_description = $request->meta_description;
        $contactDetails->meta_keywords = $request->meta_keywords;

        // $contactDetails->home_title = $request->home_title;
        $contactDetails->home_meta_title = $request->home_meta_title;
        $contactDetails->home_meta_description = $request->home_meta_description;
        $contactDetails->home_meta_keywords = $request->home_meta_keywords;
        
        // $contactDetails->patients_title = $request->patients_title;
        $contactDetails->patients_meta_title = $request->patients_meta_title;
        $contactDetails->patients_meta_description = $request->patients_meta_description;
        $contactDetails->patients_meta_keywords = $request->patients_meta_keywords;

        $contactDetails->about_meta_title = $request->about_meta_title;
        // $contactDetails->about_title = $request->about_title;
        $contactDetails->about_meta_description = $request->about_meta_description;
        $contactDetails->about_meta_keywords = $request->about_meta_keywords;

        $contactDetails->services_meta_title = $request->services_meta_title;
        // $contactDetails->services_title = $request->services_title;
        $contactDetails->services_meta_description = $request->services_meta_description;
        $contactDetails->services_meta_keywords = $request->services_meta_keywords;

        // $contactDetails->location_title = $request->location_title;
        $contactDetails->location_meta_title = $request->location_meta_title;
        $contactDetails->location_meta_description = $request->location_meta_description;
        $contactDetails->location_meta_keywords = $request->location_meta_keywords;

        // $contactDetails->career_title = $request->career_title;
        $contactDetails->career_meta_title = $request->career_meta_title;
        $contactDetails->career_meta_description = $request->career_meta_description;
        $contactDetails->career_meta_keywords = $request->career_meta_keywords;

        // $contactDetails->doctors_title = $request->doctors_title;
        $contactDetails->doctors_meta_title = $request->doctors_meta_title;
        $contactDetails->doctors_meta_description = $request->doctors_meta_description;
        $contactDetails->doctors_meta_keywords = $request->doctors_meta_keywords;
        $contactDetails->save();

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

            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',

            // 'patients_title' => 'required',
            'patients_meta_title' => 'required',
            'patients_meta_keywords' => 'required',
            'patients_meta_description' => 'required',

            // 'home_title' => 'required',
            'home_meta_title' => 'required',
            'home_meta_description' => 'required',
            'home_meta_keywords' => 'required',

            // 'about_title' => 'required',
            'about_meta_title' => 'required',
            'about_meta_keywords' => 'required',
            'about_meta_description' => 'required',

            // 'services_title' => 'required',
            'services_meta_title' => 'required',
            'services_meta_keywords' => 'required',
            'services_meta_description' => 'required',

            // 'location_title' => 'required',
            'location_meta_title' => 'required',
            'location_meta_keywords' => 'required',
            'location_meta_description' => 'required',

            // 'career_title' => 'required',
            'career_meta_title' => 'required',
            'career_meta_keywords' => 'required',
            'career_meta_description' => 'required',

            // 'doctors_title' => 'required',
            'doctors_meta_title' => 'required',
            'doctors_meta_keywords' => 'required',
            'doctors_meta_description' => 'required',
        ]);

        $contactDetails = ContactUs::find($id);
        $contactDetails->banner_header = $request->banner_header;
        $contactDetails->phone_number = $request->phone_number;
        $contactDetails->email = $request->email;
        $contactDetails->address = $request->address;
        $contactDetails->map_link = $request->map_link;
        $contactDetails->covid_update = $request->covid;
        if ($request->hasFile('banner')) {
            $banner_image = $request->file('banner')->store('contact-us/banner', 'public');
            $contactDetails->banner = $banner_image;
        }
        $contactDetails->meta_title = $request->meta_title;
        $contactDetails->meta_description = $request->meta_description;
        $contactDetails->meta_keywords = $request->meta_keywords;
        
        // $contactDetails->patients_title = $request->patients_title;
        $contactDetails->patients_meta_title = $request->patients_meta_title;
        $contactDetails->patients_meta_description = $request->patients_meta_description;
        $contactDetails->patients_meta_keywords = $request->patients_meta_keywords;

        $contactDetails->about_meta_title = $request->about_meta_title;
        // $contactDetails->about_title = $request->about_title;
        $contactDetails->about_meta_description = $request->about_meta_description;
        $contactDetails->about_meta_keywords = $request->about_meta_keywords;

        // $contactDetails->home_title = $request->home_title;
        $contactDetails->home_meta_title = $request->home_meta_title;
        $contactDetails->home_meta_description = $request->home_meta_description;
        $contactDetails->home_meta_keywords = $request->home_meta_keywords;

        $contactDetails->services_meta_title = $request->services_meta_title;
        // $contactDetails->services_title = $request->services_title;
        $contactDetails->services_meta_description = $request->services_meta_description;
        $contactDetails->services_meta_keywords = $request->services_meta_keywords;

        // $contactDetails->location_title = $request->location_title;
        $contactDetails->location_meta_title = $request->location_meta_title;
        $contactDetails->location_meta_description = $request->location_meta_description;
        $contactDetails->location_meta_keywords = $request->location_meta_keywords;

        // $contactDetails->career_title = $request->career_title;
        $contactDetails->career_meta_title = $request->career_meta_title;
        $contactDetails->career_meta_description = $request->career_meta_description;
        $contactDetails->career_meta_keywords = $request->career_meta_keywords;

        // $contactDetails->doctors_title = $request->doctors_title;
        $contactDetails->doctors_meta_title = $request->doctors_meta_title;
        $contactDetails->doctors_meta_description = $request->doctors_meta_description;
        $contactDetails->doctors_meta_keywords = $request->doctors_meta_keywords;
        $contactDetails->save();

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
