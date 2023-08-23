<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function create()
    {
        return view('product');
    }
    


public function listProducts()
{
    $products = Product::all();
    return view('products.read', compact('products'));
}


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:30',
            'price' => 'required',
            'stock' => '',
            'type' => 'required'
        ]);

        if ($data['price'] < 0) {
            # code...
            return redirect()->back()->withErrors(['price' => 'Price cannot be negative']);
        }
        Product::create($data);

        return redirecct()->route('products.list')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|max:30',
            'price' => 'required',
            'stock' => '',
            'type' => 'required'
        ]);

        $product->update($data);

        return redirect()->route('products.list')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.list')->with('success', 'Product deleted successfully!');
    }
}

