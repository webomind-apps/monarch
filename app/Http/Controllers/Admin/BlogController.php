<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('date', 'DESC')->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
            'date' => 'required',
            'banner' => 'required',
            'image' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
          
        ]);

        $banners = $request->file('banner')->store('blogs/banners', 'public');
        $images = $request->file('image')->store('blogs/images', 'public');

        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->date = $request->date;
        $blogs->banner = $banners;
        $blogs->image = $images;
        $blogs->short_desription = $request->short_description;
        $blogs->long_desription = $request->long_description;
        $blogs->save();

        return redirect()->route('admin.blogs.index');
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
        $blog = Blog::find($id);

        return view('admin.blogs.edit', compact('blog'));
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
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->date = $request->date;
        if ($request->hasFile('banner')) {
            $banner_image = $request->file('banner')->store('gallery/banners', 'public');
            $blog->banner = $banner_image;
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('gallery/images', 'public');
            $blog->image = $image;
        }
        $blog->short_desription = $request->short_description;
        $blog->long_desription = $request->long_description;
        $blog->save();

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->route('admin.blogs.index');
    }
}
