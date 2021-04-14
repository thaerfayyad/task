@extends('layouts.site')


@section('content')
    <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
            <li class="nav-item active"><a class="nav-link" href="#">Home</a></li><
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="dropdown megamenu-fw">
                <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Our Service</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->

    <div class="products-box">
        @if(session()->has('success'))
            <div class="alert alert-success"> {{ session()->get('success') }}</div>
        @endif
            <div class="row special-list">
                @isset($products)
                    @foreach( $products as  $product)
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale"></p>
                                </div>
                                <img src="{{ $product->image_path }}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{route('web.products.show',$product->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                       </ul>
                                    <a class="cart" href="{{route('web.add.cart',$product->id)}}">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>{{ $product->name}}</h4>
                                <h5> {{ $product->sale_price }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>



@stop
