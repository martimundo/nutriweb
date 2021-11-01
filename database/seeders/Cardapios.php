<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class Cardapios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Tb_Cardapio::class, 30)->create();
    }
}
