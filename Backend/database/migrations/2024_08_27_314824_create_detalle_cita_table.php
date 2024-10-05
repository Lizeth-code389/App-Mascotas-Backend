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
        Schema::create('detalle_cita', function (Blueprint $table) {
            $table->id();
            $table->string('cuidados_administrar_medicamento');
            $table->string('recomendaciones_veterinario');
            $table->date('proximo_control');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_cita');
    }
};
