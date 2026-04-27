@extends('layout.doctor.layout')


@section('content')
     <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Welcome {{   $row['name  }}</h3>


                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Your Clinics</h4>
                                    <a href="clinic_register.php" class="btn btn-primary btn-round ms-auto">
                                        <i class="fa fa-plus"></i>
                                        Add Clinics
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">


                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Approval</th>
                                                <th style="width: 10%" class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                     
                                                    <tr>

                                                        <td>{{   $doctor_row->name  }}</td>
                                                        <td>{{   $doctor_row->address  }}</td>
                                                        <td>{{   $doctor_row->phone  }}</td>
                                                        <td>
                                                             
                                                            @if ($doctor_row->status == "Active") 
                                                                 <span class='text-success'>Active</span>
                                                   
                                                             @else 
                                                                 <span class='text-danger'>Inactive</span>
                                                                 @endif
                                                     </td>
                                                            

                                                             
                                                        </td>
                                                        <td>
                                                            
                                                            @if ($doctor_row->approval == "Pending") 
                                                                 <span class='text-warning'>Pending</span>
                                                             @elseif ($doctor_row->approval == "Approved") 
                                                                 <span class='text-success'>Approved</span>
                                                         @elseif ($doctor_row->approval == "Rejected") 
                                                                 <span class='text-danger'>Rejected</span>
                                                            @endif
                                                           
                                                        </td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a href="clinic_edit.php?edit_id={{   $doctor_row->clinic_id  }}"
                                                                    class="btn btn-link btn-primary "
                                                                    data-original-title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a href="clinic_table.php?dlt_id={{   $doctor_row->clinic_id  }}"
                                                                    data-bs-toggle="tooltip" title="Remove"
                                                                    class="btn btn-link btn-danger "
                                                                    data-original-title="Remove"
                                                                    onclick="return remove()">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>

                                                                <a href="clinic_view.php?clinic_id={{   $doctor_row->clinic_id  }}"
                                                                    data-bs-toggle="tooltip" title="View Details"
                                                                    class="btn btn-link btn-success "
                                                                    data-original-title="View Details">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                          
                                                <!-- <tr>
                                                    <td colspan="6" class="text-center">No Clinic Registered</td>
                                                </tr> -->
                                          
                                        </tbody>
                                    </table>
                                </div>





                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Upcoming Appointments</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Pet Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{ 
                                            $doctor_id = $row['doctor_id;
                                            $currentdatetime = date("Y-m-d H:i:s");

                                            $appointment_table = "SELECT * FROM appointment WHERE doctor_id = $doctor_id AND visit = 'Booked' AND created_at < '$currentdatetime';";

                                            $appointment_result = mysqli_query($conn, $appointment_table);

                                            if (mysqli_num_rows($appointment_result) > 0) {

                                                while ($apt = mysqli_fetch_array($appointment_result)) {

                                                    $pet_id = $apt['pet_id;
                                                    $pet_query = "SELECT name FROM pets WHERE pet_id = $pet_id";

                                                    $pet_result = mysqli_query($conn, $pet_query);
                                                    $pet_data = mysqli_fetch_array($pet_result);

                                             }}

                                                    <tr>

                                                        <td>{{  $date = strtotime($apt['appointment_date);
                                                         date('d-m-Y', $date);  }}</td>
                                                        <td>{{   $apt['appointment_time  }}</td>
                                                        <!-- <td>{{   $apt['time  }}</td> -->
                                                        <td>{{   $pet_data['name  }}</td>
                                                        <td>{{ 
                                                                if ($apt['status == "active") {
                                                                     "<span class='text-success'>Active</span>
                                                     </td>";
                                                                } else {
                                                                     "<span class='text-danger'>Inactive</span>
                                                     </td>";
                                                                }

                                                                 }}</td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a href="appointment_details.php?apt_id={{   $apt['appointment_id  }}"
                                                                    class="btn btn-link btn-primary "
                                                                    data-original-title="View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                            {{ 

                                                }
                                            } else {
                                                 "<td colspan=7 class=text-center>No Upcoming Appointments</td>";
                                            }
                                             }}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection
