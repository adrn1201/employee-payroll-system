<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>EPS</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/YPGLogo.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i') }}" rel="stylesheet">

</head>

<body>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


{{$slot}}

<script src="{{ asset("assets/vendor/jquery/dist/jquery.min.js")}}"></script>
<script src="{{ asset("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{ asset("assets/vendor/js-cookie/js.cookie.js")}}"></script>
<script src="{{ asset("assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js")}}"></script>
<script src="{{ asset("assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js")}}"></script>
<!-- Optional JS -->
<script src="{{ asset("assets/vendor/chart.js/dist/Chart.min.js")}}"></script>
<script src="{{ asset("assets/vendor/chart.js/dist/Chart.extension.js")}}"></script>
<!-- Argon JS -->
<script src="{{ asset("assets/js/argon.js?v=1.2.0")}}"></script>
</body>

</html>
