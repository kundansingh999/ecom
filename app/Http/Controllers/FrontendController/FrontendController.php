<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\slider;
use App\Models\user_ip;



class FrontendController extends Controller
{
    public function home(Request $request)
    {
     $ipaddress = request()->ip();
     $category = product::where('products.status',1)->
     leftjoin('categories', 'products.category_id', '=', 'categories.id')
                ->select(
                    'categories.name',
                    'categories.slug',
                    'categories.id',
                ) 
                ->groupBy(
                    'categories.name',
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
     $product = product::where('status',1)->where('category_id',$category->id)->orderby('created_at','desc')->get();
     return view('Frontend.product',['product'=>$product]);
    }

    public function product_detail($slug)
    {
     $product = product::where('slug',$slug)->first();
     if($product){
          return view('Frontend.product-detail',['product'=>$product]);
     }else{
          return back();
     }
    }

    public function cart()
    {
         return view('Frontend.cart');
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