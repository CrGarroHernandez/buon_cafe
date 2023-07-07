<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate();

        return view('content.products', compact('products'));
    }

    public function show($id){
        $product = Product::findOrFail($id);

        return view('content.product', compact('product'));
    }
}