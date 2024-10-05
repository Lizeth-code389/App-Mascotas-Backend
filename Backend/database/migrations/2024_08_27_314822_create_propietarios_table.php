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
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo_electronico');
            $table->string('torre');
            $table->string('apartamento');
            $table->unsignedBigInteger('id_barrios');
            $table->foreign('id_barrios')->references('id')->on('barrios');

            $table->unsignedBigInteger('id_mascotas');
            $table->foreign('id_mascotas')->references('id')->on('mascotas');
            /*$table->timestamps();*/


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propietarios');
    }
};
