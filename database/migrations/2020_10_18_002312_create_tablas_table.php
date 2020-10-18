<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('femenino');
            $table->text('masculino');
            $table->text('ambos');
            $table->text('otro');
            $table->text('encarnacion');
            $table->text('cambyreta');
            $table->text('coronel_bogado');
            $table->text('capitan_mirando');
            $table->text('positivo');
            $table->text('negativo');
            $table->text('recuperado');
            $table->text('fallecido');
            $table->text('inconcluso');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tablas');
    }
}
