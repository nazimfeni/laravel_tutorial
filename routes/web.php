<?php

use Illuminate\Support\Facades\Route;

//imports the UserController class from the App\Http\Controllers 
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get is a method provided by Laravel's routing system to define a route for handling HTTP GET requests.
Route::get('/datapass/{id}', function ($id) {

    return view('datapass',['id'=>$id]);
});

Route::view('/', '/home');
Route::view('/contact', '/contact');
Route::view('/about', '/about');

Route::get('user',[UserController::class,'show']);
