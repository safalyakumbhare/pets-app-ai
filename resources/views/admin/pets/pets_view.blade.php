@extends('layout.admin.layout')


@section('content')

<div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h1 class="fw-bold mb-3">Pets Detail</h1>

                    </div>

                    <div class="row">

                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                                    <h1 class="card-title">Pet Image</h1>
                                                </div>
                                                <div class="card-body">
                                                    <img src="#"
                                                        class="card-img-top" alt="Clinic Image Not Found">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                    <div class="card-title">Pet Information</div>
                                </div>
                                <div class="card-body">
                                    <div class="row ">

                                        <div class="col-md-3 ">
                                            <h5 class="text-secondary">Name :</h5>
                                            <p>{{  $pet_row->name }}></p>
                                        </div>

                                        <div class="col-md-3 ">
                                            <h5 class="mt-1 text-secondary">Pet of :</h5>

                                            <p>{{  $user_row->username }}></p>
                                        </div>

                                        <div class="col-md-3 ">
                                            <h5 class="mt-1 text-secondary">Age :</h5>

                                           @php
                                            $dob = $pet_row->dob

                                            // Convert the birthdate into a DateTime object
                                            $birthDate = new DateTime($dob);
                                            $currentDate = new DateTime(); // Get the current date
                                        
                                            // Calculate the difference between the current date and birth date
                                            $age = $currentDate->diff($birthDate)->y;

                                            // Print the age
                                            // echo $age . " years";
                                        
                                            if ($age == 0) {
                                                echo "Newly born puppy";
                                            } else {
                                                echo $age . " years";

                                            }
                                            @endphp
                                        </div>

                                        <div class="col-md-3 ">
                                            <h5 class="text-secondary">Date of Birth :</h5>
                                            <p>{{ $date = date_create($pet_row->dob)
                                             date_format($date, "d-m-Y") }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                    <div class="card-title">Pet Type</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-4 d-flex flex-column justify-content-between">
                                            <div class="form-group">
                                                <h5 class="text-secondary">Pet Type :</h5>
                                                <p>{{  $pet_row->type }}></p>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="mt-1 text-secondary">Breed :</h5>

                                                <p>{{  $pet_row->breed }}></p>
                                            </div>

                                        </div>


                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <h5 class="text-secondary">Gender :</h5>
                                                <p>{{  $pet_row->gender }}></p>
                                            </div>

                                            <div class="form-group">
                                                <h5 class="mt-1 text-secondary">Color :</h5>
                                                <p>{{  $pet_row->color }}></p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5 class="text-secondary">Weight :</h5>
                                                <p>{{  $pet_row->weight . " kgs" }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                    <div class="card-title">Pet Medical Condition</div>
                                </div>
                                <div class="card-body">
                                    <p class="fw-light card-text">{{  $pet_row->medical }}></p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                                    <div class="card-title">Pet Description</div>
                                </div>
                                <div class="card-body">
                                    <p class="fw-light card-text">{{  $pet_row->note }}></p>
                                </div>
                            </div>
                        </div>



                    </div>



            </div>

@endsection