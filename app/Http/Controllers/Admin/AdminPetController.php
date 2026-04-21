<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPetController extends Controller
{
    public function index()
    {
        $pet = Pet::all();

        return view('admin.pets.pets_list', compact('pet'));
    }


    public function view(string $id)
    {
        $pet_row = Pet::findOrFail($id);

        $user_row = User::find($pet_row->id);


        return view('admin.pets.pets_view',compact('pet_row','user_row'));
    }


    public function delete($id){

    $pet = Pet::where('id',$id)->delete();

    return redirect()->back()->with('success','Pet Removed Successfully');

    }
}
