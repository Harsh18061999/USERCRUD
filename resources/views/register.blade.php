@extends('index')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center" style="height:100vh;">
            <div class="col-md-8">
                <div class="card">
                     <div class="card-header text-center">Register</div>
                     <div class="card-body">
                         <form action="{{route('user.add')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name:</label>
                                            <input type="text" class="form-control" id="first_name" placeholder="Enter Your First Name" name="first_name">
                                        </div>
                                        @error('first_name')
                                            <p class="alert alert-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name:</label>
                                            <input type="text" class="form-control" id="last_name" placeholder="Enter Your Last Name" name="last_name">
                                        </div>
                                        @error('last_name')
                                            <p class="alert alert-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                        </div>
                                        @error('email')
                                            <p class="alert alert-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pwd" class="form-label">Password:</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                        </div>
                                        @error('pswd')
                                            <p class="alert alert-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address:</label>
                                            <input type="text" class="form-control" id="address" placeholder="Enter Your Address" name="address">
                                        </div>
                                        @error('address')
                                            <p class="alert alert-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="mobile_no" class="form-label">Mobile No:</label>
                                            <input type="number" class="form-control" id="mobile_no" placeholder="Enter Your Mobile Number" name="mobile_no">
                                        </div>
                                        @error('mobile_no')
                                            <p class="alert alert-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="profile_image" class="form-label">Profile Image:</label>
                                            <input type="file" class="form-control" id="profile_image" name="profile_image">
                                        </div>
                                        @error('profile_image')
                                            <p class="alert alert-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Gender:</label>
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="gender" value="1" checked>
                                                    <label class="form-check-label" for="radio1">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="gender" value="0">
                                                    <label class="form-check-label" for="radio2">Female</label>
                                                </div>
                                            </div>
                                            @error('gender')
                                                <p class="alert alert-danger p-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="hobby" class="form-label">Hobby:</label>
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="hobby[]" value="cricket" checked>
                                                    <label class="form-check-label" for="check1">Cricket</label>
                                                </div>
                                                &nbsp;
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check2" name="hobby[]" value="basketball">
                                                    <label class="form-check-label" for="check2">basketball</label>
                                                </div>
                                                &nbsp;
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check2" name="hobby[]" value="reading">
                                                    <label class="form-check-label" for="check2">reading</label>
                                                </div>
                                                &nbsp;
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check2" name="hobby[]" value="writing">
                                                    <label class="form-check-label" for="check2">writing</label>
                                                </div>
                                            </div>
                                            @error('hobby')
                                                <p class="alert alert-danger p-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-2">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection