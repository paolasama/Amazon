<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity'];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

