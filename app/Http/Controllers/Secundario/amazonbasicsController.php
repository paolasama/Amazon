<?php

namespace App\Http\Controllers\Secundario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Asegúrate de incluir este uso si estás extendiendo desde Controller.

class amazonbasicsController extends Controller
{
    public function mostrar()
    {
        return view('secundario.amazonbasics'); // Se asume que la vista está en resources/views/vender.blade.php
    }
}
