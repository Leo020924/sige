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
        Schema::create('votantes', function (Blueprint $table) {
            $table->id();
            $table->string('curp',18);
            $table->string('nombre',100);
            $table->string('paterno',100);
            $table->string('materno',100);
            $table->string('estado_nacimiento',100);
            $table->date('fecha_nacimiento',100);
            $table->string('genero');
            $table->string('clave_elector',100)->nullable();
            $table->string('vigencia_ine',100)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('correo',100);
            $table->string('cp',5);
            $table->string('colonia',200);
            $table->string('calle',50);
            $table->string('externo',10);
            $table->string('interno',10);
            $table->string('seccion',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votantes');
    }
};
