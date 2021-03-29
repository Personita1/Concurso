<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concursante extends Model
{
    //
    protected $fillable = [
        'nombre', 'documento', 'ciudad', 'correo','celular',
    ];
}