<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user_registration_css/style.css') }}">
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('images/user_registration.jpg') }}" alt="">
                </div>
                <div class="signup-form">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                    <form method="POST" action="{{ route('user.store') }}" class="register-form" id="register-form"
                        enctype="multipart/form-data">
                        @csrf
                        <h2>User Registration Form</h2>

                        <div class="form-group">
                            <label for="name">Username :</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Enter your Name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address :</label>
                            <input type="email" name="email" value="{{ old('email') }}"  placeholder="Enter your email" id="email" />
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number :</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number" id="phone" maxlength="10" />
                        </div>

                        <div class="form-group">
                            <label for="address">Address :</label>
                            <!-- <input type="text" name="address"  id="address" /> -->
                            <textarea name="address" id="address" value="{{ old('address') }}"  placeholder="Enter your address"></textarea>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male"  value="Male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female"  value="Female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob">DOB :</label>
                            <input type="date" name="dob" value="{{ old('dob') }}"  id="dob">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Pincode :</label>
                            <input type="text" name="pincode" value="{{ old('pincode') }}"  id="pincode">
                        </div>
                        <div class="form-group">
                            <label for="imageupload">Profile Photo :</label>
                            <input type="file" name="imageupload" class="form-control" value="{{ old('imageupload') }}"  accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password"  id="password" />
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password :</label>
                            <input type="password" name="confirmpassword" value="{{ old('confirmpassword') }}"  id="confirmpassword" />
                        </div>
                        <div class="form-submit">
                            <input type="reset" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Register" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <!-- <script src="assets/js/user_registration_js/vendor/jquery/jquery.min.js"></script>/ -->
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery.validate.min.js') }}"></script>
</body>

</html>
