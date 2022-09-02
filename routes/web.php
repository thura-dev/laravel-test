<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome',["name"=>"Thura","age"=>23]);
})->name('home');

Route::get('/about',function(){
    return view('about',["test"=>" I am just testing"]);
})->name('about');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/user/{name}',function($name){
    return "I'm user".$name;
});

Route::get('/users/{name?}',function($name=null){
return $name;
})->name('users');

Route::get('calc/{firstInt}/{secondInt}',function($firstInt,$secondInt){
    return view('add',compact('firstInt','secondInt'));
})->name('add');

Route::get('/products',function(){

    $products=file_get_contents('https://fakestoreapi.com/products');
    $products=json_decode($products);
    $products=array_filter($products,fn($product)=>$product->price < 10);
    dd($products);
});
