@extends('layout.admin.layout')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h1 class="fw-bold mb-3">Doctor Detail</h1>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header rounded-top-3" style="background-color: lightgray;">
                            <div class="card-title">Doctor Information</div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-md-4">
                                    <img src="#" class="img-fluid rounded-4" alt="No Profile Photo">
                                </div>
                                <div class="col-md-7 ">
                                    <div class="row ">
                                        <div class="col-md-5 m-md-2">
                                            <h5 class="text-secondary">Doctor Name :</h5>
                                            <p class="fw-light">{{ $doctor_row->name }}</p>
                                        </div>
                                        <div class="col-md-5 m-md-2">
                                            <h5 class="mt-1 text-secondary">Address :</h5>

                                            <p class="fw-light">{{ $doctor_row->address }}</p>
                                        </div>
                                        <div class="col-md-5 m-md-2">
                                            <h5 class="mt-1 text-secondary">Email :</h5>

                                            <p class="fw-light">{{ $doctor_row->email }}</p>
                                        </div>
                                        <div class="col-md-5 m-md-2">
                                            <h5 class="mt-1 text-secondary">Phone Number :</h5>

                                            <p class="fw-light">{{ $doctor_row->phone }}</p>
                                        </div>
                                        <div class="col-md-5 m-md-2">
                                            <h5 class="text-secondary">Date of Birth :</h5>
                                            <p class="fw-light">{{ date_format(date_create($doctor_row->dob), 'd-m-Y') }}
                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header rounded-top-3" style="background-color: lightgray;">
                            <div class="card-title">Pets Portal Details</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5 class="text-secondary">Status :</h5>

                                        @if ($doctor_row->status == 'Active')
                                            <p> class='text-success'>Active</p>
                                        @else
                                            <p class='text-danger'>Inactive</p>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5 class="text-secondary">Approval :</h5>

                                        @if ($doctor_row->approval == 'Approved')
                                            <p class='text-success'>Approved</p>
                                        @elseif ($doctor_row->approval == 'Pending')
                                            <p class='text-warning'>Pending</p>
                                        @elseif ($doctor_row->approval == 'Rejected')
                                            <p class='text-danger'>Rejected</p>
                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5 class="text-secondary">Registration At :</h5>
                                        <p class="fw-light">{{ date_format(date_create($doctor_row->created_at), 'd-m-Y') }}
                                            <br> {{ date_format(date_create($doctor_row->created_at), 'h:i:s') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5 class="text-secondary">Updated At : </h5>
                                        <p class="fw-light">{{ date_format(date_create($doctor_row->updated_at), 'd-m-Y') }}
                                            <br> {{ date_format(date_create($doctor_row->updated_at), 'h:i:s') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header rounded-top-3" style="background-color: lightgray;">
                            <div class="card-title">Doctor Professional Details</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="text-secondary">License Number :</h5>
                                        <p class="fw-light">{{ $doctor_row->license_no }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="text-secondary">Specialization :</h5>
                                        <p class="fw-light">{{ $doctor_row->specialization }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <h5 class="text-secondary">Experience :</h5>
                                        <p class="fw-light">{{ $doctor_row->experience }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="text-secondary">Certifications and Qualifications :</h5>
                                        <p class="fw-light">{{ $doctor_row->certification }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @if ($doctor_row->approval == 'Pending' || $doctor_row->approval == 'Rejected')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body justify-content-center">

                        <div class="row justify-content-center">
                            <div class="col-md-2">

                                <a href="doctor_approve_reject.php?approve_id={{ $doctor_row->id }}"
                                    class="btn btn-success btn-block" name="approve">
                                    Approve
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="doctor_approve_reject.php?reject_id={{ $doctor_row->id }}"
                                    class="btn btn-danger btn-block" name="reject">Reject</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
