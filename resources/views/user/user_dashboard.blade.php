@extends('layout.user.layout')


@section('content')
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <h1>Welcome {{ Auth::user()->username }}</h1>
            </div>
        </div>
    </div>

@endsection
