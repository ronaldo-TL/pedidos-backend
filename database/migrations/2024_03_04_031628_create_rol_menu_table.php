<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolMenuTable extends Migration
{
    public function up()
    {
        Schema::create('rol_menu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_rol');
            $table->uuid('id_menu');

            $table->timestamps();

            // Claves foráneas
            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('id_menu')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rol_menu');
    }
}
