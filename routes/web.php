<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route parameter
Route::get('/user/{id}/{slug}',function($slug,$po){
      return "Hii,Your id is " . $slug.",".$po;
});

Route::get('/user/contact/{id}/{slug}',function($po,$pi){
     return "Hii contact me on this id " . $po . " and slug is " . $pi;
})->name('contact.me');

Route::get('/user/example/{id}',function($pi){
    return "this  is a example id " . $pi;
})->name('example');

Route::group(['prefix'=>'blog','as'=>'blog.'],function(){
    Route::get('/create',function(){
        return "This is a route for the create";
    })->name('create');
    Route::get('.update',function(){
       return "This is a route for the update";
    })->name('update');
});

Route::fallback(function(){
    return "Sorry Page Not Found";
});