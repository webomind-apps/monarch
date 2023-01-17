<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use App\Models\PhotoGalleryImages;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = PhotoGalleryImages::all();
        $details = PhotoGallery::first();
        return view('admin.photo-gallery.index', compact('details', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo-gallery.create');
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
                'meta_description' => 'required',
                'meta_keywords' => 'required',
            ]
        );

        $photogalleryBanner = $request->file('banner')->store('photo-gallery/Banner', 'public');

        $photogallery = new PhotoGallery();
        $photogallery->title = $request->title;
        $photogallery->meta_title = $request->meta_title;
        $photogallery->meta_description = $request->meta_description;
        $photogallery->meta_keywords = $request->meta_keywords;
        $photogallery->banner = $photogalleryBanner;
        $photogallery->save();

        foreach ($request->file('images') as $image) {
            $gallery_image = $image->store('photo-gallery/images', 'public');
            $photogalleryimages = new PhotoGalleryImages();
            $photogalleryimages->photo_gallery_id  = $photogallery->id;
            $photogalleryimages->images = $gallery_image;
            $photogalleryimages->save();
        }

        return redirect()->route('admin.photo-gallery.index');
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
                'meta_description' => 'required',
                'meta_keywords' => 'required',
            ]
        );
        
        $photogallery = PhotoGallery::find($id);
        $photogallery->title = $request->title;
        $photogallery->meta_title = $request->meta_title;
        $photogallery->meta_description = $request->meta_description;
        $photogallery->meta_keywords = $request->meta_keywords;
        if ($request->hasFile('banner')) {
            $banner_img = $request->file('banner')->store('photo-gallery/Banner', 'public');
            $photogallery->banner = $banner_img;
        }
        $photogallery->save();

        if (isset($request->images)) {
            foreach ($request->file('images') as $image) {
                $gallery_image = $image->store('smile-gallery/images', 'public');
                $smilegalleryimages = new PhotoGalleryImages();
                $smilegalleryimages->photo_gallery_id  = $id;
                $smilegalleryimages->images = $gallery_image;
                $smilegalleryimages->save();
            }
        }

        return redirect()->route('admin.photo-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photogallery = PhotoGallery::find($id);

        $photogallery->delete();

        return redirect()->route('admin.photo-gallery.index');
    }


    public function destroyPhotoImage($id)
    {
        $images = PhotoGalleryImages::find($id);

        $images->delete();

        return redirect()->back();
    }
}
