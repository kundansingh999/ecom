<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        // echo "hello";
        return view('Frontend.home');
    }

    public function product()
    {
         return view('Frontend.product');
    }

    public function product_detail()
    {
         return view('Frontend.product-detail');
    }



}
