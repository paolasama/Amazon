<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * Campos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'nombre',
        'email',
        'celular',
        'password',
    ];

    /**
     * Ocultar atributos en las serializaciones.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
