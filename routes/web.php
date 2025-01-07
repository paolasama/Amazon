<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ControladorAuth;
use App\Http\Controllers\forget\condicionesController;
use App\Http\Controllers\forget\privacidadController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\Secundario\amazonbasicsController;
use App\Http\Controllers\Secundario\electronicoController;
use App\Http\Controllers\Secundario\hogarController;
use App\Http\Controllers\Secundario\lonuevoController;
use App\Http\Controllers\Secundario\masregaladoController;
use App\Http\Controllers\Secundario\MasvendidosController;
use App\Http\Controllers\Secundario\musicaController;
use App\Http\Controllers\Secundario\outletController;
use App\Http\Controllers\Secundario\promocionController;
use App\Http\Controllers\Secundario\servicioclienteController;
use App\Http\Controllers\Secundario\VenderController;
use App\Http\Controllers\Secundario\videojuegoController;

//los botones de la barra principal

Route::get('/carrito', [ComprasController::class, 'mostrar'])->name('carrito');

Route::get('/perdidos', [PedidosController::class, 'mostrar'])->name('perdidos');

//los botones de la barra secundario
Route::get('/amazonbasics', [amazonbasicsController::class, 'mostrar'])->name('amazonbasics');
Route::get('/electronico', [electronicoController::class, 'mostrar'])->name('electronico');
Route::get('/hogar', [hogarController::class, 'mostrar'])->name('hogar');
Route::get('/lonuevo', [lonuevoController::class, 'mostrar'])->name('lonuevo');
Route::get('/masregalado', [masregaladoController::class, 'mostrar'])->name('masregalado');
Route::get('/masvendidos', [MasvendidosController::class, 'mostrar'])->name('masvendidos');
Route::get('/musica', [musicaController::class, 'mostrar'])->name('musica');
Route::get('/outlet', [outletController::class, 'mostrar'])->name('outlet');
Route::get('/promocion', [promocionController::class, 'mostrar'])->name('promocion');
Route::get('/serviciocliente', [servicioclienteController::class, 'mostrar'])->name('serviciocliente');
Route::get('/vender', [VenderController::class, 'mostrar'])->name('vender');
Route::get('/videojuego', [videojuegoController::class, 'mostrar'])->name('videojuego');


//pagina de inicio
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/search', [SearchController::class, 'index'])->name('search');

//login
Route::get('/login', [ControladorAuth::class, 'showLoginForm'])->name('login');
Route::post('/login', [ControladorAuth::class, 'login']);
Route::post('/logout', [ControladorAuth::class, 'logout'])->name('logout');

// registro
Route::get('/register', [ControladorAuth::class, 'showRegisterForm'])->name('register');
Route::post('/register', [ControladorAuth::class, 'register']);


//forget
Route::get('/condiciones', [condicionesController::class, 'mostrar'])->name('condiciones');
Route::get('/privacidad', [privacidadController::class, 'mostrar'])->name('privacidad');

//las api de compras
// routes/web.php


Route::get('/compra', [ComprasController::class, 'mostrar'])->name('compra');



//ver mas
use App\Http\Controllers\OfertasController;

Route::get('/ofertas', [OfertasController::class, 'index'])->name('ofertas');



Route::post('/agregar-al-carrito', [ComprasController::class, 'agregarAlCarrito'])->name('agregar.carrito');


// Ruta para la página de accesorios
Route::get('/accesorios', [HomeController::class, 'accesorios']);

// Ruta para la página de videojuegos
Route::get('/videojuegos', [HomeController::class, 'videojuegos']);

// Ruta para la página de productos tecnológicos
Route::get('/tecnologia', [HomeController::class, 'tecnologia']);

// Ruta para la página de marcas favoritas
Route::get('/marcas', [HomeController::class, 'marcas']);

// Ruta para la página de juguetes
Route::get('/juguetes', [HomeController::class, 'juguetes']);

// Ruta para la página de ofertas por la semana del auto
Route::get('/ofertas-auto', [HomeController::class, 'ofertasAuto']);





// Autenticación
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Mis listas
Route::get('/crear-lista-deseos', function () {
    return view('listas.crear-lista-deseos');
})->name('crear-lista-deseos');

Route::get('/lista-bodas', function () {
    return view('listas.lista-bodas');
})->name('lista-bodas');

Route::get('/lista-nacimiento', function () {
    return view('listas.lista-nacimiento');
})->name('lista-nacimiento');

// Mi cuenta
Route::get('/mi-cuenta', function () {
    return view('cuenta.mi-cuenta');
})->name('mi-cuenta');

Route::get('/mis-pedidos', function () {
    return view('cuenta.mis-pedidos');
})->name('mis-pedidos');

Route::get('/cuenta-vendedor', function () {
    return view('cuenta.cuenta-vendedor');
})->name('cuenta-vendedor');

Route::get('/mi-lista-deseos', function () {
    return view('cuenta.mi-lista-deseos');
})->name('mi-lista-deseos');

Route::get('/mis-recomendaciones', function () {
    return view('cuenta.mis-recomendaciones');
})->name('mis-recomendaciones');

Route::get('/suscripcion-prime', function () {
    return view('cuenta.suscripcion-prime');
})->name('suscripcion-prime');