<?php

namespace App\Http\Controllers\invoivecontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\invoice;


class invoicecontroller extends Controller
{
    //
    public function  createinvoice (Request $request)
    {
// dd($request->all());
$pro =new invoice();
$invoice = "INV" . date('his') . rand(000, 999);
$pro-> invoice_no =$invoice;
$pro->customer_name =$request->customer_name	;
$pro->customer_mobile = $request->customer_mobile;
$pro->product_quantity = $request->product_quantity;
$pro->discount_price = $request->discount_price;
$pro->product_name= $request->product_name;
$pro->product_price= $request->product_price;
$pro->invoice_date	 = $request->invoice_date;
$pro->payment_method = $request->status;
$pro->product_size = json_encode($request->product_size);
 $pro->save();
return back();

    }
}
