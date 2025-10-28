<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmpleadoSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('empleados')->insert([
            ['nombre' => 'Ana', 'apellido' => 'García', 'correo' => 'ana.g@empresa.com', 'salario' => 35000.00, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Luis', 'apellido' => 'Martínez', 'correo' => 'luis.m@empresa.com', 'salario' => 42000.50, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Sofía', 'apellido' => 'López', 'correo' => 'sofia.l@empresa.com', 'salario' => 55000.75, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Carlos', 'apellido' => 'Sánchez', 'correo' => 'carlos.s@empresa.com', 'salario' => 38000.00, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Elena', 'apellido' => 'Ramírez', 'correo' => 'elena.r@empresa.com', 'salario' => 48000.25, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'David', 'apellido' => 'Flores', 'correo' => 'david.f@empresa.com', 'salario' => 60000.00, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Marta', 'apellido' => 'Hernández', 'correo' => 'marta.h@empresa.com', 'salario' => 32000.00, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Javier', 'apellido' => 'Díaz', 'correo' => 'javier.d@empresa.com', 'salario' => 51000.90, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Laura', 'apellido' => 'Pérez', 'correo' => 'laura.p@empresa.com', 'salario' => 44000.00, 'created_at' => $now, 'updated_at' => $now],
            ['nombre' => 'Miguel', 'apellido' => 'Ruiz', 'correo' => 'miguel.r@empresa.com', 'salario' => 58000.30, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}