@extends('frontEnd.layoutes.mastar')
@section('title','My Company')
@section('content')
    <!-- div -->
    <!-- nav -->
    @include('frontEnd.layoutes.nav')
    <!-- nav -->
    <div class="div">
        <!-- overlay -->
        <div class="overlay">
            <!-- container -->
            <div class="container">
                <!-- info company -->
                <div class="info-company">
                    <h2>Full Stack Company</h2>
                    <p>Website Development Team With Good Skils</p>
                </div>
                <!-- info company -->
            </div>
            <!-- container -->
        </div>
        <!-- overlay -->
    </div>
    <!-- div -->
    <!-- include about us page -->
    @include('frontEnd.pages.about-us')
    <!-- include about us page -->
    <!-- include services page -->
    @include('frontEnd.pages.services')
    <!-- include services page -->
    <!-- include our works -->
    @include('frontEnd.pages.our-work')
    <!-- include our works -->
    <!-- include contact us  page -->
    @include('frontEnd.pages.contact-us')
    <!-- include contact us  page -->
    @include('frontEnd.layoutes.footer')
    <!-- include footer section -->


@endsection
