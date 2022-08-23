<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>
    <link href="{{ asset('tampilanadmin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilanadmin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilanadmin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilanadmin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilanadmin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilanadmin/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('tampilanadmin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilanadmin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin_dasboard.partials.header')
        @yield('contents')

        @include('admin_dasboard.partials.footer')
      </div>
    </div>

    <script src="{{ asset('tampilanadmin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/skycons/skycons.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/DateJS/build/date.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('tampilanadmin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('tampilanadmin/build/js/custom.min.js') }}"></script>
    <script></script>
  </body>
</html>
