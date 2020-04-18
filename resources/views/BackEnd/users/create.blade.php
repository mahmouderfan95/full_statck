@extends('BackEnd.layoutes.mastar')
@section('title','Create New User')
@section('content')
<!-- users -->
<div class="users-page">
    <h2 class="display-4 text-center">Create New User</h2>
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
            <form action="{{route('users.store')}}" method="POST">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label>First Name</label>
                    <input type="text" name="firstName" class="form-control">
                </div>
                <div class = "form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastName" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class = "form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class = "form-group">
                    <label>Phone Number</label>
                    <input type="number" name="phoneNumber" class="form-control">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="is_admin" class="form-control">
                        <option value="0">...</option>
                        <option value="default">Default</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-primary">
                </div>
            </form>

        </div>
        <!-- col -->
    </div>
    <!-- row -->

</div>
<!-- users page  -->
@endsection