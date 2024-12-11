<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('curp')->unique();
            $table->date('fecha_nacimiento'); 
            $table->string('lugar_nacimiento'); 
            $table->string('genero'); 
            $table->string('cp'); 
            $table->string('estado');
            $table->string('colonia');
            $table->string('calle'); 
            $table->string('num_exterior')->nullable(); 
            $table->string('num_interior')->nullable(); 
            $table->string('celular')->nullable();  
            $table->string('telefono')->nullable();
            $table->string('correo')->unique(); 
            $table->string('clave_elector')->unique(); 
            $table->string('seccion')->nullable();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudadanos');
    }
};
