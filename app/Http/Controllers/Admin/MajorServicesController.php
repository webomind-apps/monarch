<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MajorService;
use App\Models\ServiceForMajorService;
use App\Models\Services;
use Illuminate\Http\Request;

class MajorServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = MajorService::paginate(10);
        return view('admin.major_services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services::all();
        return view('admin.major_services.create', compact('services'));
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
            'title' => 'required',
            'slug' => 'required',
            'banner' => 'required',
            'icon' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
            
        ]);
        // $image = $request->file('images')->store('services/images', 'public');
        $banner = $request->file('banner')->store('services/banners', 'public');
        $icon = $request->file('icon')->store('services/icon', 'public');

        $majorservice = new MajorService();
        $majorservice->title = $request->title;
        $majorservice->slug = $request->slug;
        $majorservice->meta_title = $request->meta_title;
        $majorservice->meta_description = $request->meta_description;
        $majorservice->meta_keywords = $request->meta_keywords;
        $majorservice->banner = $banner;
        $majorservice->icon = $icon;
       
        $majorservice->save();

        if (!is_null($request->service_id)) {
            foreach ($request->service_id as $serv_id) {
                $Services = new ServiceForMajorService();
                $Services->major_service_id  = $majorservice->id;
                $Services->minor_service_id  = $serv_id;
                $Services->save();
            }
        }

        return redirect()->route('admin.major-services.index');
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
        $service = MajorService::find($id);
        $services = Services::all();
        return view('admin.major_services.edit', compact('service', 'services'));
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
        $majorservice = MajorService::find($id);
        $majorservice->title = $request->title;
        $majorservice->slug  = $request->slug;
        $majorservice->meta_title = $request->meta_title;
        $majorservice->meta_description = $request->meta_description;
        $majorservice->meta_keywords = $request->meta_keywords;
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon')->store('services/icon', 'public');
            $majorservice->icon = $icon;
        }
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('services/banners', 'public');
            $majorservice->banner = $banner;
        }
        // if ($request->in_footer) {
        //     $majorservice->in_footer = $request->in_footer;
        // } else {
        //     $majorservice->in_footer = 0;
        // }
       
        $majorservice->save();

        $majorservice->services()->delete();
        if (!is_null($request->service_id)) {
            foreach ($request->service_id as $serv_id) {
                $Services = new ServiceForMajorService();
                $Services->major_service_id  = $majorservice->id;
                $Services->minor_service_id  = $serv_id;
                $Services->save();
            }
        }
        return redirect()->route('admin.major-services.index')->with('message', 'Service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = MajorService::find($id);

        $service->delete();

        return redirect()->route('admin.major-services.index');
    }
}
