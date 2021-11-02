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
            $table->id();
            $table->decimal('circ_cintura', 10,2)->nullable();
            $table->decimal('peso', 10,2)->nullable();
            $table->decimal('circ_quadril', 10,2)->nullable();
            $table->text('observ');                       
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
