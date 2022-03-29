<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\mytraits;

class OrderController extends Controller
{
    use mytraits;

    public function index(){
        $product = product::all();
        $value = 0;
        $user = auth()->user();
        $userid = $this->getOrder($user);
        $order = Order::all();          
        return view('order',compact('user','order','value'));
    }


    function create(Request $request){
        $order = Order::all();
        $user = auth()->user();
        $product = product::all();
        $value = 0;
        $new_order = new order;
        $new_order->Product_name = $request->name;
        $new_order->pro_id = $request->id;
        $new_order->user_id = $request->userid;
        $new_order->Product_price = $request->price;
        $new_order->user_email = $request->email;
        $new_order->save();
        $order = Order::all();
        return view('order',compact('user','order','value'));
    }

    function deletes($id){
        Order::find($id)->Delete();
        $user = auth()->user();
        $order = Order::all();
        $value = 0;
        return view('order',compact('user','order','value'));
    }

    public function purchase(){
        $user = auth()->user();
        $order = Order::all();
        $value = 0;
        foreach($user->orders as $carts) {
        $value = $value + $carts->Product_price ;
        }    
        return view('purchase',compact('user','order','value'));
    }

    public function clearpurchase(Request $request){
        $user = auth()->user();
        $order = Order::all();
        $arrays = [];
        $arraysaddress =  [];
        $arrayspayment =  [];
        $values = 0;
        foreach($user->orders as $carts) {
        $values = $values + $carts->Product_price ;
        }
        


        $new_History = new History;
        $new_History->userid = $request->userid;
        $new_History->username = $request->username;
        foreach($user->orders as $carts) {
            $value = $carts->Product_name ;
            array_push($arrays,$value);
            $encode = implode(",",$arrays);
        }

        $va = $request->city;
        $town = $request->town;
            
        array_push($arraysaddress,$va,$town,$request->Zip);
       
        $encodea = implode(",",$arraysaddress);

        array_push($arrayspayment,$request->payment,$request->nc,$request->cn,$request->expire,$request->cvv);
        $encodeb = implode(",",$arrayspayment);

        $new_History->item = $encode;
        $new_History->email = $request->email;
        $new_History->address = $encodea;
        $new_History->paymentmethod = $encodeb;
        $new_History->totalprice = $values;
        $new_History->save();
        $product = Product::all();
        foreach($user->orders as $p){   
        Order::find($p->id)->Delete();  
        }
      
    return redirect('dashboard')->with('success','purchase compleate');
    // ('dashboard',compact('product','user'));
    }



}
