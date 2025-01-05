<?php

// app/Http/Controllers/ComprasController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function mostrar()
    {
        // Aquí puedes devolver la vista que quieras, por ejemplo:
        return view('carrito');
    }
    public function agregarAlCarrito(Request $request)
{
    // Validar que los datos estén presentes
    $request->validate([
        'nombre' => 'required|string',
        'precio' => 'required|numeric',
    ]);

    // Obtener los datos del producto
    $producto = [
        'nombre' => $request->input('nombre'),
        'precio' => $request->input('precio')
    ];

    // Obtener el carrito de la sesión
    $carrito = session()->get('carrito', []);

    // Agregar el producto al carrito
    $carrito[] = $producto;

    // Guardar el carrito en la sesión
    session()->put('carrito', $carrito);

    // Redirigir al carrito
    return redirect()->route('carrito');
}

}

