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
        Schema::create('comida', function (Blueprint $table) {
            $table->id('id_comida');
            $table->string('nombre_comida', 100);
            $table->decimal('costo', 8, 2);
            $table->string('detalle_comida', 100);
            $table->enum('categoria', ['bebidas', 'postres', 'platillos fuertes', 'entradas', 'sopas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comida');
    }
};
