<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function index()
    {
        // Aquí puedes cargar datos desde la base de datos si es necesario
        return view('ofertas');
    }
}
