<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('cargo',50);
            $table->string('email',255)->unique();
            $table->string('contraseña',255);
            $table->string('DNI',9)->unique();
            $table->enum('sexo',['Masculino','Femenino']);
            $table->integer('edad')->length(2);
            $table->integer('telefono')->length(15);;
            $table->boolean('estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
