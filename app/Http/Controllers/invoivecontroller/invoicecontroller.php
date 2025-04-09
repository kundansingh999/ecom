<?php

namespace App\Http\Controllers\invoivecontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\invoice;
use App\Models\invoice_product;



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
        // $pro->product_quantity = $request->product_quantity;
        // $pro->discount_price = $request->discount_price;
        // $pro->product_name= $request->product_name;
        // $pro->product_price= $request->product_price;
        $pro->invoice_date	 = $request->invoice_date;
        $pro->payment_method = $request->status;
        // $pro->product_size =$request->product_size;
       $invoice_data = $pro->save();

       if ($request->has('product_items') && is_array($request->product_items)) {
        foreach ($request->product_items as $item) {
            $invoiceProduct = new invoice_product();
            $invoiceProduct->invoice_id = $pro->id; // Use the generated invoice_no
            $invoiceProduct->product_name = $item['product_name'];
            $invoiceProduct->product_quantity = $item['product_quantity'] ?? 1;
            $invoiceProduct->product_price = $item['product_price'] ?? 0;
            $invoiceProduct->discount_price = $item['discount_price'] ?? 0;
            $invoiceProduct->product_size = $item['product_size'] ?? null;
            $invoiceProduct->save();
        }
    }




        // dd($invoice_data);
        if($invoice_data){
            $id = $pro->invoice_no;
            return redirect()->to("admin/direct-invoice/$id");
                }        
        return back();

    }
}