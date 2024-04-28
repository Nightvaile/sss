<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SSS | @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('backend/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('backend/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    @yield('head_in')


</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    @include('backend.inc.header')

    @include('backend.inc.sidebar')
    <!--**********************************
            Content body start
        ***********************************-->
    @yield('content')
    <!--**********************************
            Content body end
        ***********************************-->
    @include('backend.inc.footer')

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
<script src="{{asset('backend/js/quixnav-init.js')}}"></script>
<script src="{{asset('backend/js/custom.min.js')}}"></script>


<!-- Vectormap -->
<script src="{{asset('backend/vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend/vendor/morris/morris.min.js')}}"></script>


<script src="{{asset('backend/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<script src="{{asset('backend/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

<!--  flot-chart js -->
<script src="{{asset('backend/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/vendor/flot/jquery.flot.resize.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('backend/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<!-- Counter Up -->
<script src="{{asset('backend/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('backend/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


<script src="{{asset('backend/js/dashboard/dashboard-1.js')}}"></script>

@yield('scripts')

</body>

</html>
