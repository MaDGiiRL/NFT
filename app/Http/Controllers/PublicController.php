<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function characters()
    {

        $products = Product::all();
        // dd($products);

        return view('characters', compact('products'));
    }
}
