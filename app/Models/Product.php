<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent; // Extiende de Eloquent de MongoDB
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Eloquent // Usa Eloquent de MongoDB
{
    use HasFactory;

    protected $fillable = ['name', 'price']; // Define los campos rellenables

    // Si deseas especificar una colección personalizada, usa '$table' en lugar de '$collection'
    protected $table = 'products'; // Nombre de la colección en MongoDB
}
