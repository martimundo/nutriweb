<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEvolucoesSemanaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_evolucoes_semanais', function (Blueprint $table) {
            $table->increments('id_evolsem');
            $table->decimal('circ_cintura', 10,2)->nullable();
            $table->decimal('peso', 10,2)->nullable();
            $table->decimal('circ_quadril', 10,2)->nullable();
            $table->text('observ');
            $table->integer('status');
            //$table->foreign('id_paciente')->references('id_paciente')->on('tb_pacientes');
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
        Schema::dropIfExists('tb_evolucoes_semanais');
    }
}
