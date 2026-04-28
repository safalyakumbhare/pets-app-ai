@extends('layout.admin.layout')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Pet Owners</h3>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">

                            @if (session('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>
                                            {{ session('success') }}
                                        </li>
                                    </ul>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <div class="ul">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                </div>

                            @endif

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Profile Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th style="width: 10%; text-align:center;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if ($users)
                                            <tr>
                                                <td class="text-center" colspan="6">No User Found</td>
                                            </tr>
                                        @endif
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xxl">
                                                        <img src="{{ asset('public/storage/images/' . $user->profile) }}"
                                                            class="avatar-img rounded-circle" alt="no image found">
                                                    </div>
                                                </td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>
                                                    @if ($user->status == 'Active')
                                                        <span class='text-success'>Active</span>
                                                    @else
                                                        <span class='text-danger'>Inactive</span>
                                                    @endif
                                                </td>


                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{ route('admin.user.delete', $user->id) }}"
                                                            data-bs-toggle="tooltip" title="Remove"
                                                            class="btn btn-link btn-primary " data-original-title="Remove"
                                                            onclick="return remove()">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>


                                                        @if ($user->status == 'Active')
                                                            <a href="{{ route('admin.user.status.update',$user->id) }}" data-bs-toggle="tooltip" title="Inactive User"
                                                                class="btn btn-link btn-danger"
                                                                onclick="return confirmDeactivation()"
                                                                data-original-title="Inactive">
                                                                <i class="fa-solid fa-user-xmark"></i>
                                                            </a>
                                                        @elseif ($user->status == 'Inactive')
                                                            <a href="{{ route('admin.user.status.update',$user->id) }}" data-bs-toggle="tooltip" title="Active User"
                                                                class="btn btn-link btn-success"
                                                                onclick="return confirmactivation()"
                                                                data-original-title="Inactive">
                                                                <i class="fa-solid fa-user-check"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{ route('admin.user.view', $user->id) }}"
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

@section('js')
    <script>
        function confirmDeactivation() {
            return confirm('Do you want to Deactivate this user?');
        }

        function confirmactivation() {
            return confirm('Do you want to activate this user?');
        }

        function remove() {
            return confirm('Do you want to Remove this user?');
        }
    </script>
