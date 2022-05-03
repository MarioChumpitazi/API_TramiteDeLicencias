<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('hora',6);
            $table->string('dia',15);
            $table->string('mes',15);
            $table->string('codigoPago',50);     
            $table->boolean('estado')->default(1);

            $table->unsignedBigInteger('idCliente');

            $table->foreign('idCliente')
                ->references('id')
                ->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
