<!-- error page -->
@if($errors->any())
    <div class="container">
    <!-- row -->
    <div class="row">
    @foreach($errors->all() as $error)
        <!-- col -->
        <div class="col-6">
            <div class="alert alert-danger">{{$error}}</div>
        </div>
        <!-- col -->
    @endforeach
    </div>
    <!-- row -->
    </div>
@endif
<!-- error page -->
