<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product  = Product::all();
        $user     = User::all();
        return view('dashboard.index',compact('category','product','user'));
    }
}
