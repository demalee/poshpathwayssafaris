<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trizen - Travel Booking HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('admin//css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/line-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/animated-headline.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/flag-icon.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" />
  </head>
  <body class="section-bg">
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
      <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
          <circle
            class="path"
            cx="25"
            cy="25"
            r="20"
            fill="none"
            stroke-width="5"
          ></circle>
        </svg>
      </div>
    </div>

    @include('layouts/admin/usercanvas')
    @include('layouts/admin/header')
     @yield('content')


      <!-- start scroll top -->
    <div id="back-to-top">
      <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- Template JS Files -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/select2.min.js')}}"></script>
    <script src="{{asset('admin/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/js/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('admin/js/animated-headline.js')}}"></script>
    <script src="{{asset('admin/js/jquery.sparkline.js')}}"></script>
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/chart.js')}}"></script>
    <script src="{{asset('admin/js/chart.extension.js')}}"></script>
    <script src="{{asset('admin/js/bar-chart.js')}}"></script>
    <script src="{{asset('admin/js/line-chart.js')}}"></script>
    <script src="{{asset('admin/js/jquery.ripples-min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
  </body>
</html>