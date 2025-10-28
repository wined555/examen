<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    // GET /api/empleados (Listar empleados) [cite: 18, 20]
    public function index()
    {
        return response()->json(Empleado::all(), 200);
    }

    // POST /api/empleados (Crear empleado con validaciones) [cite: 19, 21]
    public function store(Request $request)
    {
        // Validaciones según el examen
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:empleados,correo', // único en tabla empleados
            'salario' => 'required|numeric|min:0.01|max:999999.99', // decimal(10,2)
        ]);

        $empleado = Empleado::create($request->all());
        return response()->json($empleado, 201); // 201 Created
    }
}