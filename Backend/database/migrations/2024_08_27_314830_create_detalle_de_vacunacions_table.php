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
        Schema::create('detalle_de_vacunacions', function (Blueprint $table) {
            $table->id();
            $table->string('lote_vacuna');
            $table->date('fecha_vacunacion');
            $table->date('proxima_vacuna');
            $table->string('nombre_del_profesional');
            $table->string('empresa');
            $table->string('observaciones');
            
            $table->unsignedBigInteger('id_mascotas');
            $table->foreign('id_mascotas')->references('id')->on('mascotas');

            $table->unsignedBigInteger('id_vacunas');
            $table->foreign('id_vacunas')->references('id')->on('vacunas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_de_vacunacions');
    }
};
