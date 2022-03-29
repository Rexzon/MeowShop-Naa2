<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;


class ControllerProduct extends Controller
{
    function index(){
        $product = Product::all();
        return view('BackendProduct',compact('product'));
        
    }

    function create(Request $request){
        $new_product = new product;
        $new_product->Pname = $request->Pname;
        $new_product->Price = $request->Price;
        $new_product->description = $request->description;
        if($request->hasfile('Pimage')){
        $file = $request->file('Pimage');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/products/',$filename);
        $new_product->Pimage = $filename;
        }
        $new_product->Ptype = $request->Ptype;
        $new_product->save();
        $product = Product::all();
        return view('Backendproduct',compact('product'));
    }

    function del(){
        $product = Product::all();
        return view('productdel',compact('product'));
    }

    function deletes($id){
        Product::find($id)->Delete();
        $product = Product::all();
        return view('Backendproduct',compact('product'));
    }

    function edit($id){
        $productedit = Product::find($id);
        return view('productedit',compact('productedit'));

    }

    function update(Request $request, $id){
        $new_product = Product::find($id);
        $new_product->Pname = $request->Pname;
        $new_product->Price = $request->Price;
        $new_product->description = $request->description;
        if($request->hasfile('Pimage')){

        $destination ='uploads/products/'.$new_product->Pimage;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file = $request->file('Pimage');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/products/',$filename);
        $new_product->Pimage = $filename;
        }
        $new_product->Ptype = $request->Ptype;

        $new_product->update();
        
        $product = Product::all();

        return view('Backendproduct',compact('product')); 
    }
}
