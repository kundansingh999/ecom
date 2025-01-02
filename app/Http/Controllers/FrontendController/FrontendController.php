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
                $product = product::where('status',1)->where('category_id',2)->limit(4)->orderby('created_at','desc')->get();
                $femalewear = product::where('status',1)->where('category_id',3)->limit(4)->orderby('created_at','desc')->get();
                $kidswear = product::where('status',1)->where('category_id',1)->limit(4)->orderby('created_at','desc')->get();
                $men = product::where('status',1)->count();
                $slider = slider::where('status',1)->get();
                user_ip::create([
                    'ip_address'=>$ipaddress,
                ]);

         return view('Frontend.home', ['category'=>$category,'product'=>$product,'men'=>$men,'femalewear'=>$femalewear,'kidswear'=>$kidswear,'slider'=>$slider]);
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
     if($product){
          return view('Frontend.product-detail',['product'=>$product]);
     }else{
          return back();
     }
    }

    public function cart()
    {
     $data = cart::orderBy('carts.updated_at', 'desc')
     ->leftjoin('products', 'carts.product_id', '=', 'products.id')
     ->where('carts.user_id', Auth::id())
     ->select(
         'products.*',
         'carts.*',
     )->get();   
         return view('Frontend.cart',['data'=>$data]);
    }

    public function check_out()
    {
         return view('Frontend.check-out');
    }

    public function about()
    {
         return view('Frontend.about');
    }

    public function contact_us()
    {
         return view('Frontend.contact-us');
    }







//     public function login()
//     {
//          return view('Frontend.user-auth.login');
//     }

// public function signup()
//     {
//        return view('frontend.user-auth.signup');
//     }


}