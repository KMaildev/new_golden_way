<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="New Golden Way Agency">
    <meta name="keywords" content="New Golden Way Agency" />
    <meta property="og:title" content="New Golden Way Agency" />
    <meta property="og:image" content="{{ asset('data/logo.png') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="New Golden Way Agency" />
    <link rel="icon" href="{{ asset('data/logo.png') }}" type="image/gif" sizes="20x20">

    <!-- Title -->
    <title>New Golden Way Agency</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- inject css start -->
    <!--== bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!--== animate -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!--== fontawesome -->
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />
    <!--== themify -->
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" type="text/css" />
    <!--== magnific-popup -->
    <link href="{{ asset('assets/css/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <!--== owl-carousel -->
    <link href="{{ asset('assets/css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="{{ asset('assets/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{ asset('assets/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- inject css end -->

</head>

<style>
    .help-block {
        color: red;
    }
</style>

<body>


    <div class="page-wrapper">
        @include('layouts.menu')

        @if (URL::current() == route('welcome'))
            @include('layouts.slider')
        @endif
        @yield('content')

        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <!--== magnific-popup -->
    <script src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!--== owl-carousel -->
    <script src="{{ asset('assets/js/owl-carousel/owl.carousel.min.js') }}"></script>

    <!--== counter -->
    <script src="{{ asset('assets/js/counter/counter.js') }}"></script>

    <!--== countdown -->
    <script src="{{ asset('assets/js/countdown/jquery.countdown.min.js') }}"></script>

    <!--== isotope -->
    <script src="{{ asset('assets/js/isotope/isotope.pkgd.min.js') }}"></script>

    <!--== mouse-parallax -->
    <script src="{{ asset('assets/js/mouse-parallax/tweenmax.min.js') }}"></script>
    <script src="{{ asset('assets/js/mouse-parallax/jquery-parallax.js') }}"></script>

    <!--== wow -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!--== theme-script -->
    <script src="{{ asset('assets/js/theme-script.js') }}"></script>

    <!-- inject js end -->
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    @yield('script')
</body>

</html>
