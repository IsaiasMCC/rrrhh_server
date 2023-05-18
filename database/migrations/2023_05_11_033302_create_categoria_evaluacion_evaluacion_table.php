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
        Schema::create('categoria_evaluacion_evaluacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_evaluacion_id');
            $table->unsignedBigInteger('evaluacion_id');

            $table->foreign('categoria_evaluacion_id')->references('id')->on('categoria_evaluacion');
            $table->foreign('evaluacion_id')->references('id')->on('evaluacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_evaluacion_evaluacion');
    }
};
