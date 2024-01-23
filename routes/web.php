<?php

use Illuminate\Support\Facades\Route;

//imports the UserController class from the App\Http\Controllers 
use App\Http\Controllers\CarsController;

Route::resource('/cars', CarsController::class);

