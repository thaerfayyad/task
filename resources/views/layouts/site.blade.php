<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
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

</head>

<body>


<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option>¥ JPY</option>
                        <option>$ USD</option>
                        <option>€ EUR</option>
                    </select>
                </div>
                <div class="right-phone-box">
                    <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Our location</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
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
