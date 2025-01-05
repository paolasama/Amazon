<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function accesorios()
    {
        return view('accesorios');
    }

        // Método para la página de videojuegos
        public function videojuegos()
        {
            return view('videojuegos');
        }
        // Método para la página de productos tecnológicos
        public function tecnologia()
        {
            return view('tecnologia');
        }
            // Método para la página de marcas favoritas
    public function marcas()
    {
        return view('marcas');
    }

        // Método para la página de juguetes
    public function juguetes()
    {
        return view('juguetes');
    }

        // Método para la página de ofertas por la semana del auto
        public function ofertasAuto()
        {
            return view('ofertas-auto');
        }
}
