<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Promotion;
use App\Models\PromotionPlan;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        $promotions = Promotion::first();
        return view('admin.promotions.index', compact('promotions', 'plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans = Plan::all();
        return view('admin.promotions.create', compact('plans'));
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
                'title' => 'required',
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );

        $banner = $request->file('banner')->store('promotions/banner', 'public');
        $promotions = new Promotion();
        $promotions->banner = $banner;
        $promotions->title = $request->title;
        $promotions->meta_title = $request->meta_title;
        $promotions->meta_description = $request->meta_description;
        $promotions->meta_keywords = $request->meta_keywords;
        $promotions->save();

        if (!is_null($request->plan_id)) {
            foreach ($request->plan_id as $plan) {
                $promotions_plans = new PromotionPlan();
                $promotions_plans->plans_id  = $plan;
                $promotions_plans->promotion_id  = $promotions->id;
                $promotions_plans->save();
            }
        }

        return redirect()->route('admin.promotions.index');
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
        $promotions = Promotion::find($id);
        $plans = Plan::all();
        return view('admin.promotions.edit', compact('promotions', 'plans'));
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
                'title' => 'required',
                'meta_title' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
            ]
        );

        $promotions = Promotion::find($id);
        if ($request->hasFile('banner')) {
            $banner_image = $request->file('banner')->store('promotions/banner', 'public');
            $promotions->banner = $banner_image;
        }
        $promotions->title = $request->title;
        $promotions->meta_title = $request->meta_title;
        $promotions->meta_description = $request->meta_description;
        $promotions->meta_keywords = $request->meta_keywords;
        $promotions->save();

        $promotions->promotions()->delete();
        if (!is_null($request->plan_id)) {
            foreach ($request->plan_id as $plan) {
                $promotion_plans = new PromotionPlan();
                $promotion_plans->promotion_id = $promotions->id;
                $promotion_plans->plans_id = $plan;
                $promotion_plans->save();
            }
        }

        return redirect()->route('admin.promotions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotions = Promotion::find($id);

        $promotions->delete();

        return redirect()->route('admin.promotions.index');
    }
}
