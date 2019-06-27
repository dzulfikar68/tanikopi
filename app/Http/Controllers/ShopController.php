<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        $products = Product::where('status', 1)->get();

        $data['products'] = $products;

        return view('shop', $data);
    }
}
