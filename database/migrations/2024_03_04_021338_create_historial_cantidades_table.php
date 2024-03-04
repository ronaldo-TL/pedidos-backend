<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialCantidadesTable extends Migration
{
    public function up()
    {
        Schema::create('historial_cantidades', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_producto');
            $table->string('tipo');
            $table->string('descripcion')->nullable();
            $table->unsignedInteger('cantidad');
            $table->timestamps();

            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_cantidades');
    }
}
