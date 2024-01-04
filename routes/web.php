<?php

use Illuminate\Support\Facades\Route;

//imports the UserController class from the App\Http\Controllers 
use App\Http\Controllers\UserController;


//Route::get is a method provided by Laravel's routing system to define a route for handling HTTP GET requests.
Route::get('/datapass/{id}', function ($id) {

    return view('datapass',['id'=>$id]);
});

Route::view('/', '/home');
// Route::view('/contact', '/contact');
// Route::view('/about', '/about');




// Route::get('user',[UserController::class,'display']);

// Route::get('greet',[UserController::class,'greeting']);

Route::get('about',[UserController::class,'aboutme']);


