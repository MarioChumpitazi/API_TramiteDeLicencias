<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->string('dni',9)->unique();
            $table->enum('sexo',['Masculino','Femenino']);
            $table->integer('edad')->length(2);
            $table->integer('telefono')->length(15);;
            $table->boolean('estado')->default(1);

            // AGREGADO
            $table->integer('tipo_cliente')->default(1);
            // 

            $table->unsignedBigInteger('idPerfil');

            $table->foreign('idPerfil')
                ->references('id')
                ->on('perfils');

                $table->unsignedBigInteger('idDepartamento');

                $table->foreign('idDepartamento')
                    ->references('id')
                    ->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
