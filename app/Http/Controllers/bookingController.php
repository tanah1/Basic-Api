<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function sayHello($n){

        // if($n == 'tarmeez'){
        //     $isAuth = true;
        // }else{
        //     $isAuth = false;
        // }

        // if($isAuth){
        //     return response()->json(['data' => $n]);
        // }else{
        //     return response()->json(['error' => "Not Autenticated", 401]);
        // }

        return "Welcome, you are Authenticated";
    }

    public function login(){
        return "<h1>Login</h1>";
    }
}
