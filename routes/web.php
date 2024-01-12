<?php

use Illuminate\Support\Facades\Route;
//array data
Route::get('/', function () {
    $name =[
        1 => ['name' => 'sam' , 'phone' => '56556438' , 'city' => 'KL'],
        2 => ['name' => 'ariff' , 'phone' => '3546745464' , 'city' => 'pinang'],
        3 => ['name' => 'alex' , 'phone' => '4526641266' , 'city' => 'melaka'],
        4 => ['name' => 'amir' , 'phone' => '4565455546' , 'city' => 'kelantan'],
    ];
    return view('welcome',[ 
        'user' => $name,
        'city' => '',
    ]);
});