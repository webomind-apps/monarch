<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = WhoWeAre::first();
        return view('admin.who-we-are.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.who-we-are.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    

        $this->validate(
            $request,
            [
                'banner' => 'required',
                'image' => 'required',
                'title' => 'required',
                'description' => 'required',
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );
        
        $banner = $request->file('banner')->store('who-we-are/banners', 'public');
        $image = $request->file('image')->store('who-we-are/image', 'public');

        $details = new WhoWeAre();

        $details->banner_header = $request->title;
        $details->banner = $banner;
        $details->description = $request->description;
        $details->meta_title = $request->meta_title;
        $details->meta_description = $request->meta_description;
        $details->meta_keywords = $request->meta_keywords;
        $details->image = $image;
        $details->save();

        return redirect()->route('admin.who-we-are.index')->with('message', 'Details added successfully!');
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
        $details = WhoWeAre::find($id);
        return view('admin.who-we-are.edit', compact('details'));
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

        $this->validate(
            $request,
            [
                // 'banner' => 'required',
                // 'image' => 'required',
                'title' => 'required',
                'description' => 'required',
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );

        $details = WhoWeAre::find($id);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('who-we-are/image', 'public');
            $details->image = $image;
        }
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('who-we-are/banners', 'public');
            $details->banner = $banner;
        }
        $details->banner_header = $request->title;
        $details->description = $request->description;
        $details->meta_title = $request->meta_title;
        $details->meta_description = $request->meta_description;
        $details->meta_keywords = $request->meta_keywords;
        $details->save();

        return redirect()->route('admin.who-we-are.index')->with('message', 'Details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = WhoWeAre::find($id);

        $details->delete();

        return redirect()->route('admin.who-we-are.index')->with('message', 'Deatils deleted successfully!');
    }
}
