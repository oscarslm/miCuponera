<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Your Stylesheets, Scripts & Title
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Cuponera</title>
</head>
<body class="stretched">

    <!-- The Main Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        @include('includes.header')

        <!-- Slider
        ============================================= -->
        @yield('slider')

        <!-- Site Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                @yield('content')

            </div><!--.content-wrap-->

        </section>

        <!-- Footer
        ============================================= -->
        @include('includes.footer')

    </div><!--#wrapper-->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>