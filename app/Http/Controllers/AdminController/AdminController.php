<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\product;
use App\Models\category;
use App\Models\admin;
use App\Models\brand;



class AdminController extends Controller
{
    //
    public function product(){
        return view('Admin.product.index');
    }

    public function category(){
        $data =category::where('status',1)->get();
        return view('Admin.category.index',['data'=>$data]);
    }

    public function payment(){
        return view('Admin.payment.index');
    }

    public function user(){
        return view('Admin.user.index');
    }

    public function invoice(){
        return view('Admin.invoice.invoice');
    }

    public function order(){
        return view('Admin.order.index');
    }

    public function contact_page(){
        return view('Admin.contact-page.index');
    }

    public function admin_account_page(){
        return view('Admin.admin-account-page.index');
    }

    public function banner(){
        return view('Admin.banner.index');
    }

    public function brand(){
        return view('Admin.brand.index');
    }

    public function  product_create(){
        $category = category::where('status',1)->get();
        $brand = brand::where('status',1)->get();

        return view('Admin.product.create',['category'=>$category,'brand'=>$brand]);
    }

    public function  category_create(){
        return view('Admin.category.create');
    }

    public function  brand_create(){
        return view('Admin.brand.create');
    }

    public function contactcreate(){
        return view('Admin.contact-page.create');
    }

public function banner_create(){
    return view ('Admin.banner.create');
}
    
    

    public function order_create(){
        return view('Admin.order.create-order');
    }

    public function payment_create(){
        return view('Admin.payment.create-payment');
    }

    public function user_create(){
        return view('Admin.user.create-user');
    }

    public function admin_create(){
        return view('Admin.admin-account-page.create-admin');
    }

    public function slider_create(){
        return view('Admin.slider.create-slider');
    }

}