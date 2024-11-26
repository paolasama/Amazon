<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SearchController;

Route::get('/', [Homecontroller::class, 'index']);

Route::get('/search', [SearchController::class, 'index'])->name('search');

