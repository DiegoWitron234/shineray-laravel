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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();      // Título o descripción del banner
            $table->string('imagen');                   // Ruta de la imagen del banner
            $table->string('link')->nullable();        // URL a la que redirige
            $table->integer('orden')->default(0);      // Para ordenar los banners
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banners');
    }
};
