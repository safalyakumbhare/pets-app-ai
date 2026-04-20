<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPetController extends Controller
{
    public function index()
    {
        return view('user.pet.pet_register');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'petname' => 'required',
        //     'species' => 'required',
        //     'breed' => 'requried',
        //     'dob' => 'required',
        //     'gender' => 'required',
        //     'color' => 'required',
        //     'weight' => 'required',
        //     'image' => 'required',
        //     'medical' => 'required'
        // ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->storeAs('images', $imageName, 'public');
            $imagePath = 'storage/images/' . $imageName;
        }

        $pet = new Pet();
        $pet->name = $request->petname;
        $pet->type = $request->species;
        $pet->breed = $request->breed;
        $pet->dob = $request->dob;
        $pet->gender = $request->gender;
        $pet->color = $request->color;
        $pet->weight = $request->weight;
        $pet->medical = $request->medical;
        $pet->image = $imagePath;
        $pet->note = $request->notes;
        $pet->user_id = Auth::user()->id;
        $pet->status = 'Active';


        if ($pet->save()) {
            return redirect()->back()->with("success", "Pet registered successfully");
        } else {
            return redirect()->back()->with("error", "Something went wrong");
        }
    }
}
