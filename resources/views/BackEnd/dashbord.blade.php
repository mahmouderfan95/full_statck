@extends('BackEnd.layoutes.mastar')
@section('title','Dashbord')
@section('content')
<!-- dashbord -->
<div class="dashbord">
    <h2 class="display-4 text-center mb-4">Dashbord</h2>
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
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-4">
                    <!-- users -->
                    <div class="users">
                        <p>Users</p>
                        <span>{{$userCount}}</span>
                    </div>
                    <!-- users -->
                </div>
                <!-- col -->
                <!-- col -->
                <div class="col-4">
                    <!-- messages -->
                    <div class="messages">
                        <p>Messages</p>
                        <span>{{$messageCount}}</span>
                    </div>
                    <!-- messages -->
                </div>
                <!-- col -->
                <!-- col -->
                <div class="col-4">
                    <!-- services -->
                    <div class="services">
                        <p>Services</p>
                        <span>200</span>
                    </div>
                    <!-- services -->
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- col -->
    </div>
    <!-- row -->
</div>
<!-- dashbord -->

@endsection
