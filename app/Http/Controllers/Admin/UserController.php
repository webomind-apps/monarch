<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\ClinicAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^.*(?=.{4,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/',
            ],

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->get('password'));
        $user->admin_type = $request->admin_type;
        $user->save();

        if (!is_null($request->clinics)) {
            foreach ($request->clinics as $clinic) {
                $clinicAdmin = new ClinicAdmin();
                $clinicAdmin->user_id = $user->id;
                $clinicAdmin->clinic_id = $clinic;
                $clinicAdmin->save();
            }
        }


        return redirect()->route('admin.users.index')->with('message', 'User added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $users = User::find($id);
        return view('admin.users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
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

        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->admin_type = $request->admin_type;
        $users->save();

        $users->clinics()->delete();
        if (isset($request->clinics)) {
            foreach ($request->clinics as $clinic) {
                $clinicAdmin = new ClinicAdmin();
                $clinicAdmin->user_id = $id;
                $clinicAdmin->clinic_id = $clinic;
                $clinicAdmin->save();
            }
        }

        return redirect()->route('admin.users.index')->with('message', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.users.index')->with('message', 'User deleted successfully');
    }


    public function clinics()
    {
        $clinics = Clinic::all();
        return response()->json($clinics);
    }
}
