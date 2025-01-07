<?php

namespace App\Http\Controllers\ordercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\address_master;

class ordercontroller extends Controller
{
    public function ordernow(Request $request){

        $address = new address_master();
        $address->name = $request->name;
        $address->address = $request->address;
        $address->address2 = $request->nearest_location;
        $address->pincode = $request->pincode;
        $address->status = 1;
        $address->mobile = $request->mobile;
        $address->user_id = Auth::user()->id;
        $address->save();

        $cart = cart::where('user_id',Auth::id())->get();
        if($cart->isEmpty()){
            return back();
        }

        




    }
}
