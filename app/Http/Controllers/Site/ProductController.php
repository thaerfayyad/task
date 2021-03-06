<?php

namespace App\Http\Controllers\Site;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
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
        return view('site.products.index', compact('products'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::all();
        return view('site.products.productDetails', compact('product', 'products'));
    }
    public function generateDocx($id)
    {
        $product = Product::find($id);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $text = $section->addText('tha');
        $text = $section->addText('description');
        $phpWord->save(storage_path('uploads/word/'.$product->name.'.docx'));
        return response()->download(storage_path('uploads/word/'.$product->name.'.docx'));

    //     $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    //     $objWriter->save(storage_path('uploads/word/'.$product->name.'.docx'));

    //    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    //    // return response()->download(storage_path('uploads/word/'.$product->name.'.docx'));

    //    $objWriter->save(storage_path('uploads/word/'.$product->name.'.docx'));
    //     try {

    //     } catch (Exception $e) {
    //     }


    //     $section->addImage("https://www.itsolutionstuff.com/frontTheme/images/logo.png");
    //     $section->addText($description);
    }
//////////////////////////////////////
    public function send($id)
    {
        $product = Product::find($id);
        $data = [
            'name' => $product->name,
            'description' => $product->description,
            'sale_price' => $product->sale_price,
            'image' => $product->image,
            'created_at' => $product->created_at,

        ];
        $pdf = PDF::loadView('site.products.pdf', $data);
        $pdf->save(public_path('uploads/pdf/').$product->name.'.pdf');
        Mail::to('example@email.com')->send(new SendMail($product));
        return $pdf->stream($product->id.'.pdf');


    }
    public function excel(Request $request)
    {

        return (new ProductsExport)->move('product'.date('y-m-d').'xlsx','uploads/excel/');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function shoppingCart()
    {
//        session()->flush();

        $carts = session()->get('cart');
//        dd($carts);
        return view('site.products.cart', compact('carts'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "description" =>$product->description,
                    "price" => $product->sale_price,
                    "image" => $product->image
                ]
            ];

            session()->put('cart', $cart);
            session()->save();

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
            session()->save();
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "description" =>$product->description,
            "price" => $product->sale_price,
            "image" => $product->image
        ];

        session()->put('cart', $cart);
        session()->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function deleteCart($id)
    {

        $product = Product::find($id);
        $id = $product['id'];

        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        session()->save();
        return redirect()->back()->with('success', 'Product deleted from cart successfully!');
    }
}
