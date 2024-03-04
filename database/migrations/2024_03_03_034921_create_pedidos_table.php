<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('codigo')->unique();
            $table->uuid('id_usuario_solicitante');

            $table->foreign('id_usuario_solicitante')->references('id')->on('usuarios');

            $table->date('fecha_solicitud');
            $table->decimal('monto_total', 10, 2);
            $table->date('fecha_entrega')->nullable();
            $table->uuid('id_usuario_entrega')->nullable();
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
        Schema::dropIfExists('pedidos');
    }
}
