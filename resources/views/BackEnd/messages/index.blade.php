@extends('BackEnd.layoutes.mastar')
@section('title','Messages page');
@section('content')
<!-- users -->
<div class="message-page">
    <h2 class="display-4 text-center">Messages</h2>
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
            
    <a href="{{route('messages.create')}}" class="btn btn-primary mb-2"><i class="fa fa-plus fa-fw"></i> Add New Message</a>
    <!-- table -->
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <td>{{$message->id}}</td>
                <td>{{$message->Name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td>
                    <a href="{{route('messages.edit',$message->id)}}" class="btn btn-info"><i class="fa fa-edit fa-fw"></i> Edit</a>
                    <form style = "display:inline-block" action="{{route('messages.destroy',$message->id)}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger confirm"><i class="fa fa-trash fa-fw"></i> Delete</button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
    <!-- end of table -->

        </div>
        <!-- col -->
    </div>
    <!-- row -->

</div>
<!-- users page  -->


@endsection