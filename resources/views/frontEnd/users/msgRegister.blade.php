@extends('frontEnd.layoutes.mastar')
@section('title','Hello ' . $user->firstName)
@section('content')
    <div class="container">
        <div class="msg-reg text-center">
            <img style = "max-width:200px" class="img-thumbnail" src="{{url('uploads/front/users/' . $user->image)}}">
            <p>Welcome {{$user->firstName . ' ' . $user->lastName}}</p>
            <a href = "#" class="btn btn-primary">Login</a>
            <a href = "{{route('website')}}" class="btn btn-info">Back To Website</a>
        </div>
    </div>

@endsection
