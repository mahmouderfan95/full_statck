@extends('BackEnd.layoutes.mastar')
@section('title','Users');
@section('content')
<!-- users -->
<div class="users-page">
    <h2 class="display-4 text-center">Users</h2>
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
            
    <a href="{{route('users.create')}}" class="btn btn-primary mb-2"><i class="fa fa-plus fa-fw"></i> Add New User</a>
    <!-- table -->
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>PhoneNumber</th>
                <th>Role</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <td>{{$user->id}}</td>
                <td>{{$user->firstName}}</td>
                <td>{{$user->lastName}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phoneNumber}}</td>
                <td>{{$user->is_admin}}</td>
                <td>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-info"><i class="fa fa-edit fa-fw"></i> Edit</a>
                    <form style = "display:inline-block" action="{{route('users.destroy',$user->id)}}" method="POST">
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