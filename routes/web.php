<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ControladorAuth;


Route::get('/carrito', [ComprasController::class, 'mostrar']);

Route::get('/', [Homecontroller::class, 'index']);

Route::get('/search', [SearchController::class, 'index'])->name('search');

//login
Route::get('/login', [ControladorAuth::class, 'showLoginForm'])->name('login');
Route::post('/login', [ControladorAuth::class, 'login']);
Route::post('/logout', [ControladorAuth::class, 'logout'])->name('logout');

// registro
Route::get('/register', [ControladorAuth::class, 'showRegisterForm'])->name('register');
Route::post('/register', [ControladorAuth::class, 'register']);


