<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mixtheme.com/mixtheme/marble/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 10:25:56 GMT -->
<head>
    <title>Marble admin</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
    <!-- BEGIN PAGE LEVEL STYLES -->
    @yield('styles')
    <link href="{{asset('assets/plugins/morris-chart/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/metis-menu/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/nanoscroller.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />


</head>

<body class="fixed-top">
<!--Start Page loader -->
<div id="pageloader">
    <div class="loader">
        <img src="{{asset('assets/images/progress.gif')}}" alt='loader' />
    </div>
</div>
<!--End Page loader -->

<div id="wrapper">

    <!--Start page-header-->
      @include('includes.admin_header')
    <!--End page-header-->

    <div class="clearfix"> </div>

    <!--Start Mian page container-->

    <div class="main-container">

        <!--Start sidebar main -->
        @include('includes.admin_sidebar')
        <!-- End Sidebar Main-->

        <!--Start wrapperr-->
        <div class="wrapper">


            @yield('content')
            <!--End content-main-->








            <!--Start  Footer -->
            <footer class="footer-main"> {{date('Y')}} &copy; Aspirations admin Template.	</footer>
            <!--End footer -->

        </div>  <!--/.wrapper-->
    </div> <!--/.page-container-->
</div>

<!--End wrapper-->

<!--JQUERY SCRIPTS-->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/metis-menu/metisMenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('scripts')
<script type="text/javascript" src="{{asset('assets/plugins/morris-chart/raphael-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/morris-chart/morris.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/chart-js/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/dashboard1.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

</body>


<!-- Mirrored from mixtheme.com/mixtheme/marble/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 10:25:56 GMT -->
</html>