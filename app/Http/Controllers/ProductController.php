<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $name = $request->input('name');
        $description = $request->input('description');
        $remaining_time = $request->input('remaining_time');
        $highest_bid = $request->input('highest_bid');

        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->remaining_time = $remaining_time;
        $product->highest_bid = $highest_bid;

        $product->save();

        return redirect()->route('characters');

    }
}
