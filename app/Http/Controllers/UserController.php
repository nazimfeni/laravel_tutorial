<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function display(){
        return "Hello world";

}

public function greeting(){
    return "Goodnight";

}


public function aboutme(){

   
    $x = [1,2,3];
        
  
    return view('about', ['data' => $x]);

}



}
