<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\AdvantageTopList;
use App\Models\Clinic;
use App\Models\ClinicAdvantage;
use App\Models\ClinicGallery;
use App\Models\ClinicPlan;
use App\Models\ClinicService;
use App\Models\ClinicVideo;
use App\Models\Location;
use App\Models\Plan;
use App\Models\Services;
use Illuminate\Http\Request;

class ClinicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinics = Clinic::orderBy('priority', 'asc')->paginate(10);
        return view('admin.clinics.index', compact('clinics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        $services = Services::all();
        $plans = Plan::all();
        $advantages = Advantage::all();
        return view('admin.clinics.create', compact('locations', 'services', 'plans', 'advantages'));
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

        $this->validate($request, [
            'location_id' => 'required',
            'title' => 'required',
            'status' => 'required',
            'slug' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'priority' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'office_hours' => 'required',
            // 'maplink' => 'required',
            // 'googlereview' => 'required',
            'admin_email' => 'required',
            'gallery_images' => 'required',
            'banner' => 'required',
            // 'plan_id'=> 'required',
            // 'advantage_id'=> 'required',
            // 'service_id'=> 'required',
            // 'video' => 'required',
            // 'description' => 'required',
            'covid' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);


        $banner_image = $request->file('banner')->store('gallery/banner', 'public');
        // $video = $request->file('video')->store('gallery/video', 'public');

        $clinic = new Clinic();
        $clinic->location_id = $request->location_id;
        $clinic->name = $request->title;
        $clinic->status = $request->status;
        $clinic->slug = $request->slug;
        $clinic->lat = $request->lat;
        $clinic->lng = $request->lng;
        $clinic->priority = $request->priority;
        $clinic->phone_number = $request->phone_number;
        $clinic->fax_number = $request->fax_number;
        $clinic->email = $request->email;
        $clinic->admin_email = $request->admin_email;
        $clinic->address = $request->address;
        $clinic->office_hours = $request->office_hours;
        $clinic->map_link = $request->maplink;
        $clinic->google_review_link = $request->googlereview;
        $clinic->banner = $banner_image;
        // $clinic->video_link = $video;
        $clinic->description =  $request->description;
        $clinic->appointment_note =  $request->appointment_note;
        $clinic->covid_update = $request->covid;
        $clinic->meta_title = $request->meta_title;
        $clinic->meta_description = $request->meta_description;
        $clinic->meta_keywords = $request->meta_keywords;
        $clinic->save();

        if (!is_null($request->advantage_id)) {
            foreach ($request->advantage_id as $adv_id) {
                $clinicAdvantages = new ClinicAdvantage();
                $clinicAdvantages->clinic_id = $clinic->id;
                $clinicAdvantages->advantage_id = $adv_id;
                $clinicAdvantages->save();
            }
        }
        if (!is_null($request->advantage_to_list_id)) {
            foreach ($request->advantage_to_list_id as $adv_top_list_id) {
                $clinicAdvantagesTopList = new AdvantageTopList();
                $clinicAdvantagesTopList->clinic_id = $clinic->id;
                $clinicAdvantagesTopList->advantage_id = $adv_top_list_id;
                $clinicAdvantagesTopList->save();
            }
        }

        if (!is_null($request->plan_id)) {
            foreach ($request->plan_id as $pl_id) {
                $clinicPlans = new ClinicPlan();
                $clinicPlans->clinic_id = $clinic->id;
                $clinicPlans->plan_id = $pl_id;
                $clinicPlans->save();
            }
        }
        if (!is_null($request->service_id)) {
            foreach ($request->service_id as $serv_id) {
                $clinicServices = new ClinicService();
                $clinicServices->clinic_id = $clinic->id;
                $clinicServices->service_id = $serv_id;
                $clinicServices->save();
            }
        }

        foreach ($request->file('gallery_images') as $image) {
            $gallery_image = $image->store('gallery/gallery_images', 'public');

            $images = new ClinicGallery();
            $images->clinic_id = $clinic->id;
            $images->gallery_path = $gallery_image;
            $images->save();
        }

        foreach ($request->file('videos') as $video) {
            $videos = $video->store('gallery/videos', 'public');
            $video = new ClinicVideo();
            $video->clinic_id = $clinic->id;
            $video->video_path = $videos;
            $video->save();
        }

        return redirect()->route('admin.clinics.index')->with('message', 'Clinic added successfully');
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
        $clinics = Clinic::find($id);
        $locations = Location::all();
        $services = Services::all();
        $plans = Plan::all();
        $advantages = Advantage::all();

        return view('admin.clinics.edit', compact('clinics', 'locations', 'services', 'plans', 'advantages'));
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
        // dd($request->all());



        // $banner_image = $request->file('banner')->store('gallery/banner', 'public');
        $clinic = Clinic::find($id);
        $clinic->location_id = $request->location_id;
        $clinic->name = $request->title;
        $clinic->slug = $request->slug;
        $clinic->lat = $request->lat;
        $clinic->lng = $request->lng;
        $clinic->priority = $request->priority;
        $clinic->phone_number = $request->phone_number;
        $clinic->fax_number = $request->fax_number;
        $clinic->email = $request->email;
        $clinic->admin_email = $request->admin_email;
        $clinic->address = $request->address;
        $clinic->office_hours = $request->office_hours;
        $clinic->map_link = $request->maplink;
        $clinic->google_review_link = $request->googlereview;
        $clinic->description =  $request->description;
        $clinic->appointment_note =  $request->appointment_note;
        $clinic->covid_update = $request->covid;
        $clinic->meta_title = $request->meta_title;
        $clinic->meta_description = $request->meta_description;
        $clinic->meta_keywords = $request->meta_keywords;
        if ($request->hasFile('banner')) {
            $banner_image = $request->file('banner')->store('gallery/banner', 'public');
            $clinic->banner = $banner_image;
        }
        // if ($request->hasFile('video')) {
        //     $video = $request->file('video')->store('gallery/video', 'public');
        //     $clinic->video_link = $video;
        // }
        $clinic->save();


        if (isset($request->gallery_images)) {
            foreach ($request->file('gallery_images') as $image) {
                $gallery_image = $image->store('gallery/gallery_images', 'public');
                $images = new ClinicGallery();
                $images->clinic_id = $id;
                $images->gallery_path = $gallery_image;
                $images->save();
            }
        }
        if (isset($request->videos)) {
            foreach ($request->file('videos') as $video) {
                $videos = $video->store('gallery/videos', 'public');
                $video = new ClinicVideo();
                $video->clinic_id = $id;
                $video->video_path = $videos;
                $video->save();
            }
        }

        //delete existing permission
        $clinic->advantages()->delete();
        if (!is_null($request->advantage_id)) {
            foreach ($request->advantage_id as $adv_id) {
                $clinicAdvantages = new ClinicAdvantage;
                $clinicAdvantages->clinic_id = $id;
                $clinicAdvantages->advantage_id = $adv_id;
                $clinicAdvantages->save();
            }
        }

        $clinic->advantagesToList()->delete();
        if (!is_null($request->advantage_to_list_id)) {
            foreach ($request->advantage_to_list_id as $adv_top_list_id) {
                $clinicAdvantagesTopList = new AdvantageTopList();
                $clinicAdvantagesTopList->clinic_id = $clinic->id;
                $clinicAdvantagesTopList->advantage_id = $adv_top_list_id;
                $clinicAdvantagesTopList->save();
            }
        }

        $clinic->plans()->delete();
        if (!is_null($request->plan_id)) {
            foreach ($request->plan_id as $pl_id) {
                $clinicPlans = new ClinicPlan;
                $clinicPlans->clinic_id = $id;
                $clinicPlans->plan_id = $pl_id;
                $clinicPlans->save();
            }
        }

        $clinic->services()->delete();
        if (!is_null($request->service_id)) {
            foreach ($request->service_id as $serv_id) {
                $clinicServices = new ClinicService;
                $clinicServices->clinic_id = $id;
                $clinicServices->service_id = $serv_id;
                $clinicServices->save();
            }
        }

        return redirect()->route('admin.clinics.index')->with('message', 'Clinic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clinics = Clinic::find($id);

        $clinics->delete();

        return redirect()->route('admin.clinics.index')->with('message', 'Clinic deleted successfully');
    }

    public function destroyGalleryImage($id)
    {
        $clinics = ClinicGallery::find($id);

        $clinics->delete();

        return redirect()->back();
    }

    public function destroyVideo($id)
    {
        $clinics = ClinicVideo::find($id);

        $clinics->delete();

        return redirect()->back();
    }
}
