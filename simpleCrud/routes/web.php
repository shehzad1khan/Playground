<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Models\Students;

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
Route::get('list', [RegisterController::class, 'view']);

// Route::get('students', function(){
//     $students = Students::all();
//     echo '<pre>';
//     print_r($students->toArray());
// });

// video number 15, completed (Fetch and insertion);