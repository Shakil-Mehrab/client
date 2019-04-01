<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang=""> <!--<![endif]-->

<!-- Template for amclcanada.com/aboutus.html by akr4m, Sat, 30 Mar 2019 14:27:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BootStrap HTML5 CSS3 Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('images/icon/logo.png')}}">
    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/transitions.css')}}">
    <script src="{{asset('client/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->
    <div class="preloader">
        <div id="status"></div>
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    <!--************************************
            Preloader END
    *************************************-->
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="wrapper">
        <!--************************************
                Banner Start
        *************************************-->
            @yield('banner')
        <!--************************************
                Banner End
        *************************************-->
        <!--************************************
                Header Start
        *************************************-->
            @include('layout.includes.nav')
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        @yield('content')
        <!--************************************
                Main End
        *************************************-->
        <!--************************************
                Footer Start
        *************************************-->
        @include('layout.includes.footer')
        <!--************************************
                Wrapper End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    <!--************************************
            Popup Start
    *************************************-->
    @include('layout.includes.footer-lower')
    <!--************************************
            Popup End
    *************************************-->
    <script src="{{asset('client/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('client/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/js/jquery.bxslider.js')}}"></script>
    <script src="{{asset('client/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('client/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('client/js/jquery.appear.js')}}"></script>
    <script src="{{asset('client/js/parallax.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDlh_AGFXk44DuUVd6BDFas5XgqevprVms&amp;language=en"></script>
    <script src="{{asset('client/js/gmap3.js')}}"></script>
    <script src="{{asset('client/js/classie.js')}}"></script>
    <script src="{{asset('client/js/gnmenu.js')}}"></script>
    <script src="{{asset('client/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('client/js/owl.carousel.js')}}"></script>
    <script src="{{asset('client/js/main.js')}}"></script>
</body>

<!-- Template for amclcanada.com/aboutus.html by akr4m, Sat, 30 Mar 2019 14:27:53 GMT -->
</html>