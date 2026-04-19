@extends('layout.admin.layout')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">User Details</h3>

        </div>

        <div class="row">
            <div class="col-md-12">


                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 text-center">
                        <div class="card">

                            <div class="card-body">
                                <img src="{{ asset('public/storage/images/' . $user->profile) }}"
                                    class="card-img-top rounded" style="height: 200px;width: 200px;" alt="no profile photo">
                                <h3 class="mt-md-4">{{ $user->username }}</h3>
                                @if (isset($pet->name))
                                    <p>Owner of {{ $pet->name }}</p>
                                @else
                                    <p>Pet not Registered yet</p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Personal Information</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Name :</h6>
                                        <p>{{ $user->username }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Pet's Name :</h6>


                                        <p>{{ $pet->name ?? 'Pet not Registered' }} </p>


                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Email :</h6>
                                        <p>{{ $user->email }}</p>
                                    </div>

                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Phone :</h6>
                                        <p>{{ $user->phone }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Gender :</h6>
                                        <p>{{ $user->gender }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Date of Birth :</h6>
                                        <p>
                                            {{ date_format(date_create($user->dob), 'd-m-Y') }}
                                        </p>
                                    </div>

                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Address :</h6>
                                        <p>{{ $user->address }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Account Created On :</h6>
                                        <p>{{ $user->created_at }}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Account Updated On :</h6>
                                        <p>{{ $user->updated_at }}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-secondary fw-bold">Status :</h6>
                                        <p class="text-success">{{ $user->status }}</p>
                                    </div>

                                    <div class="w-100"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12 d-flex justify-content-center">
                                                                            <a href="user_profile_edit.php" class="btn btn-primary">Edit Profile</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
