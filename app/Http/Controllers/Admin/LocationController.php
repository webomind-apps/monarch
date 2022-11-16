<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $location = Location::paginate(10);
        return view('admin.location.index', compact('location'));
    }

    public function create()
    {
        return view('admin.location.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $location = new Location;
        $location->name = $request->name;
        $location->save();
        return redirect()->route('admin.location.index')->with('message', 'Location added successfully!');
    }

    public function edit(Request $request, $id)
    {
        $location = Location::find($id);
        return view('admin.location.edit', compact('location'));
    }

    public function show()
    {
        //
    }

    public function update(Request $request, $id)
    {

        $location = Location::find($id);
        $location->name = $request->name;
        $location->save();
        return redirect()->route('admin.location.index')->with('message', 'Location updated successfully!');
    }

    public function destroy($id)
    {
        $location = Location::find($id);

        $location->delete();

        return redirect()->route('admin.location.index')->with('message', 'Location deleted successfully!');
    }
}
