<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTbPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_pacientes',function(Blueprint $table){

            $table->foreignId('nutri_id')->constrained('tb_nutricionistas');
            $table->foreignId('evolseman_id')->constrained('tb_evolucoes_semanais');
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
