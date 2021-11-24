<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function controllerMethod(){
        return view('welcome');
//        return response()->json([
//           'msg'=>'Hello From Controller'
//        ]);
    }
    public function any(){
        return view('welcome');

//        return response()->json([
//           'msg'=>'Nothing Found'
//        ]);
    }
}
