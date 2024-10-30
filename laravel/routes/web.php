<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\postController;

// routes/web.php
Route::get('/',[IndexController::class, 'index'] );

Route::get('/post', [PostController::class, 'index'] );


Route::get('/post/{post}', function ($post) {
    return view('index');
});

//get
//post
//put
//patch
//delete