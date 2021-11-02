<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTbPlanosCardapiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_planos_cardapios',function(Blueprint $table){

            $table->renameColumn('plano_cardapio_id', 'plano_id');
            $table->renameColumn('cardapio_plano_id', 'cardapio_id');           
            
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
