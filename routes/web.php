<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\ComprasController;

Route::get('/carrito', [ComprasController::class, 'mostrar']);


Route::get('/', [Homecontroller::class, 'index']);

Route::get('/search', [SearchController::class, 'index'])->name('search');

