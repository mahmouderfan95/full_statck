@extends('frontEnd.layoutes.mastar')
@section('title','Register')
@section('content')
<!-- register-section -->
<div class="register-section">
    <!-- overlay -->
    <div class="overlay">
            <!-- navbar page -->
            @include('frontEnd.layoutes.navbar')
            <!-- navbar page -->
            <!-- cotainer -->
            <div class="container">
                <h2 class="display-4" style="margin-top:50px">Register</h2>
            </div>
            <!-- container -->
                <!-- error page -->
            @include('frontEnd.layoutes.error')
            <!-- error page -->
            @if(session('sucMsg'))
            <div class="alert alert-success">{{session('sucMsg')}}</div>
            @endif
            <form action="{{route('postRegister')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-6">
                        <!-- form-group -->
                        <div class="form-group">
                            <label>FirstName</label>
                            <input required = "required" type="text" name="firstName" class="form-control" value="{{old('firstName')}}">
                        </div>
                        <!-- form-group -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-6">
                        <!-- form-group -->
                        <div class="form-group">
                            <label>LastName</label>
                            <input required = "required" type="text" name="lastName" class="form-control" value="{{old('lastName')}}">
                        </div>
                        <!-- form-group -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-6">
                        <!-- form-group -->
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="image form-control">
                        </div>
                        <!-- form-group -->
                    </div>
                    <!-- col -->
                    <!-- col show img -->
                    <div class="col-6">
                        <img src="{{url('uploads/front/users/user.png')}}" class="img-perview img-thumbnail" style="max-width:85px">
                    </div>
                    <!-- col show img -->
                    <!-- col -->
                    <div class="col-6">
                        <!-- form-group -->
                        <div class="form-group">
                            <label>E-mail</label>
                            <input required = "required" type="email" name="email" class="form-control" value="{{old('email')}}">
                        </div>
                        <!-- form-group -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-6">
                        <!-- form-group -->
                        <div class="form-group">
                            <label>password</label>
                            <input required = "required" type="password" name="password" class="form-control" value="{{old('password')}}">
                        </div>
                        <!-- form-group -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-6">
                        <!-- form-group -->
                        <div class="form-group">
                            <label>PhoneNumber</label>
                            <input required = "required" type="tel" name="phoneNumber" class="form-control" value="{{old('phoneNumber')}}">
                        </div>
                        <!-- form-group -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-12">
                        <!-- form-group -->
                        <div class="form-group">
                            <input type="submit" Value="Register" class="btn btn-info">
                        </div>
                        <!-- form-group -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

            </form>
        </div>
        <!-- overlay -->
    </div>
    <!-- register-section -->
    @include('frontEnd.layoutes.footer')
@endsection
