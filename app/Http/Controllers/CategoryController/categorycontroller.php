<?php

namespace App\Http\Controllers\CategoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;



class categorycontroller extends Controller
{
    public function AddCategory(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category_name'=>'required',
            'category_description'=>'required',
 
        ]);
        $cat =new category();
        $cat->name = $request->category_name;
        $cat->summary = $request->category_description;
        $cat->status = $request->status;
        $cat->slug = Str::slug($request->category_name);

        $cat->save();
        return back();
    }

    public function categorydelete(Request $request)
    {
        // dd($request->all());
         $category_id = $request->category_id;
        $cat =category::where('id',$category_id)->delete();
        return back();
    
    }


 }