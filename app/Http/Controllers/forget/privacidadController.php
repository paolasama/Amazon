<?php

namespace App\Http\Controllers\forget;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class privacidadController extends Controller
{
    public function mostrar()
    {
        return view('forget.privacidad'); // Se asume que la vista está en resources/views/vender.blade.php
    }
}
