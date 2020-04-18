<!DOCTYPE html>
<html {{ LaravelLocalization::getCurrentLocaleDirection() }}>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        @include('frontEnd.layoutes.link-css')
    </head>
    <body>
        <!-- main content -->
        <div class="main">
            @yield('content')
        </div>
        <!-- main content -->

        <!-- script -->
        <script src="{{url('js/jquery-3.2.1.js')}}"></script>
        <script src="{{url('js/popper.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src ="{{url('js/script.js')}}"></script>
        <!-- script -->
    </body>

</html>
