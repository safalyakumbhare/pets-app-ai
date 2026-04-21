<?php

namespace App\Http\Controllers\Doctor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('doctor.doctor_dashboard');
    }
}
