<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('modelo');
            $table->decimal('precio', 8, 2);
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable(); // Podrías guardar el path
            $table->decimal('carga');
            $table->decimal('motor');
            $table->decimal('rendimiento');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
