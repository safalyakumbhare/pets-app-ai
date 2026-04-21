@extends('layout.admin.layout')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Pets</h3>


            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Pets</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-resposive">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Breed</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th style="width: 10%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pet as $pet_row)
                                        <tr>
                                            <td>
                                                <div class="avatar-xxl">
                                                    <img src="" class="avatar-img rounded-circle"
                                                        alt="no image found">
                                                </div>
                                            </td>
                                            <td>{{ $pet_row->name }}</td>
                                            <td>{{ $pet_row->breed }}</td>
                                            <td>{{ $pet_row->gender }}</td>
                                            <td>

                                                @if ($pet_row->status == 'Active')
                                                    <span class='text-success'>Active</span>
                                                @else
                                                    <span class='text-danger'>Inactive</span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="form-button-action">

                                                    <a href="{{ route('admin.pet.delete', $pet_row->id) }}" data-bs-toggle="tooltip" title="Remove"
                                                        class="btn btn-link btn-danger" onclick="return remove()"
                                                        data-original-title="Remove">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                    <a href="{{ route('admin.status.update' , $pet_row->id)}}" data-bs-toggle="tooltip" title="View details"
                                                        class="btn btn-link btn-success" data-original-title="View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        function remove() {
            return confirm('Do you want to Remove this pet?');
        }
    </script>
@endsection
