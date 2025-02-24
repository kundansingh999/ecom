<?php

namespace App\Http\Controllers\apicontroller;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apicontoller extends Controller
{
    //
    public function fetchuser()
    {
        // print_r('helo');

        $user = User::all();
        return response()->json(['users' => $users], 200);   
     }
}