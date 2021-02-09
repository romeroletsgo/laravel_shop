<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }
}
