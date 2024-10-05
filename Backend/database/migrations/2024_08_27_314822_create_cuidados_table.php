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
        Schema::create('cuidados', function (Blueprint $table) {
            $table->id();
            $table->string('baño');
            $table->string('paseo');
            $table->string('juegos');
            $table->string('baño_corte_de_uñas');

            $table->unsignedBigInteger('id_mascotas');
            $table->foreign('id_mascotas')->references('id')->on('mascotas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidados');
    }
};
