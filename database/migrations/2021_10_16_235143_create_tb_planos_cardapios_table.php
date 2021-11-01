<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPlanosCardapiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_planos_cardapios', function (Blueprint $table) {
            $table->increments('id_planos_cardapio');
          //  $table->foreign('planos_id')->references('id_planos')->on('tb_planos');
            //$table->foreign('cardapio_id')->references('id_cardapios')->on('tb_cardapios');
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
        Schema::dropIfExists('tb_planos_cardapios');
    }
}
