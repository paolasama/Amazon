<?php

// app/Http/Controllers/ComprasController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function mostrar()
    {
        // Aquí puedes devolver la vista que quieras, por ejemplo:
        return view('compra.index');
    }
}

