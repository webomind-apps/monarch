<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::paginate(10);
        return view('admin.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->file('icon'));
        $this->validate($request, ['name' => 'required', 'cost' => 'required', 'icon' => 'required']);

        $plan = new Plan;
        $plan->name = $request->name;
        $plan->cost = $request->cost;
        $plan->note = $request->note;
        $icon = $request->file('icon')->store('plans/icon', 'public');
        $plan->icon_path = $icon;
        if ($request->in_homepage) {
            $plan->in_homepage = $request->in_homepage;
        }
        $plan->save();
        return redirect()->route('admin.plans.index')->with('message', 'Plan added successfully!');
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
        $plan = Plan::find($id);
        return view('admin.plans.edit', compact('plan'));
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

        $plan = Plan::find($id);
        $plan->name = $request->name;
        $plan->cost = $request->cost;
        $plan->note = $request->note;
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon')->store('plans/icon', 'public');
            $plan->icon_path = $icon;
        }
        if ($request->in_homepage) {
            $plan->in_homepage = $request->in_homepage;
        } else {
            $plan->in_homepage = 0;
        }

        $plan->save();
        return redirect()->route('admin.plans.index')->with('message', 'Plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);

        $plan->delete();

        return redirect()->route('admin.plans.index')->with('message', 'Plan deleted successfully');
    }
}
