<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function index(){

        $user = User::where('role_id',2)->count();
        $doctor = Doctor::where('role_id',3)->count();
        $pet = Pet::count();
        $clinic = Clinic::count();

        $doctors = Doctor::where('approval','Pending')->get();
        $clinics = Clinic::where('approval','Pending')->get();
        $users = User::whereDate('created_at',today())->get();
        $doctors_today = Doctor::whereDate('created_at',today())->get();

        return view('admin.dashboard',compact('user','doctor','pet','clinic','doctors','users','doctors_today','clinics'));
    }
}
