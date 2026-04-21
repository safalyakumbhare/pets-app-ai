<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.doctor_registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'profile' => 'required',
            'license' => 'required',
            'specialization' => 'required',
            'experience' => 'required',
            'certification' => 'required',
        ]);

        $imagePath = null;

        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $imageName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->storeAs('images', $imageName, 'public');
            $imagePath = 'storage/images/' . $imageName;
        }

        $doctor = new Doctor();
        $doctor->role_id = 3;
        $doctor->name = $request->fname;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->dob = $request->dob;
        $doctor->address = $request->address;
        $doctor->gender = $request->gender;
        $doctor->profile = $imageName;
        $doctor->password = Hash::make($request->password);
        $doctor->license_no = $request->license;
        $doctor->certification = $request->certification;
        $doctor->specialization = $request->specialization;
        $doctor->experience = $request->experience;
        $doctor->status = 'Inactive';
        $doctor->approval = 'Pending';


        if ($doctor->save()) {
            return redirect()->back()->with('success', 'Registration sent to approval');
        } else {
            return redirect()->back()->with('errors', 'Error while registration');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
