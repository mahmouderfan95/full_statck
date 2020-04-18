@extends('frontEnd.layoutes.mastar')
@section('title','Login')
@section('content')
    @include('frontEnd.layoutes.navbar')
    <div class="login">
        <div class="overlay">
            <!-- container -->
            <div class="container">
                <h2 class="display-4">Login</h2>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                <form action="{{route('postLogin')}}" method="POST">
                    {{ csrf_field() }}
                    <!-- form group -->
                    <div class = "form-group">
                        <label>E-mail</label>
                        <input required = "required" type="text" name="email" class="form-control">
                    </div>
                    <!-- form group -->
                    <!-- form group -->
                    <div class = "form-group">
                        <label>Password</label>
                        <input required = "required" type="password" name="password" class="form-control">
                    </div>
                    <!-- form group -->
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Login">
                    </div>
                </form>
            </div>
            <!-- container -->
        </div>
        <!-- overlay -->
    </div>
    <!-- login page -->

@endsection
