<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',200);
            $table->string('genero', 50);
            $table->string('email', 200);
            $table->string('idade', 3);
           // $table->foreign('acessos_id')->references('id_acessos')->on('tb_acessos');
           // $table->foreign('nutri_id')->references('id_nutri')->on('tb_nutricionistas');
           // $table->foreign('evolucao_id')->references('id_evolucoes')->on('tb_evolucoes');
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
        Schema::dropIfExists('tb_pacientes');
    }
}
