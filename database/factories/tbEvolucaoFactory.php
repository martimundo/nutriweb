<?php

namespace Database\Factories;

use App\Models\tbEvolucao;
use Illuminate\Database\Eloquent\Factories\Factory;

class tbEvolucaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tbEvolucao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dific_alimentar'=>$fake->sentence,
            'circ_cintura'=>$fake->random(10,2),
            'circ_quadril'=>$fake->random(10,2),
            'altura'=>$fake->random(10,2),
            'imc'=>$fake->random(10,2),
            'peso'=>$fake->random(10,2),
            'pref_alimentar'=>$fake->sentence,
            'intelorencia'=>$fake->sentence,
            'aversoes'=>$fake->sentence
        ];
    }
}
