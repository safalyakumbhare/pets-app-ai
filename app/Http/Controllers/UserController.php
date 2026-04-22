<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role_id', 2)->get();
        // dd($users);
        return view('admin.users.users_list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.user_registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validator
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'pincode' => 'required|min:6',
            'password' => 'required',
            'imageupload' => 'required|image'
        ]);


        $imagePath = null;

        if ($request->hasFile('imageupload')) {
            $file = $request->file('imageupload');
            $imageName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->storeAs('images', $imageName, 'public');
            $imagePath = 'storage/images/' . $imageName;
        }

        $user = new User();
        $user->username = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->status = "Active";
        $user->gender = $request->gender;
        $user->profile = $imageName;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;

        if ($user->save()) {
            return redirect()->back()->with('success', 'User Registered Successfully.');
        } else {
            return redirect()->back()->with('error', 'Error to register user.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        $pet = Pet::where('user_id', $user->id)->first();

        return view('admin.users.user_view', compact('user', 'pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function status_update(string $id)
    {
        $user = User::findOrFail($id);

        if($user->status == "Active"){
            $user->status = "Inactive";
        }else{
            $user->status = "Active";
        }

        if($user->save()){
            return redirect()->back()->with("success", "User status updated successfully");
        }
        else{
            return redirect()->back()->with("error", "Error to update user status");
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->delete();

        return redirect()->back()->with("success", 'User deleted Successfully');
    }
}
