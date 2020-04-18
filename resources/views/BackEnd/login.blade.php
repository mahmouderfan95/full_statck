@extends('BackEnd.layoutes.mastar')
@section('title','Login')
@section('content')
<!-- login -->
<div class="login">
    <!-- container -->
    <div class="container">
        <h2 class="display-4 text-center">Login</h2>
        {{-- @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach --}}
        <form action="{{route('loginPost')}}" method="POST">
            {{ csrf_field() }}
            <!-- form group -->
            <div class="form-group">
                <i class="fa fa-envelope-o fa-fw"></i>
                <label>E-mail</label>
                <input placeholder="Email" type="text" name="email" class="form-control" required = "required">
            </div>
            <!-- form group -->
            <!-- form group -->
            <div class="form-group">
                <i class="fa fa-lock fa-fw"></i>
                <label>password</label>
                <input placeholder="password" type="password" name="password" class="form-control" required = "required">
            </div>
            <!-- form group -->
            <!-- form group -->
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Loin">
            </div>
            <!-- form group -->
        </form>
    </div>
    <!-- container -->
</div>
<!-- login -->

@endsection
