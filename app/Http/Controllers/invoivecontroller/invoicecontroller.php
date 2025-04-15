<?php

namespace App\Http\Controllers\invoivecontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\invoice;
use App\Models\invoice_product;
use Illuminate\Support\Facades\Session;




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
         $pro->invoice_date	 = $request->invoice_date;
        $pro->payment_method = $request->status;
        $invoice_data = $pro->save();

       if ($request->has('product_items') && is_array($request->product_items)) {
        foreach ($request->product_items as $item) {
            $invoiceProduct = new invoice_product();
            $invoiceProduct->invoice_id = $pro->id; // Use the generated invoice_no
            $invoiceProduct->product_name = $item['product_name'];
            $invoiceProduct->product_quantity = $item['product_quantity'] ?? 1;
            $invoiceProduct->product_price = $item['product_price'] ?? 0;
            $invoiceProduct->total_product_price = ($item['product_price'] ?? 0) * ($item['product_quantity'] ?? 1); // Ensure unit price vs. total price is handled correctly
            $invoiceProduct->discount_price = $item['discount_price'] ?? 0;
            $invoiceProduct->product_size = $item['product_size'] ?? null;
            $invoiceProduct->save();
        }
    }
    $request->session()->flash('success', 'Invoice create successfully.');

            return redirect()->to("admin/directinvoice");



        // dd($invoice_data);
        // if($invoice_data){
        //     $id = $pro->invoice_no;
        //     return redirect()->to("admin/direct-invoice/$id");
        //         }        
        // return back();

    }
public function search_invoice(Request $request)
{
    
}



}