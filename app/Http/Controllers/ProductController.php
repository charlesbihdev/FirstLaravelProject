<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = product::all();
        return view('products', ['products' => $products]);
    }

    public function create()
    {
        return view('createproduct');
    }

    public function store(request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        product::create($data);

        return redirect(route('index'));
    }


    public function edit(product $product)
    {
        // dd($product);
        return view('editproduct', ["product" => $product]);
    }

    public function update(product $product, Request $Request)
    {
        $data = $Request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'

        ]);

        $product->update($data);

        return redirect(route('index'))->with('success', 'product updated successfully');
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect(route('index'))->with('success', 'product deleted successfuly');
    }
}
