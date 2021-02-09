<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{


    public function showCategory($cat_alias)
    {
        $cat = Category::where('alias', $cat_alias)->first();
        $products = Product::where('category_id', $cat->id)->get();

        return view('showCategory', [
            'cat' => $cat,
            'products' => $products,
        ]);
    }
}
