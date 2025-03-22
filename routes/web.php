<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/blog/{id}', function(){
    return view('blog-page');
});