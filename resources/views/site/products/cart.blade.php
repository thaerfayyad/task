@extends('layouts.site')

@section('content')

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">

                            <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(session()->has('success'))
                                <div class="alert alert-success"> {{ session()->get('success') }}</div>
                            @endif
                            @if(count($carts) > 0)

                                @foreach($carts as $cart)
                            <tr>

                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('uploads/product_images').'/'.$cart['image']}}" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        {{$cart['name']}}
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ {{$cart['price']}}</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                <td class="total-pr">
                                    <p>{{$cart['quantity']}}</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="{{route('web.deleteCart',$cart['id'])}}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>

                            </tr>
                                @endforeach
                            @else
                                <td > <h3 class="text-center well">there are no Cart  yet</h3></td>
                            @endif



                            </tbody>

                        </table>

                    </div>
                </div>
            </div>



            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold"> $ 130 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 40 </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 10 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"> $ 2 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> $ 388 </div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="{{route('web.checkout',$cart['price'])}}" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

@endsection
