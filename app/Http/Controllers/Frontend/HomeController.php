<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Blog;
use App\Models\BlogCatergory;
use App\Models\Clinic;
use App\Models\ContactUs;
use App\Models\Doctor;
use App\Models\Financial;
use App\Models\Location;
use App\Models\MajorService;
use App\Models\Partner;
use App\Models\PhotoGallery;
use App\Models\PhotoGalleryImages;
use App\Models\Plan;
use App\Models\Promotion;
use App\Models\ServiceForMajorService;
use App\Models\Services;
use App\Models\Slider;
use App\Models\SmileGallery;
use App\Models\SmileGalleryImages;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function blog_detail($slug)
    {
        $blogs = Blog::where('slug', $slug)->first();
        return view('frontend.pages.blog_detail', compact('blogs'));
    }
    public function blog()
    {
        $blog_categories = BlogCatergory::all();

        $blog_category = request()->blogs;
        // dd($blog_category);
        if (is_null($blog_category)) {
            $blogs = Blog::orderBy('date', 'DESC')->paginate(12);
        } else {
            $blogs = Blog::where('blog_category_id', $blog_category)->orderBy('date', 'DESC')->paginate(12);
        }

        // $blogs = Blog::orderBy('date', 'DESC')->paginate(12);
        return view('frontend.pages.blog', compact('blogs','blog_categories'));
    }
    public function footer()
    {
        $footer = Clinic::all();
        return response()->json($footer);
    }

    public function footer_services($slug)
    {
        $footerservices = MajorService::where('in_footer', 1)->where('slug', $slug)->get();
        return view('frontend.layout.footer', compact('footerservices'));
        // return response()->json($footerservices);
    }

    public function map_locations()
    {
        $map_locations = Clinic::select('lat', 'lng', 'name', 'phone_number', 'banner', 'address', 'slug')->get();
        return response()->json($map_locations);
    }

    public function index()
    {
        $locations = Clinic::all();
        $sliders = Slider::all();
        $partners = Partner::all();
        $whoWeAreDetails = WhoWeAre::first();
        $covid_updates = ContactUs::first();
        $advantages = Advantage::where('in_homepage', 1)->get();
        $plans = Plan::where('in_homepage', 1)->get();
        $services = Services::where('in_homepage', 1)->get();
        return view('frontend.pages.index', compact('locations', 'sliders', 'partners', 'whoWeAreDetails', 'covid_updates', 'advantages', 'plans', 'services'));
    }
    public function about()
    {
        $seo_contents = ContactUs::first();
        return view('frontend.pages.about', compact('seo_contents'));
    }
    public function patient()
    {
        $seo_contents = ContactUs::first();
        return view('frontend.pages.patient', compact('seo_contents'));
    }
    public function services()
    {
        $services = MajorService::all();
        $seo_contents = ContactUs::first();
        return view('frontend.pages.services', compact('services','seo_contents'));
    }
    public function service_details($slug)
    {
        $service_details = MajorService::where('slug', $slug)->first();
        return view('frontend.pages.service_details', compact('service_details'));
    }
    public function services_description($slug)
    {
        $service_description = Services::where('slug', $slug)->first();
        return view('frontend.pages.service_description', compact('service_description'));
    }
    public function find_location()
    {
        $locations = Clinic::all()->sortBy("priority");
        $seo_contents = ContactUs::first();
        return view('frontend.pages.find_location', compact('locations', 'seo_contents'));

        // $locations = Clinic::orderBy("priority")->where('status', '=', 1)->get();
        // return view('frontend.pages.find_location', compact('locations'));

        // $locations = Clinic::orderBy("priority",'ASC')->where('status', '=', 1)->get();
        // return view('frontend.pages.find_location', compact('locations'));
    }
    // public function contact_us()
    // {
    //     $contacts = ContactUs::all();
    //     return view('frontend.pages.contact', compact('contacts'));
    // }
    public function detail_page($slug)
    {
        // $location_details = Clinic::find($id);
        $location_details = Clinic::where('slug', $slug)->first();

        return view('frontend.pages.detail_page', compact('location_details'));
    }

    public function careers()
    {
        $locations = Clinic::all();
        $seo_contents = ContactUs::first();
        return view('frontend.pages.careers', compact('locations','seo_contents'));
    }

    public function contact()
    {
        $contacts = ContactUs::first();
        $locations = Clinic::all();
        $seo_contents = ContactUs::first();
        return view('frontend.pages.contact', compact('locations', 'contacts','seo_contents'));
    }
    public function book_appointment()
    {
        $locations = Clinic::all();
        return view('frontend.pages.book_appointment', compact('locations'));
    }
    public function who_are_we()
    {
        $details = WhoWeAre::first();
        return view('frontend.pages.who_are_we', compact('details'));
    }

    public function meet_the_doctors()
    {
        $doctors = Doctor::all();
        $seo_contents = ContactUs::first();
        return view('frontend.pages.meet_the_doctors', compact('doctors', 'seo_contents'));
    }
    public function photo_gallery()
    {
        $images = PhotoGallery::first();
        $gallery_images = PhotoGalleryImages::all();
        return view('frontend.pages.photo_gallery', compact('gallery_images', 'images'));
    }
    public function smile_gallery()
    {
        $images = SmileGallery::first();
        $smile_images = SmileGalleryImages::all();
        return view('frontend.pages.smile_gallery', compact('images', 'smile_images'));
    }
    public function financials()
    {
        $financials = Financial::first();
        return view('frontend.pages.financials', compact('financials'));
    }
    public function promotions()
    {
        $promotions = Promotion::first();
        return view('frontend.pages.promotions', compact('promotions'));
    }
    public function registartion_form()
    {
        $locations = Clinic::all();
        return view('frontend.pages.registartion_form', compact('locations'));
    }
    public function family_dentistry()
    {
        return view('frontend.pages.family_dentistry');
    }
    public function orthodontics()
    {
        return view('frontend.pages.orthodontics');
    }
    public function sedation_dentistry()
    {
        return view('frontend.pages.sedation_dentistry');
    }
    public function full_mouth_reconstruction()
    {
        return view('frontend.pages.full_mouth_reconstruction');
    }
    public function cosmetic_dentistry()
    {
        return view('frontend.pages.cosmetic_dentistry');
    }
    public function periodontics()
    {
        return view('frontend.pages.periodontics');
    }
    public function sleep_dentistry()
    {
        return view('frontend.pages.sleep_dentistry');
    }
    public function dental_exams_cleanings()
    {
        return view('frontend.pages.services.dental_exam_cleanings');
    }
    public function night_athletic_mouth_guard()
    {
        return view('frontend.pages.services.night_athletic_mouth_guards');
    }
    public function child_dentistry()
    {
        return view('frontend.pages.services.children_dentistry');
    }
    public function dental_emergency()
    {
        return view('frontend.pages.services.dental_emergency');
    }
    public function teeth_whitening()
    {
        return view('frontend.pages.services.teeth_whitening');
    }
    public function wisdom_teeth_extraction()
    {
        return view('frontend.pages.services.wisdom_teeth_extraction');
    }
    public function root_canal()
    {
        return view('frontend.pages.services.root_canal');
    }
    public function amalgam()
    {
        return view('frontend.pages.services.amalgam_free_filling');
    }
    public function cosmetic_bonding()
    {
        return view('frontend.pages.services.cosmetic_bonding');
    }
    public function dental_veener()
    {
        return view('frontend.pages.services.dental_veeners');
    }
    public function crowns_caps()
    {
        return view('frontend.pages.services.dental_crowns_caps');
    }
    public function procelian()
    {
        return view('frontend.pages.services.procelian');
    }
    public function denture()
    {
        return view('frontend.pages.services.denture_treatment');
    }
    public function bridges_implants()
    {
        return view('frontend.pages.services.bridges_implants');
    }
    public function family_orthodontics()
    {
        return view('frontend.pages.services.family_orthodontics');
    }
    public function invisalign()
    {
        return view('frontend.pages.services.invisalign');
    }
    public function iv_sedation()
    {
        return view('frontend.pages.services.iv_sedation');
    }
    public function laughing_gas()
    {
        return view('frontend.pages.services.laughing_gas');
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
