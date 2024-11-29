<?php

namespace App\Http\Controllers\Secundario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasvendidosController extends Controller
{
    public function mostrar()
        {
            return view('secundario.masvendidos');
        }
}
