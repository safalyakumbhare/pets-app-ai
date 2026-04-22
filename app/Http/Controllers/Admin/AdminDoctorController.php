<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminDoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.doctors_list', compact('doctors'));
    }

    public function view($id){
        $doctor_row = Doctor::find($id);
        return view('admin.doctors.doctor_view', compact('doctor_row'));
    }

    public function update_status($id){
        $doctor = Doctor::find($id);
        if($doctor->status == 'Active'){
            $doctor->status = 'Inactive';
        }else{
            $doctor->status = 'Active';
        }
        $doctor->save();
        return redirect()->route('admin.doctor.list')->with('success','Doctor status updated successfully');
    }
}
