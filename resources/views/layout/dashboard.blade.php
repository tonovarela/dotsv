<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   
   <title>@yield("titulo")</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="{{ asset('vendor/whirl/dist/whirl.css') }}">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="{{ asset('vendor/weather-icons/css/weather-icons.min.css') }}">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}" id="maincss">
   
   <link rel="stylesheet" href="{{ asset('css/theme-e.css') }}" id="maincss">   
</head>

<body class="show-scrollbar layout-fixed">
    @yield('content')
     <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src=" {{ asset('vendor/modernizr/modernizr.custom.js') }}"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src=" {{ asset('vendor/matchMedia/matchMedia.js') }}"></script>
   <!-- JQUERY-->
   <script src=" {{ asset('vendor/jquery/dist/jquery.js') }}"></script>
   <!-- BOOTSTRAP-->
   <script src=" {{ asset('vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
   <!-- STORAGE API-->
   <script src="{{ asset('vendor/jQuery-Storage-API/jquery.storageapi.js') }}"></script>
   <!-- JQUERY EASING-->
   <script src=" {{ asset('vendor/jquery.easing/js/jquery.easing.js') }}"></script>
   <!-- ANIMO-->
   <script src=" {{ asset('vendor/animo.js/animo.js') }}"></script>
   <!-- SLIMSCROLL-->
   <script src="{{ asset('vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
   <!-- SCREENFULL-->
   <script src="{{ asset ('vendor/screenfull/dist/screenfull.js') }} "></script>
   <!-- LOCALIZE-->
   <script src=" {{ asset ('vendor/jquery-localize-i18n/dist/jquery.localize.js') }} "></script>
   <!-- RTL demo-->
   <script src=" {{ asset ('js/demo/demo-rtl.js') }} "></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src=" {{ asset ('vendor/sparkline/index.js') }}"></script>
   <!-- FLOT CHART-->
   <script src="{{ asset ('vendor/flot/jquery.flot.js') }}"></script>
   <script src="{{ asset ('vendor/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
   <script src="{{ asset ('vendor/flot/jquery.flot.resize.js')}}"></script>
   <script src="{{ asset ('vendor/flot/jquery.flot.pie.js') }}"></script>
   <script src="{{ asset ('vendor/flot/jquery.flot.time.js') }}"></script>
   <script src="{{ asset ('vendor/flot/jquery.flot.categories.js')}}"></script>
   <script src="{{ asset ('vendor/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
   <!-- EASY PIE CHART-->
   <script src="{{ asset('vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>
   <!-- MOMENT JS-->
   <script src=" {{ asset('vendor/moment/min/moment-with-locales.min.js') }}"></script>
   <!-- SKYCONS-->
   <script src="{{ asset('vendor/skycons/skycons.js') }}"></script>
   <!-- DEMO-->
   <script src="{{ asset('js/demo/demo-flot.js') }}"></script>
   <!-- VECTOR MAP-->
   <script src=" {{ asset('vendor/ika.jvectormap/jquery-jvectormap-1.2.2.min.js')      }}"></script>
   <script src=" {{ asset('vendor/ika.jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
   <script src="{{ asset('vendor/ika.jvectormap/jquery-jvectormap-us-mill-en.js') }}"></script>
   <script src="{{ asset('js/demo/demo-vector-map.js') }}"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>