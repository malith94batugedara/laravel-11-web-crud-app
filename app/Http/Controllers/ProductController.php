<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
         $data = $request->validated();

         $product = new Product;

         $product->product_name = $data['pro_name'];

         $product->product_price = $data['pro_price'];

         $product->product_id = $data['pro_id'];

         $product->save();

         return redirect(route('product.index'))->with('status','Product Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product,$product_id)
    {
        $productt = $product::find($product_id);
        return view('products.edit',compact('productt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product,$product_id)
    {
         $data = $request->validated();

         $producttt = $product::find($product_id);

         $producttt->product_name = $data['pro_name'];

         $producttt->product_price = $data['pro_price'];

         $producttt->product_id = $data['pro_id'];

         $producttt->update();

         return redirect(route('product.index'))->with('status','Product Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,Request $request)
    {
        $productt=$product::findOrFail($request->product_delete_id);

        $productt->delete();

        return redirect(route('product.index'))->with('status','Product Deleted Successfully');
       
    }
}
