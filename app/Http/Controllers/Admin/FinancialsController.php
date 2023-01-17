<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financials = Financial::first();
        return view('admin.financials.index', compact('financials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.financials.create');
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
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        $banner = $request->file('banner')->store('financials/banners', 'public');
        $image = $request->file('image')->store('financials/image', 'public');
        $financials = new Financial();
        $financials->title = $request->title;
        $financials->banner = $banner;
        $financials->image = $image;
        $financials->description = $request->description;
        $financials->meta_title = $request->meta_title;
        $financials->meta_description = $request->meta_description;
        $financials->meta_keywords = $request->meta_keywords;
        $financials->save();

        return redirect()->route('admin.financials.index')->with('message', 'Financials details added successfully!');
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
        $financials = Financial::find($id);
        return view('admin.financials.edit', compact('financials'));
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
            // 'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        $financials = Financial::find($id);
        $financials->title = $request->title;
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('services/banners', 'public');
            $financials->banner = $banner;
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('services/image', 'public');
            $financials->image = $image;
        }
        $financials->description = $request->description;
        $financials->meta_title = $request->meta_title;
        $financials->meta_description = $request->meta_description;
        $financials->meta_keywords = $request->meta_keywords;
        $financials->save();

        return redirect()->route('admin.financials.index')->with('message', 'Financials details updated successfully!');
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
