<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return "I am about";
});

Route::get('/contact',function(){
    return "I am contact";
});

Route::get('/user/{name}',function($name){
    return "I'm user".$name;
});

Route::get('/users/{name?}',function($name=null){
return $name;
});
