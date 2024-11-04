<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);


Route::get('/post', [PostController::class, 'index'] );


Route::get('/post/{post}', function ($post) {
    return view('index');
});

//get
//post
//put
//patch
//delete