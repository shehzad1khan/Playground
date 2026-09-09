<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('about', function(){
//     return view('about');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'register'])->name('register');


// video number 8, completed;