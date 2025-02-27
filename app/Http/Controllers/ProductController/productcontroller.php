<?php

namespace App\Http\Controllers\ProductController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\product_feedback;
use Illuminate\Support\Str;
use App\Traits\UploadImage;
use Illuminate\Support\Facades\Auth;
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

        $product = product::where('id',$product_id)->first();

        if (!$check_product){
        $cart = new cart();
        $cart -> user_id = $user_id;
        $cart -> product_id = $product_id;
        $cart -> status = 1;
        $cart -> quantity = 1;
        $cart -> buy_one = 2;
        $cart -> price=$product->discount_price;
        $cart -> amount=$product->discount_price;
        $cart -> order_id = mt_rand(1000000,9999999);
        $cart -> save();
        }else{
            cart::where('product_id', $product_id)->where('user_id', $user_id)->increment('quantity');

            cart::where('product_id', $product_id)->where('user_id', $user_id)->update([
                'price' => $product->discount_price * ($check_product->quantity + 1) 
            ]);
        }
        $count = cart::where('user_id',$user_id)->where('buy_one',2)->count();
        return ["message"=>"Add to cart successful","count"=>$count];
    }

    public function IncrementProduct($id, Request $request)
    {
        $check_product = cart::where('id',$id)->first();

        cart::where('id', $id)->increment('quantity');

        cart::where('id', $id)->update([
            'price' => $check_product->amount * ($check_product->quantity + 1) 
        ]);
        $request->session()->flash('success', 'Increment successfully.');
        return back();
    }

    public function decrementProduct($id, Request $request)
    {
        $check_product = cart::where('id',$id)->first();
        if($check_product->quantity == 1)
        {
            return back();
        }else{
            cart::where('id', $id)->decrement('quantity');
            cart::where('id', $id)->update([
                'price' => $check_product->amount * ($check_product->quantity - 1) 
            ]);
            $request->session()->flash('success', 'Decrement successfully.');
        }
      
        return back();
    }


    public function EditProduct(Request $request){

        // $request->validate([
        //     'product_name'=>'required',
        //     'product_description'=>'required',
        //     'product_price'=>'required',
        //     'discount_price'=>'required',
        //     'brand'=>'required',
        // ]);

        $id = $request->id;
                $imgProduct = null;
        if ($request->hasFile("product-image")) {
            $imgProductFile = $request->file("product-image");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/product-image/', '', $imgProductFile, $new_name_of_profile_photo3);
        }  

        product::where('id',$id)->update([
            'product_name'=>$request->product_name,
            'product_summary'=>$request->product_description,
            'category_id'=>$request->category_id,
            'discount_price'=>$request->discount_price,
            'product_price'=>$request->product_price,
            'brand'=>$request->brand,
            'stock'=>$request->product_quantity,
            'image' =>  $imgProduct,
            'size'=> json_encode($request->product_size),

            'status'=>$request->status,
        ]);
        $request->session()->flash('success', 'product update successfully.');

        return redirect()->to('admin/product');
    }
    
    public function removeproduct($id,Request $request){
        cart::where('id',$id)->delete();
        $request->session()->flash('success', 'Remove successfully.');
        return back();
    }

    public function userfeedback(Request $request)
    {
        $imgProduct = null;
        if ($request->hasFile("feedback-image")) {
            $imgProductFile = $request->file("feedback-image");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/feedback-image/', '', $imgProductFile, $new_name_of_profile_photo3);
        }  
    
    $feedback= new product_feedback();
    $feedback ->product_id= $request->product_id;
    $feedback ->user_id=Auth::id();
    $feedback ->feedback =$request->feedback;
    $feedback ->image=$imgProduct;
    $feedback->save();
    $request->session()->flash('success', 'thank you for feedback');
    
    return back();
    
    
    
    }
    


}