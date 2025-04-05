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
            $table->string('tipo')->nullable();
            $table->string('modelo');
            $table->decimal('precio', 8, 2)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->string('catalogo')->nullable();
            $table->string('detalles')->nullable();
            // Campo para almacenar las imágenes de detalles (array de rutas)
            $table->json('detalles_imagenes')->nullable();
            // Nueva columna para la imagen de precio
            $table->string('imagen_precio')->nullable();
            $table->decimal('carga')->nullable();
            $table->decimal('motor')->nullable();
            $table->decimal('rendimiento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
