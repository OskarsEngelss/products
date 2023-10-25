<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view() {
        $products = Product::all();
        //\Log::info($products);
        return view("products", ["products" => $products]);
    }
}
