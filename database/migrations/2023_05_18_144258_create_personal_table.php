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
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('apellidos');
            $table->date('fecha_nacimiento');
            $table->bigInteger('ci');
            $table->text('domicilio');
            $table->text('zona');
            $table->bigInteger('telefono');
            $table->bigInteger('telefono_referencia');
            $table->text('correo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal');
    }
};
