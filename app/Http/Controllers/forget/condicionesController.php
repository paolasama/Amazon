<?php

namespace App\Http\Controllers\forget;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class condicionesController extends Controller
{
    public function mostrar()
    {
        return view('forget.condiciones'); // Se asume que la vista está en resources/views/vender.blade.php
    }
}
