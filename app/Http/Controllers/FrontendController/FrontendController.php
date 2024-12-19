<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;



class FrontendController extends Controller
{
    public function home()
    {
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
                $product = product::where('status',1)->limit(4)->orderby('created_at','desc')->get();
                $men = product::where('status',1)->count();
         return view('Frontend.home', ['category'=>$category,'product'=>$product,'men'=>$men]);

    }

    public function product()
    {
         return view('Frontend.product');
    }

    public function product_detail($slug)
    {
     $product = product::where('slug',$slug)->first();
         return view('Frontend.product-detail',['product'=>$product]);
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