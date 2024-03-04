<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPermisosTable extends Migration
{
    public function up()
    {
        Schema::create('rol_permisos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_rol');
            $table->uuid('id_permiso');
            $table->timestamps();

            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('id_permiso')->references('id')->on('permisos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rol_permisos');
    }
}
