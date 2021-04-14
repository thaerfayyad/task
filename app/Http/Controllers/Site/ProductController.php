<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('site.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::all();
        return view('site.products.productDetails',compact('product','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function addCart(Product $product)
    {
        if(session()->has('cart')){
            $cart  = new Cart(session()->get('cart'));

        } else {
            $cart = new Cart();
        }
        $cart->add($product);
//        dd($cart);
        session()->put('cart');
        return redirect()->route('web.products.index')->with('success' , 'Product was added successfully');
    }

    public function shoppingCart()
    {
        if(session()->has('cart')) {
            $cart  = new Cart(session()->get('cart'));
        }else {
            $cart  = null;
        }
        dd($cart);
        return view('site.products.cart',compact('cart'));
    }

    public function send($id)
    {

        $product = Product::find($id);
        $data = [
            'name' => $product->name,
            'description' => $product->description,
            'created_at' => $product->created_at,
            'image' => $product->image,
            'sale_price' => $product->sale_price,

        ];
        $pdf = PDF::loadView('site.products.pdf', $data);
        $pdf ->save(public_path('uploads/pdf/').$product->id.'.pdf');
        Mail::to($product->name)->send(new SendMail($product));

        return $pdf->stream('document.pdf' );
    }

}
