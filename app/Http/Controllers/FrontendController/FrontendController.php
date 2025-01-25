<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\product;
use App\Models\category;
use App\Models\slider;
use App\Models\user_ip;
use App\Models\cart;
use App\Models\order;
use App\Models\address_master;
use Illuminate\Support\Facades\Session;




class FrontendController extends Controller
{
    public function home(Request $request)
    {
     $ipaddress = request()->ip();
     $category = product::where('products.status',1)->
     leftjoin('categories', 'products.category_id', '=', 'categories.id')
                ->select(
                    'categories.name',
                    'categories.photo',
                    'categories.slug',
                    'categories.id',
                ) 
                ->groupBy(
                    'categories.name',
                    'categories.photo',
                      'categories.slug',
                      'categories.id',
                  )
                ->get();
                $product2 = product::where('status',1)->where('category_id',2)->limit(4)->orderby('created_at','desc')->get();
                $product1 = product::where('status',1)->where('category_id',3)->limit(4)->orderby('created_at','desc')->get();
                $kidswear = product::where('status',1)->where('category_id',1)->limit(4)->orderby('created_at','desc')->get();

                $product = $product2->merge($product1)->merge($kidswear);

                $men = product::where('status',1)->count();
                $slider = slider::where('status',1)->get();
                user_ip::create([
                    'ip_address'=>$ipaddress,
                ]);

         return view('Frontend.home', ['category'=>$category,'product'=>$product,'men'=>$men,'product1'=>$product1,'kidswear'=>$kidswear,'slider'=>$slider]);
    }

    public function product($slug)
    {
     $category = category::where('slug',$slug)->first();
     if($category){
          $product = product::where('status',1)->where('category_id',$category->id)->orderby('created_at','desc')->get();
     }else{
          $product = product::where('status',1)->orderby('created_at','desc')->get(); 
     }
     return view('Frontend.product',['product'=>$product]);
    }

    public function product_detail($slug,$id)
    {
     $product = product::where('slug',$slug)->where('id',$id)->first();
     $simlar = product::where('status',1)->whereNot('id',$id)->where('category_id',$product->category_id)->limit(4)->orderby('created_at','desc')->get(); 
     if($product){
          return view('Frontend.product-detail',['product'=>$product,'simlar'=>$simlar]);
     }else{
          return back();
     }
    }

    public function cart()
    {
     $data = cart::orderBy('carts.updated_at', 'desc')
     ->leftjoin('products', 'carts.product_id', '=', 'products.id')
     ->where('carts.user_id', Auth::id())
     ->where('carts.buy_one', 2)
     ->select(
         'products.*',
         'carts.*',
     )->get(); 
     // dd($data);
     $dat =  $data; 

     if ($data->count() > 0) {
          return view('Frontend.cart',['data'=>$data,'dat'=>$dat]);
     }else{
          return back();
     }
    }

    public function check_out()
    {
     $cartitem = cart::where('user_id',Auth::id())->count();
     if($cartitem == 0)
     {
          return redirect()->to('/');
     }else{
          $data = cart::orderBy('carts.updated_at', 'desc')
          ->leftjoin('products', 'carts.product_id', '=', 'products.id')
          ->where('carts.user_id', Auth::id())
          ->select(
              'products.product_name',
              'products.id as product_id',
              'carts.*',
          )->get(); 

          $address = address_master::where('user_id',Auth::id())->get();

          return view('Frontend.check-out',['data'=>$data,'address'=>$address]);
          }
    }

    public function about()
    {
         return view('Frontend.about');
    }

    public function contact_us()
    {
         return view('Frontend.contact-us');
    }

    public function searchProduct(Request $request)
    {
     $searchTerms = explode(' ', strtolower($request->search_product)); // Break search string into words
     $product = product::where(function ($query) use ($searchTerms) {
        foreach ($searchTerms as $term) 
     {
        $query->orWhere('product_summary', 'LIKE', '%' . $term . '%')
          ->orWhere('product_name', 'LIKE', '%' . $term . '%');
     }})->get();
     return view('Frontend.search',['product'=>$product]);
    }



    public function Account()
    {
     $data = order::orderBy('orders.updated_at','desc')->
     leftjoin('products','orders.product_id', '=', 'products.id')->
     where('orders.user_id',Auth::id())->
     select('products.*', 'orders.*')->get();
     
     return view('Frontend.account',['data'=>$data]);
    }


    public function BuyNow($id)
    {
     if(Auth::id()){
     $product = product::where('id',$id)->first();
     Session::put('product_id', $id);
     $cart = new cart();
     $cart -> user_id = Auth::id();
     $cart -> product_id = $id;
     $cart -> status = 1;
     $cart -> quantity = 1;
     $cart -> price=$product->discount_price;
     $cart -> amount=$product->discount_price;
     $cart -> order_id = mt_rand(1000000,9999999);
     $cart -> buy_one = 1;
     $cart -> save();

     $data = cart::orderBy('carts.updated_at', 'desc')
     ->leftjoin('products', 'carts.product_id', '=', 'products.id')
     ->where('carts.user_id', Auth::id())
     ->where('carts.buy_one', 1)
     ->select(
         'products.product_name',
         'products.id as product_id',
         'carts.*',
     )->limit(1)->get(); 
      $address = address_master::where('user_id',Auth::id())->get();

     return view('Frontend.check-out',['data'=>$data,'address'=>$address]);
     }else{
          return redirect()->to('login');
     }
    }






//     public function login()
//     {
//          return view('Frontend.user-auth.login');
//     }

// public function signup()
//     {
//        return view('frontend.user-auth.signup');
//     }

public function ordermessage()
{
     return view ('frontend.order-message');
     
}


}