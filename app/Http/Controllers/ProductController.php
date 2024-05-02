<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function welcome(){
        return view('products.home');
    }
    function index(){
        $products=Product ::all();
        return view('products.index',['products'=>$products]);
    }
    function create(){
        return view('products.create');
    }
    public function store(Request $request)
    {
        $newProduct = new Product($request->all());

        $newProduct->save();

        return redirect(route('products.index'));
    }
    public function updateview(){
        $products=Product ::all();
        return view('products.updateview',['products'=>$products]);
    }
    public function edit($id){
        $product=Product::find($id);
        return view('products.edit',['product'=>$product]);
    }
    public function update(Product $product,Request $request){
        $product->update($request->all());
        return redirect(route('products.index',))->with('success', 'Product updated successfully');

    }
    public function delete(Product $product){
$product->delete();
return redirect(route('products.index',))->with('success', 'Product deleted successfully');

    }
    //
}
