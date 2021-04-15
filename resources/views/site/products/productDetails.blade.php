@extends('layouts.site')


@section('content')

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{ $product->image_path }}" alt="First slide"> </div>

                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{ $product->name }}</h2>
                        <h5> <del>$ 60.00</del> {{ $product->sale_price }}</h5>
                        <p class="available-stock"><span> More than 20 available / <a href="#">{{ $product->stock }}</a></span>
                        <p>
                        <h4>Short Description:</h4>
                        <p>
                            {!! $product->description !!}
                        </p>
                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">
                                <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy Now</a>
                                <a class="btn hvr-hover" target="_blank" data-fancybox-close="" href="{{route('web.send.pdf',$product->id)}}}">send pdf</a>
                                <a class="btn hvr-hover"  data-fancybox-close="" href="{{route('web.send.excel',$product->id)}}}">send excel</a>
                               <a class="btn hvr-hover"  data-fancybox-close="" href="{{route('web.generateDocx',$product->id)}}}">send word</a>




                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Cart -->




@stop
