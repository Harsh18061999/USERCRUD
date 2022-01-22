@extends('index')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center" style="height:100vh;">
            <div class="col-md-4">
                <div class="card">
                  <div>
                      @if(session('error'))
                          <div class="alert alert-danger" role="alert">
                              {{session('error')}}
                            </div>
                      @endif
                  </div>
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="{{route('user_login')}}">
                            @csrf
                            <div class="mb-3">
                              <label for="email" class="form-label">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                              @error('email')
                                  <p class="alert alert-danger p-0">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="pwd" class="form-label">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                              @error('pswd')
                                  <p class="alert alert-danger p-0">{{ $message }}</p>
                              @enderror
                            </div>
                            <div class="form-check mb-3">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                              </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection