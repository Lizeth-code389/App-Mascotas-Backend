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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_de_la_cita');
            $table->date('fecha');
            $table->string('hora');
            $table->timestamps();

            $table->unsignedBigInteger('id_mascotas');
            $table->foreign('id_mascotas')->references('id')->on('mascotas');

            $table->unsignedBigInteger('id_veterinarios');
            $table->foreign('id_veterinarios')->references('id')->on('veterinarios');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas__medicas');
    }
};
