<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id(); // id (PK, AI) [cite: 12]
            $table->string('nombre'); // string, requerido [cite: 13]
            $table->string('apellido'); // string, requerido [cite: 14]
            $table->string('correo')->unique(); // string, único, requerido [cite: 15]
            $table->decimal('salario', 10, 2); // decimal(10,2), requerido [cite: 15]
            $table->timestamps(); // timestamps [cite: 15]
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};