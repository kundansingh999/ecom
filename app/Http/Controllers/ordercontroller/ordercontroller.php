<?php

namespace App\Http\Controllers\ordercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\cart;
use App\Models\address_master;
use Illuminate\Support\Facades\Auth;

class ordercontroller extends Controller
{
    public function ordernow(Request $request){

        // if($request->address_id){
        //     $cart = cart::where('user_id',Auth::id())->get();
        // }else{
        //     $address = new address_master();
        //     $address->name = $request->name;
        //     $address->address = $request->address;
        //     $address->address2 = $request->nearest_location;
        //     $address->pin_code = $request->pin_code;
        //     $address->status = 1;
        //     $address->mobile = $request->mobile;
        //     $address->user_id = Auth::user()->id;
        //     $address->save();
        // }
        // if($cart->isEmpty()){
        //     return back();
        // }

        $cart = cart::where('user_id',Auth::id())->get();

        // dd($cart);
        foreach($cart as $cartitem){
        
            $order = new order();
            $order -> order_number = mt_rand(1000000,9999999);
            $order -> user_id = Auth::id();
            $order -> total_amount = $cartitem->price;
            $order -> quantity = $cartitem-> quantity;
            $order -> product_id = $cartitem->product_id;
            $order -> first_name = $request->name;
            $order -> address = $request-> address;
            $order -> mobile_no = $request-> mobile;
            $order -> pincode = $request-> pin_code;
            $order->save();
        }
        cart::where('user_id',Auth::id())->delete();
        return back();
    }

    public function changeOrder(Request $request,$id){

        order::where('id',$id)->update([

            "status"=>$request->status,
        ]);
        return ["message"=>"Update Successful"];
    }
}
