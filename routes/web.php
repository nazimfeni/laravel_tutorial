<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::get('/', function (){

    return view('welcome');
});


Route::view('login','users');

Route::view('test','test');

//Route::get('users',[UserController::class,'index']);
Route::get('users',[UserController::class,'getData']);