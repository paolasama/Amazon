<?php

namespace App\Http\Controllers\Secundario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Asegúrate de incluir este uso si estás extendiendo desde Controller.

class lonuevoController extends Controller
{
    public function mostrar()
    {
        return view('secundario.lonuevo'); // Se asume que la vista está en resources/views/vender.blade.php
    }
}
