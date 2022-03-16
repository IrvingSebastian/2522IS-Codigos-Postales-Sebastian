<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codigos extends Model
{
    //Referenciar a la tabla Codigos (creada con el ejercicio pasado)
    protected $table = 'codigos';
    use HasFactory;
}
