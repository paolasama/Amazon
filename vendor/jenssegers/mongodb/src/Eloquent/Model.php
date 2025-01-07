<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $table = 'products'; // Usa $table en lugar de $collection

    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}


