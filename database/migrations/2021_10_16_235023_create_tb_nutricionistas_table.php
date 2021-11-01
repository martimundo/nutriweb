<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNutricionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_nutricionistas', function (Blueprint $table) {
            $table->increments('id_nutri');
            $table->string('crn')->unique();
            $table->string('nome');
            //$table->foreign('acesso_id')->references('id_acesso')->on('tb_acessos');
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
        Schema::dropIfExists('tb_nutricionistas');
    }
}
