<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <link href="{{ asset('public/layouts/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/layouts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/layouts/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/layouts/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/layouts/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/layouts/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/layouts/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('public/layouts/images') }}/ico/favicon.ico">
</head><!--/head-->

<body>
    <!--/header-->
    @include("uses.layouts.elements.top")
    <!--/slider-->
    @include("uses.layouts.elements.sidebar")
    @include("uses.layouts.elements.slide")
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                 @include("uses.layouts.elements.menubar")
                </div>
                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include("uses.layouts.elements.footer")
    <!--/Footer-->
    <script src="{{ asset('public/layouts/js/jquery.js') }}"></script>
    <script src="{{ asset('public/public/public/public/public/layouts/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/public/public/public/layouts/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/public/public/layouts/js/price-range.js') }}"></script>
    <script src="{{ asset('public/public/layouts/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/layouts/js/main.js') }}"></script>
</body>
</html>