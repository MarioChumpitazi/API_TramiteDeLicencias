<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('fechaEmision');
            $table->dateTime('fechaVencimiento');
            $table->string('categoria');
            $table->string('proceso');
            $table->boolean('estado')->default(1);

            $table->unsignedBigInteger('idTramite');

            $table->foreign('idTramite')
                ->references('id')
                ->on('tramites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
