@extends('layout.user.layout')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Pet Registration</h3>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pet Information</div>
                        </div>
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
                            <form action="{{ route('user.pet.store') }}" id="pets" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="petname">Pet Name</label>
                                            <input type="text" class="form-control" id="petname" name="petname"
                                                placeholder="Enter Your Pet Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="species">Pet Species</label>
                                            <select name="species" onchange="EnableDisableTextBox(this)" class="form-select"
                                                id="ddlModels">
                                                <option value="">Select Species</option>
                                                <option value="Dog">Dog</option>
                                                <option value="Cat">Cat</option>
                                                <option value="Bird">Bird</option>
                                                <option value="Reptile">Reptile</option>
                                            </select>


                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="breed">Breed : </label>
                                            <input type="text" name="breed" placeholder="Enter Pet's Breed"
                                                id="breed" class="form-control">
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth :</label>
                                            <input type="date" name="dob" id="dob" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label><br />
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="male"
                                                        name="gender" id="gender" />
                                                    <label class="form-check-label" for="male">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender" value="female" />
                                                    <label class="form-check-label" for="female">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <input type="text" name="color" id="color"
                                                placeholder="Enter Pet Color" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weight">Weight</label>
                                            <input type="number" name="weight" id="weight"
                                                placeholder="Enter Pet Weight in Kgs" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Pet Image : </label>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="medical">Medical Condition :</label>
                                            <textarea name="medical" id="medical" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="notes">Additional Note :</label>
                                            <textarea name="notes" id="notes" rows="5" class="form-control"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                    <button class="btn btn-danger" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('js/pet_register_js/script.js') }}"></script>
@endsection
