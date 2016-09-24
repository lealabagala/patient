<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href={{ URL::asset('/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('/css/bootstrap-extend.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('/css/site.min.css') }}>

    <!-- Plugins -->
    @yield('plugins')

    <!-- Fonts -->
    <link rel="stylesheet" href={{ URL::asset('/fonts/web-icons/web-icons.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('/fonts/brand-icons/brand-icons.min.css') }}>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!-- Scripts -->
    <script src={{ URL::asset('/vendor/modernizr/modernizr.js') }} ></script>
    <script src={{ URL::asset('/vendor/breakpoints/breakpoints.js') }} ></script>
    <script>
        Breakpoints();
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<!-- Navigation bar -->
@include('layouts.navigationbar')


<!-- Main content -->
<div class="page"> 
    <div class="page-content">
        @yield('content')
    </div>
</div>


<!-- Footer -->
<footer class="site-footer">
    <span class="site-footer-legal">© 2016</span>
    <div class="site-footer-right">TRAIDORS</div>
</footer>


<!-- Core  -->
<script src={{ URL::asset('/vendor/jquery/jquery.js') }}></script>
<script src={{ URL::asset('/vendor/bootstrap/bootstrap.js') }}></script>

<!-- Scripts -->
<script src={{ URL::asset('/js/core.js') }}></script>
<script src={{ URL::asset('/js/site.js') }}></script>
<script src={{ URL::asset('/js/sections/menu.js') }}></script>
<script src={{ URL::asset('/js/sections/menubar.js') }}></script>
<script src={{ URL::asset('/js/sections/sidebar.js') }}></script>

<script>
    (function (document, window, $) {
        'use strict';
        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>

</body>

</html>