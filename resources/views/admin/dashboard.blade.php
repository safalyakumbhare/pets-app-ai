@extends('layout.admin.layout')


@section('content')
    <div class="main">
        <div class="container">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div>
                        <h3 class="fw-bold mb-3">Welcome Admin</h3>
                        <!-- <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6> -->
                    </div>
                    <!-- <div class="ms-md-auto py-2 py-md-0">
                                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                            </div> -->
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <a href="user_table.php" class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Pet Owners</p>
                                            <h4 class="card-title">{{ $user }}</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fa-solid fa-paw"></i>
                                        </div>
                                    </div>
                                    <a href="pets_table.php" class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Pets</p>
                                            <h4 class="card-title">{{ $pet }}</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="fa-solid fa-user-doctor"></i>
                                        </div>
                                    </div>
                                    <a href="doctor_table.php" class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Doctors</p>
                                            <h4 class="card-title">{{ $doctor }}</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                            <i class="fa-solid fa-house-chimney-medical"></i>
                                        </div>
                                    </div>
                                    <a href="clinic_table.php" class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Pet Clinics</p>
                                            <h4 class="card-title">{{ $clinic }}</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-8">
                        <div class="card card-round">
                            <div class="card-header">
                                <div class="card-head-row card-tools-still-right">
                                    <div class="card-title">New Doctor Approvals</div>

                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <!-- Projects table -->
                                        <table class="table align-items-center mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Doctor Name</th>
                                                    <th scope="col" class="text-end">Address</th>
                                                    <th scope="col" class="text-end">Specialization</th>
                                                    <th scope="col" class="text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($doctors as $doctor_data)
                                                    <tr>
                                                        <th scope="row">
                                                            {{ $doctor_data->name }}
                                                        </th>
                                                        <td class="text-end"> {{ $doctor_data->address }}</td>
                                                        <td class="text-end"> {{ $doctor_data->specialization }}</td>
                                                        <td class="text-center">
                                                            <a href="#"><i
                                                                    class="fa-solid text-primary fa-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                @if ($doctors->isEmpty())
                                                    <tr>
                                                        <td colspan="4" class="text-center">No New Doctor Approvals</td>
                                                    </tr>
                                                @endif

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-round">
                                <div class="card-header">
                                    <div class="card-head-row card-tools-still-right">
                                        <div class="card-title">New Clinic Approvals</div>

                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <!-- Projects table -->
                                        <table class="table align-items-center mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Clinic Name</th>
                                                    <th scope="col">Clinic Doctor</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Pets Type</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($clinics as $clinic_data)
                                                    @php
                                                        $doctor_data = \App\Models\Doctor::find($clinic_data->doctor_id);
                                                    @endphp


                                                    <tr>
                                                        <th scope="row">
                                                            {{ $clinic_data->name }}
                                                        </th>
                                                        <td> {{ $doctor_data->name }}</td>
                                                        <td> {{ $clinic_data->address }}</td>
                                                        <td> {{ $clinic_data->pet_type }}</td>
                                                        <td class="text-center">
                                                            <a
                                                                href="clinic_detail.php?clinic_id={{ $clinic_data->clinic_id }}"><i
                                                                    class="fa-solid text-primary fa-eye"></i></a>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                                @if ($clinics->isEmpty())
                                                    <tr>
                                                        <td colspan="5" class="text-center">No New Clinic Approvals
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-round">
                            <div class="card-body">
                                <div class="card-head-row card-tools-still-right">
                                    <div class="card-title">New Users</div>
                                </div>
                                <div class="card-list py-4">

                                    @foreach ($users as $new_data)
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="#" alt="..." class="avatar-img rounded-circle" />
                                            </div>
                                            <div class="info-user ms-3">
                                                <div class="username">{{ $new_data->username }}</div>
                                                <div class="status">{{ $new_data->address }}</div>
                                            </div>

                                            <a href="user_view.php?user_id={{ $new_data->user_id }}"
                                                class="btn btn-icon btn-link btn-primary op-8">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                        </div>
                                    @endforeach

                                    @if ($users->isEmpty())
                                        <div class="item-list justify-content-center">
                                            <p>No New User Found</p>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="card card-round">
                            <div class="card-body">
                                <div class="card-head-row card-tools-still-right">
                                    <div class="card-title">New Doctors</div>
                                </div>
                                <div class="card-list py-4">
                                    @foreach ($doctors_today as $doctor_data)
                                    @endforeach
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/images/doctors/{{ $doctor_data->profile }}" alt="..."
                                                class="avatar-img rounded-circle" />
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">{{ $doctor_data->name }}</div>
                                            <div class="status">{{ $doctor_data->address }}</div>
                                        </div>

                                        <a href="doctor_detail.php?doctor_id={{ $doctor_data->doctor_id }}"
                                            class="btn btn-icon btn-link btn-primary op-8">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </div>

                                    @if ($doctors_today->isEmpty())
                                        <div class="item-list justify-content-center">
                                            <p>No New User Found</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
