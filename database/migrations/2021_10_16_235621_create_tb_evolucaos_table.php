<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEvolucaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_evolucaos', function (Blueprint $table) {
            $table->increments('id_evolucoes');
            $table->string('dific_alimentar')->nullable();
            $table->decimal('circ_cintura', 10,2)->nullable();
            $table->decimal('circ_quadril', 10,2)->nullable();
            $table->integer('hipertensao')->nullable();
            $table->integer('diabete')->nullable();
            $table->decimal('altura', 10,2)->nullable();
            $table->decimal('imc', 10,2)->nullable();
            $table->decimal('peso', 10,0)->nullable();
            $table->string('pref_alimentar', 220)->nullable();
            $table->string('intelorencia',150)->nullable();
            $table->string('aversoes',150)->nullable();
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
        Schema::dropIfExists('tb_evolucaos');
    }
}
