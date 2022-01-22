@extends('index')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center" style="height:100vh;">
            <div class="d-flex justify-content-center">
                <a href="{{url('/login')}}" class="btn btn-primary btn-lg m-4">Login</a>
                <a href="{{route('register')}}" class="btn btn-primary btn-lg m-4">Register</a>
            </div>
        </div>
    </div>
@endsection