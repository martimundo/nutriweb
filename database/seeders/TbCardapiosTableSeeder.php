<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TbCardapiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\tbCardapios::class, 30)->create();
    }
}
