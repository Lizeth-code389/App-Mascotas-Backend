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
        Schema::create('medicamentos_enviados', function (Blueprint $table) {
            $table->id();
            $table->string('dosis');
            $table->string('dias_tratamiento');
            $table->string('efectos_adversos');
            $table->string('via_de_administracion');
            $table->string('observacion');

            $table->unsignedBigInteger('id_citas');
            $table->foreign('id_citas')->references('id')->on('citas');

            $table->unsignedBigInteger('id_medicamentos');
            $table->foreign('id_medicamentos')->references('id')->on('medicamentos');

    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos_enviados');
    }
};
