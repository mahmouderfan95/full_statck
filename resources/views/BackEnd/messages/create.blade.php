@extends('BackEnd.layoutes.mastar')
@section('title','Create New Message')
@section('content')
<!-- users -->
<div class="message-page">
    <h2 class="display-4 text-center">Create New Message</h2>
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
            <form action="{{route('messages.store')}}" method="POST">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class = "form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
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