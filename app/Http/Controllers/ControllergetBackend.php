<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;


class ControllergetBackend extends Controller
{
    function deletes($id){
        User::find($id)->Delete();
        $user = User::all();
        $count = User::count();
        $product = Product::all();
        $pcount = Product::count();
        return view('Backend',compact('user','count','product','pcount'));
    }

    function edit($id){
        $useredit = User::find($id);
        return view('useredit',compact('useredit'));
    }

    function update(Request $request, $id){
        $update = User::find($id);
        $update->name = $request->input('name');
        $update->email = $request->input('email');
        $update->save();
        $user = User::all();
        $count = User::count();
        $product = Product::all();
        $pcount = Product::count();
        return view('userAdmin',compact('user','count','product','pcount'));
    }
}
