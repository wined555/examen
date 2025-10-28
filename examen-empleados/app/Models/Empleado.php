<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Campos que se pueden asignar con Request::all()
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'salario',
    ];
}