<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class AdminPetController extends Controller
{
    public function index()
    {
        $pet = Pet::all();

        return view('admin.pets.pets_list', compact('pet'));
    }


    public function status_update(string $id)
    {
        $pet = Pet::findOrFail($id);

        if ($pet->status == "Active") {
            $pet->status = "Inactive";
        } else {
            $pet->status = "Active";
        }

        return redirect()->back()->with("success", "Pet status updated successfully");
    }


    public function delete($id){
        
    $pet = Pet::where('id',$id)->delete();

    return redirect()->back()->with('success','Pet Removed Successfully');

    }
}
