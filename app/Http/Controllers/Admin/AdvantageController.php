<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advantages = Advantage::paginate(10);
        return view('admin.advantages.index', compact('advantages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advantages.create');
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
            'name' => 'required',
            'icon' => 'required',
            'description' => 'required'
        ]);

        $icon_path = $request->file('icon')->store('advantages/icon', 'public');

        $advantages = new Advantage();
        $advantages->name = $request->name;
        $advantages->icon_path = $icon_path;
        $advantages->description = $request->description;

        if ($request->in_homepage) {
            $advantages->in_homepage = $request->in_homepage;
        }


        $advantages->save();
        return redirect()->route('admin.advantages.index')->with('message', 'Advantage added successfully');
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
        $advantage = Advantage::find($id);
        return view('admin.advantages.edit', compact('advantage'));
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
        $advantage = Advantage::find($id);
        $advantage->name = $request->name;

        if ($request->hasFile('icon')) {
            $icon_path = $request->file('icon')->store('advantages/icon', 'public');
            $advantage->icon_path = $icon_path;
        }
        $advantage->description = $request->description;
        if ($request->in_homepage) {
            $advantage->in_homepage = $request->in_homepage;
        } else {
            $advantage->in_homepage = 0;
        }

        $advantage->save();

        return redirect()->route('admin.advantages.index')->with('message', 'Advantage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advantages = Advantage::find($id);

        $advantages->delete();

        return redirect()->route('admin.advantages.index')->with('message', 'Advantage deleted successfully');
    }
}
