<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->boolean('subreceta')->nullable();
            $table->string('estacion')->nullable();
            $table->string('destino')->nullable();
            $table->string('ingrediente');
            $table->string('cantidad');
            $table->string('medida');
            $table->string('descripcion');
            $table->string('rcantidad');
            $table->string('rmedida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}
