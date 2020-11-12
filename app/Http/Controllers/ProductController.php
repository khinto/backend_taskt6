<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use  Auth;
class ProductController extends Controller
{
     public function index() {
        return view("auth.products.index", ["product"=>Product::get()]);
        return Product::get();
    }
    public function create() {
        return view("auth.products.create");
    }
    public function edit($id){
        $product = Product::where("id",$id)->firstOrFail();
        return view("auth.products.edit",["product"=>$product]);
        


    }
    
    public function store(Request $request) {
        Product::create([
            "title"=>$request->input("title"),
            "user_id"=>Auth::user()->id,
            "description"=>$request->input("short_desc"),
        ]);
        return redirect()->route("adminindex");
    }

    public function update(Request $request) {
        Product::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "description"=>$request->input("short_desc")
        ]);
    }
}
