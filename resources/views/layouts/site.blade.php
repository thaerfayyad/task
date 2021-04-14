<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Ecommerce </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('site/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('site/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('site/css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('style')
</head>

<body>


<!-- Start Main Top -->

<!-- End Main Top -->

<!-- Start Main Top -->
@include('site.include.header')


@yield('content')

<!-- End Products  -->

<!-- Start Blog  -->

<!-- End Blog  -->


<!-- Start Instagram Feed  -->

<!-- End Instagram Feed  -->


<!-- Start Footer  -->
@include('site.include.footer')
<!-- End Footer  -->

@yield('script')

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

{{--<!-- ALL JS FILES -->--}}
<script src="{{asset('site/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
{{--<!-- ALL PLUGINS -->--}}
<script src="{{asset('site/js/jquery.superslides.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap-select.js')}}"></script>
<script src="{{asset('site/js/inewsticker.js')}}"></script>
<script src="{{asset('site/js/bootsnav.js')}}"></script>
<script src="{{asset('site/js/images-loded.min.js')}}"></script>
<script src="{{asset('site/js/isotope.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/baguetteBox.min.js')}}"></script>
<script src="{{asset('site/js/form-validator.min.js')}}"></script>
<script src="{{asset('site/js/contact-form-script.js')}}"></script>
<script src="{{asset('site/js/custom.js')}}"></script>
</body>

</html>
