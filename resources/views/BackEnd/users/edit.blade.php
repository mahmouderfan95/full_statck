@extends('BackEnd.layoutes.mastar')
@section('title','Edit ' . $users->firstName . ' ' . $users->lastName . ' page')
@section('content')
<!-- users -->
<div class="users-page">
    <h2 class="display-4 text-center">Edit information</h2>
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-3">
            <!-- include sidebar page -->
            @include('BackEnd.sidebar')
            <!-- include sidebar page -->
        </div>
        <!-- col -->
        <!-- col -->
        <div class="col-9">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            <form action="{{route('users.update',$users->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class = "form-group">
                    <label>First Name</label>
                    <input type="text" name="firstName" class="form-control" value="{{$users->firstName}}">
                </div>
                <div class = "form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="{{$users->lastName}}">
                </div>
                {{-- <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div> --}}
                <div class = "form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{$users->email}}">
                </div>
                <div class = "form-group">
                    <label>Phone Number</label>
                    <input type="number" name="phoneNumber" class="form-control" value="{{$users->phoneNumber}}">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="is_admin" class="form-control">
                        <option value="0">...</option>
                        <option {{$users->is_admin == 'default' ? 'selected' : ''}}>Default</option>
                        <option {{$users->is_admin == 'admin' ? 'selected' : ''}}>Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>

        </div>
        <!-- col -->
    </div>
    <!-- row -->

</div>
<!-- users page  -->
@endsection