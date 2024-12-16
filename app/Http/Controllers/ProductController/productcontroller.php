<?php

namespace App\Http\Controllers\ProductController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Str;





class productcontroller extends Controller
{
    public function AddProduct(Request $request)
    {

        $request->validate([
            'product_name'=>'required',
            'product_description'=>'required',
            'product_price'=>'required',
  
        ]);
        $pro =new product();
         $pro->product_name =$request->product_name	;
         $pro->summary = $request->product_description;
        $pro->status = $request->status;
        $pro->slug = Str::slug($request->product_name);
 

        $pro->save();
        return back();
  




        
    }
    
}