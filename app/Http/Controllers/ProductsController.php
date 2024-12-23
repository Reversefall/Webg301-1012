<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all(); // SELECT * FROM Products
        //dd($products);
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name'=> 'required|max:100',
        //     'description'=> 'required',
        //     'quantity'=> 'required|integer',
        //     'price'=> 'required',
        // ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        //fillable (2:01:00) display the smaller infomation//
        $product->save();
        return redirect('/products');
    }

    // public function edit($id)
    // {
    //     $product = Product::find($id);
    //     return view('products.edit');
    // }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }


}