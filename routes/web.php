<?php

use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\AdminPetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserPetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Publc routes
Route::get('/', function () {
    return view('auth.login');
})->name('loginpage');

Route::get('who_register',function(){
    return view('who_register');
})->name('who_register');


Route::get('user/create',[UserController::class,'create'])->name('user.create');
Route::post('user/store',[UserController::class,'store'])->name('user.store');

Route::get('doctor/create',[DoctorController::class,'create'])->name('doctor.create');
Route::post('login',[AuthController::class,'login'])->name('login');

Route::prefix('admin')->middleware('role')->group(function(){

    Route::get('dashboard',[AdminDashboard::class,'index'])->name('admin.dashboard');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');


    // Users Route
    Route::get('users-list',[UserController::class,'index'])->name('admin.users.list');
    Route::get('user-view/{id}',[UserController::class,'show'])->name('admin.user.view');
    Route::get('user-delete/{id}',[UserController::class,'destroy'])->name("admin.user.delete");
    Route::get('user-status-update/{id}',[UserController::class,'status_update'])->name("admin.user.status.update");


    // pets route

    Route::get('pets-list',[AdminPetController::class,'index'])->name('admin.pet.list');
    Route::get('pets-status/update/{id}',[AdminPetController::class,'status_update'])->name('admin.status.update');
    Route::get('pets-delete/{id}',[AdminPetController::class,'delete'])->name('admin.pet.delete');
});


Route::prefix('user')->middleware('role')->group(function(){

    Route::get('dashboard',[UserDashboardController::class,'index'])->name('user.dashboard');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');


    // pets
    Route::get('pets/create',[UserPetController::class,'index'])->name('user.pets.create');
    Route::post('pets/store',[UserPetController::class,'store'])->name('user.pet.store');
});
