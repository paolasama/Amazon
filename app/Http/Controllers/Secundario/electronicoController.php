<?php

namespace App\Http\Controllers\Secundario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class electronicoController extends Controller
{
    public function mostrar()
    {
        return view('secundario.electronico'); // Asegúrate de que la vista esté en resources/views/secundario/electronico.blade.php
    }
}

