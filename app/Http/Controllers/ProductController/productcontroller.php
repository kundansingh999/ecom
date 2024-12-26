<?php

namespace App\Http\Controllers\ProductController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Illuminate\Support\Str;
use App\Traits\UploadImage;
use Illuminate\Support\Facades\Session;



class productcontroller extends Controller
{
    use UploadImage;
    public function AddProduct(Request $request)
    {
         $request->validate([
            'product_name'=>'required',
            'product_description'=>'required',
            'product_price'=>'required',
            'discount_price'=>'required',
            'brand'=>'required',
        ]);

        $imgProduct = null;
        if ($request->hasFile("product-image")) {
            $imgProductFile = $request->file("product-image");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/product-image/', '', $imgProductFile, $new_name_of_profile_photo3);
        }  


        $pro =new product();
         $pro->product_name =$request->product_name	;
         $pro->product_summary = $request->product_description;
         $pro->category_id = $request->category_id;
         $pro->	discount_price = $request->	discount_price;
         $pro->product_price = $request->product_price;
         $pro->brand = $request->brand;
         $pro->stock = $request->product_quantity;
         $pro->size = json_encode($request->product_size);
        $pro->status = $request->status;
        $pro->slug = Str::slug($request->product_name);
        $pro->image =  $imgProduct;
        $pro->save();
        return back();
    }

    public function Addcart($product_id,$user_id){
        $check_product = cart::where('product_id',$product_id)->where('user_id',$user_id)->first();
        if (!$check_product){

        $cart = new cart();
        $cart -> user_id = $user_id;
        $cart -> product_id = $product_id;
        $cart -> status = 1;
        $cart -> quantity = 1;
        $cart -> order_id = mt_rand(1000000,9999999);
        $cart -> save();
        }else{
            cart::where('product_id',$product_id)->where('user_id',$user_id)->update([
                // 'quantiy' = + +;
            ]);
        }
        return ["message"=>"Add to cart successful"];
    }
    
}