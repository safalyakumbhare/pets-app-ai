@extends('layout.doctor.layout')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Doctors</h3>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">


                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Profile Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Approval</th>
                                            <th style="width: 10%; text-align:center;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($doctors as $doctor)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xxl">
                                                        <img src="#" class="avatar-img rounded-circle"
                                                            alt="no image found">
                                                    </div>
                                                </td>
                                                <td>{{ $doctor->name }}</td>
                                                <td>{{ $doctor->email }}</td>
                                                <td>{{ $doctor->address }}</td>
                                                <td>
                                                    @if ($doctor->status == 'Active')
                                                        <span class='text-success'>Active</span>
                                                    @else
                                                        <span class='text-danger'>Inactive</span>
                                                    @endif



                                                </td>

                                                @if ($doctor->approval == 'Approved')
                                                    <td class='text-success'>Approved</td>
                                                @elseif ($doctor->approval == 'Pending')
                                                    <td class='text-primary'>Pending</td>
                                                @elseif ($doctor->approval == 'Rejected')
                                                    <td class='text-danger'>Rejected</td>
                                                @endif
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="#" data-bs-toggle="tooltip" title="Remove"
                                                            class="btn btn-link btn-primary " data-original-title="Remove"
                                                            onclick="return remove()">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>



                                                        @if ($doctor->approval == 'Pending' || $doctor->approval == 'Rejected')
                                                            <span class='badge badge-danger'>{{ $doctor->approval}}</span>
                                                        @else
                                                            @if ($doctor->status == 'Active')
                                                                <a href="doctor_table.php?doctor_id={{ $doctor->doctor_id }}"
                                                                    data-bs-toggle="tooltip" title="Inactive Doctor"
                                                                    class="btn btn-link btn-danger"
                                                                    onclick="return confirmDeactivation()"
                                                                    data-original-title="Inactive">
                                                                    <i class="fa-solid fa-user-xmark"></i>
                                                                </a>
                                                            @elseif ($doctor->status == 'Inactive')
                                                                <a href="doctor_table.php?doctor_id={{ $doctor->doctor_id }}"
                                                                    data-bs-toggle="tooltip" title="Active Doctor"
                                                                    class="btn btn-link btn-success"
                                                                    onclick="return confirmactivation()"
                                                                    data-original-title="Inactive">
                                                                    <i class="fa-solid fa-user-check"></i>
                                                                </a>
                                                            @endif
                                                        @endif
                                                        <a href="doctor_detail.php?doctor_id={{ $doctor->doctor_id }}"
                                                            data-bs-toggle="tooltip" title="View Details"
                                                            class="btn btn-link btn-success"
                                                            data-original-title="View Details">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
