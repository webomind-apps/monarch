<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SmileGallery;
use App\Models\SmileGalleryImages;
use Illuminate\Http\Request;

class SmileGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = SmileGalleryImages::all();
        $details = SmileGallery::first();
        return view('admin.smile-gallery.index', compact('images', 'details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.smile-gallery.create');
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
                'title' => 'required',
                'banner' => 'required',
                'images' => 'required',
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );

        $smilegalleryBanner = $request->file('banner')->store('photo-gallery/Banner', 'public');

        $smilegallery = new SmileGallery();
        $smilegallery->title = $request->title;
        $smilegallery->meta_title = $request->meta_title;
        $smilegallery->meta_description = $request->meta_description;
        $smilegallery->meta_keywords = $request->meta_keywords;
        $smilegallery->banner = $smilegalleryBanner;
        $smilegallery->save();

        foreach ($request->file('images') as $image) {
            $gallery_image = $image->store('smile-gallery/images', 'public');
            $smilegalleryimages = new SmileGalleryImages();
            $smilegalleryimages->smile_gallery_id  = $smilegallery->id;
            $smilegalleryimages->images = $gallery_image;
            $smilegalleryimages->save();
        }

        return redirect()->route('admin.smile-gallery.index');
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

        $this->validate(
            $request,
            [
                'title' => 'required',
                // 'banner' => 'required',
                // 'images' => 'required',
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );

        $smilegallery = SmileGallery::find($id);
        $smilegallery->title = $request->title;
        $smilegallery->meta_title = $request->meta_title;
        $smilegallery->meta_description = $request->meta_description;
        $smilegallery->meta_keywords = $request->meta_keywords;
        if ($request->hasFile('banner')) {
            $banner_img = $request->file('banner')->store('photo-gallery/Banner', 'public');
            $smilegallery->banner = $banner_img;
        }
        $smilegallery->save();

        if (isset($request->images)) {
            foreach ($request->file('images') as $image) {
                $gallery_image = $image->store('smile-gallery/images', 'public');
                $smilegalleryimages = new SmileGalleryImages();
                $smilegalleryimages->smile_gallery_id  = $id;
                $smilegalleryimages->images = $gallery_image;
                $smilegalleryimages->save();
            }
        }

        return redirect()->route('admin.smile-gallery.index');
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


    public function destroySmileImage($id)
    {
        $images = SmileGalleryImages::find($id);

        $images->delete();

        return redirect()->back();
    }
}
