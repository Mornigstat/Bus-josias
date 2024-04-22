<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <link rel="icon" href="assets/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
</head>

  <!-- Body -->
  <body>
    <div id="wrapper">
    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>
    <a href="#" id="back-to-top"></a>
    @include('layouts.footer')
    </div>

        <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/designesia.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=insert_your_api_key_here&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>
</body>
</html>
