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
        Schema::create('opcion_respuesta', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('puntuacion');
            $table->unsignedBigInteger('pregunta_id');

            $table->foreign('pregunta_id')->references('id')->on('pregunta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcion_respuesta');
    }
};
