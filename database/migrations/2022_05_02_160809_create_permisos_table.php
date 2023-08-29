<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('estado')->default(1);

            $table->unsignedBigInteger('idPerfil');

            $table->foreign('idPerfil')
                ->references('id')
                ->on('perfiles');

            $table->unsignedBigInteger('idModulo');

            $table->foreign('idModulo')
                ->references('id')
                ->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos');
    }
}
