<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(){
        return "Hello Test" ;
    }

    function userName($name){
        return view('users', ['urlName'=>$name]) ;
    }

    // function show($id){
    //     return $id ;
    // }
}
