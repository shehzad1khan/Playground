<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function(){
    echo"Hello World";
});

Route::get('demo/{name?}/{id?}', function($name='Aladeen', $id='not define'){
    $data = compact('name', 'id');
    return view('demo')->with($data);
});

// video number 6, duration = 10:00;