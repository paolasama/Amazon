<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// routes/web.php
Route::get('/', function () {
    return view('index');
});

Route::get('/post', function () {
    return view('index');
});

//get
//post
//put
//patch
//delete