@extends('frontEnd.layoutes.mastar')
@section('title','Profile page')
@section('content')
    @include('frontEnd.layoutes.navbar')
    <!-- profile page -->
    <div class="profile">
        <!-- container -->
        <div class="container">
            <h2 class="display-4" style="margin-top:50px">@if(app()->getLocale() == 'ar')@lang('site.profile') @else Profile @endif</h2>
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <!-- profile div -->
                    <div class="card">
                        <div class="card-header">
                            {{-- Featured --}}
                        </div>
                        <div class="card-body">
                            <img src="{{url('uploads/front/users/' . $user->image)}}" class="img-thumbnail mb-3" style="max-width:150px">
                            <h5 class="card-title">{{$user->firstName . ' ' . $user->lastName}}</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p>{{$user->email}}</p>
                            <a href="#" class="btn btn-primary">Edit profile</a>
                        </div>
                        <!-- edit profile -->
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                        @if(session('msgSuc'))
                            <div class="alert alert-success">{{session('msgSuc')}}</div>
                        @endif
                        <form name="edit-profile" action="{{route('edit-profile',$user->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type = "hidden" name="_method" value="PUT">
                            <!-- row -->
                            <div class = "row">
                                <!-- col -->
                                <div class="col-6">
                                    <!-- form group -->
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstName" class="form-control" value="{{$user->firstName}}">
                                    </div>
                                    <!-- form group -->
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-6">
                                    <!-- form group -->
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lastName" class="form-control" value="{{$user->lastName}}">
                                    </div>
                                    <!-- form group -->
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-6">
                                    <!-- form-group -->
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control image">
                                    </div>
                                    <!-- form-group -->
                                </div>
                                <!-- col -->
                                <!-- col show img -->
                                <div class="col-6">
                                    <img src="{{url('uploads/front/users/' . $user->image)}}" class="img-perview img-thumbnail" style="max-width:85px">
                                </div>
                                <!-- col show img -->
                                <!-- col -->
                                <div class="col-6">
                                    <!-- form-group -->
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input value = "{{$user->email}}" required = "required" type="email" name="email" class="form-control" value="{{old('email')}}">
                                    </div>
                                    <!-- form-group -->
                                </div>
                                <!-- col -->

                                <!-- col -->
                                <div class="col-6">
                                    <!-- form-group -->
                                    <div class="form-group">
                                        <label>PhoneNumber</label>
                                        <input value = "{{$user->phoneNumber}}" required = "required" type="tel" name="phoneNumber" class="form-control" value="{{old('phoneNumber')}}">
                                    </div>
                                    <!-- form-group -->
                                </div>
                                <!-- col -->
                                <!-- col submit -->
                                <div class="col-12">
                                    <input type="submit" value="Update profile"class = "btn btn-info">
                                </div>
                                <!-- col submit -->
                            </div>
                            <!-- row -->
                        </form>
                        {{-- <div class="card-footer text-muted">
                          2 days ago
                        </div> --}}
                      </div>
                    <!-- profile div -->
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- profile page -->
    @include('frontEnd.layoutes.footer')

@endsection
