<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegosController extends Controller
{
    public function index()
    {
        // Retorna la vista de juegos
        return view('juegos');
    }
}
