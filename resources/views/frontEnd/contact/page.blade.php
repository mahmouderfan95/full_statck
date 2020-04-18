@extends('frontEnd.layoutes.mastar')
@section('title','Welcome' . ' ' . $contact->name)
@section('content')
    <div class="container">
        <h2 class="display-4">welocme to contact us page</h2>
        <div class="alert alert-success">
            Hello {{$contact->name}} your Messge is sended !
        </div>
        <a href="{{route('website')}}" class="btn btn-info">Back To Home Page</a>


    </div>

@endsection

