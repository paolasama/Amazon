<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function descubreTuEstilo()
    {
        return view('listas.descubre-tu-estilo');
    }

    public function explorarShowroom()
    {
        return view('listas.explorar-showroom');
    }
}
