<?php

namespace App\Http\Controllers\CategoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\slider;
use Illuminate\Support\Str;
use App\Traits\UploadImage;
use Illuminate\Support\Facades\Auth;



class categorycontroller extends Controller
{
    use UploadImage;
    public function AddCategory(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category_name'=>'required',
            'category_description'=>'required',
            'category-image'=>'required',
        ]);

        $imgProduct = null;
        if ($request->hasFile("category-image")) {
            $imgProductFile = $request->file("category-image");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/category-image/', '', $imgProductFile, $new_name_of_profile_photo3);
        }  

        $cat =new category();
        $cat->name = $request->category_name;
        $cat->summary = $request->category_description;
        $cat->status = $request->status;
        $cat->photo = $imgProduct;
        $cat->slug = Str::slug($request->category_name);

        $cat->save();
        return back();
    }

    public function categorydelete(Request $request)
    {
         $category_id = $request->category_id;
        $cat =category::where('id',$category_id)->delete();
        return back();
    }

    public function Addslider(Request $request)
    {
        $request->validate([
            'slider_name'=>'required',
            'slider-image'=>'required',
        ]);

        $imgProduct = null;
        if ($request->hasFile("slider-image")) {
            $imgProductFile = $request->file("slider-image");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/slider-image/', '', $imgProductFile, $new_name_of_profile_photo3);
        }  

        $cat =new slider();
        $cat->slider_name = $request->slider_name;
        $cat->status = 1;
        $cat->category_id = $request->category_id;
        $cat->slider_image = $imgProduct;

        $cat->save();
        return back();
    }

    public function test_logout(){

        Auth::logout();
        return back();
    }


 }