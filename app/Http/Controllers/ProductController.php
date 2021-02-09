<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($cat, $product_id)
    {
        $item = Product::where('id', $product_id)->first();

        return view('showProduct', [
            'item' => $item
        ]);
    }
}
