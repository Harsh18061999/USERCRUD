@extends('index')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center" style="height:100vh;">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">User List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Firstname</th>
                                  <th>Lastname</th>
                                  <th>email</th>
                                  <th>gender</th>
                                  <th>hobby</th>
                                  <th>mobileno</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($user as $k => $item)
                                    <tr>
                                        <td class="p-4">{{$k+1}}</td>
                                        <td class="p-4">{{$item->first_name}}</td>
                                        <td class="p-4">{{$item->last_name}}</td>
                                        <td class="p-4">{{$item->email}}</td>
                                        <td class="p-4">{{$item->gender == 1 ? 'Male' : 'Female'}}</td>
                                        <td class="p-4">{{$item->hobby}}</td>
                                        <td class="p-4">{{$item->mobile_number}}</td>
                                        <td class="d-flex">
                                            @if (Auth::user()->id == $item->id)
                                                <form action="{{route('user.view')}}" method="POST" class="m-2">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{$item->id}}">
                                                    <button type="button" class="btn btn-primary">Update</button>
                                                </form>
                                                <form action="{{route('user.delete')}}" method="POST" class="m-2">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{$item->id}}">
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </form>
                                            @else
                                                <div class="p-4">Not Access</div>
                                            @endif
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
@endsection