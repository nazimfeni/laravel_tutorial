<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getData(Request $req){
        return $req->input(); 
        // if you want to return single data  
       // return $req->input('username');  
    }
}
