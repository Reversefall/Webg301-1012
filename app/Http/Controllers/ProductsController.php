<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
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
        $categories = Category::all();

        return view('products.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name'=> 'required|max:100',
        //     'description'=> 'required',
        //     'quantity'=> 'required|integer',
        //     'price'=> 'required',
        // ]);

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            //fillable (2:01:00) display the smaller infomation//
            'category_id' => $request->input('category_id'),
        ]);
        $product->save();
        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();

        // return view('products.edit')->with('product', $product);
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Tìm sản phẩm theo ID
        $product = Product::findOrFail($id);

        // Cập nhật thông tin sản phẩm
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->save();

        // Chuyển hướng về danh sách sản phẩm
        return redirect('/products')->with('success', 'Product updated successfully!');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }

    public function show($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        $product->category = $category;
        return view('products.show')->with('product', $product);
    }
}