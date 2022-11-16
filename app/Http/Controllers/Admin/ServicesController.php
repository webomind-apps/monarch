<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'icon' => 'required',
            // 'banner' => 'required',
            // 'url' => 'required',
            // 'description' => 'required'
        ]);

        $icon_path = $request->file('icon')->store('services/icon', 'public');
        $banner_path = $request->file('banner')->store('services/banner', 'public');
        $image = $request->file('image')->store('services/images', 'public');

        $services = new Services();
        $services->name = $request->title;
        $services->slug = $request->slug;
        $services->icon_path = $icon_path;
        $services->images = $image;
        $services->banner_path = $banner_path;
      
        $services->url = $request->url;
        $services->description = $request->description;
        $services->long_description = $request->long_description;
        if ($request->in_homepage) {
            $services->in_homepage = $request->in_homepage;
        }
        $services->save();
        return redirect()->route('admin.services.index')->with('message', 'Service added successfully');
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
    public function edit(Request $request, $id)
    {
        $services = Services::find($id);
        return view('admin.services.edit', compact('services'));
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
        $services = Services::find($id);
        $services->name = $request->title;
        $services->slug = $request->slug;

        if ($request->hasFile('icon')) {
            $icon_path = $request->file('icon')->store('services/icon', 'public');
            $services->icon_path = $icon_path;
        }

        if ($request->hasFile('banner')) {
            $banner_path = $request->file('banner')->store('services/banner', 'public');
            $services->banner_path = $banner_path;
        }
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('services/images', 'public');
            $services->images = $image_path;
        }
        $services->description = $request->description;
        $services->long_description = $request->long_description;
        $services->url = $request->url;
        if ($request->in_homepage) {
            $services->in_homepage = $request->in_homepage;
        } else {
            $services->in_homepage = 0;
        }
        $services->save();

        return redirect()->route('admin.services.index')->with('message', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Services::find($id);

        $location->delete();

        return redirect()->route('admin.services.index')->with('message', 'Service deleted successfully');
    }
}
