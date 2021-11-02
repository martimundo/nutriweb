<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AltercolumnTbPlanosCardapiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_planos_cardapios', function (Blueprint $table) {
            
            $table->unsignedBigInteger('plano_id')->change();          
            $table->unsignedBigInteger('cardapio_id')->change();

            $table->foreign('plano_id')->references('id')->on('tb_planos');
            $table->foreign('cardapio_id')->references('id')->on('tb_cardapios');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
