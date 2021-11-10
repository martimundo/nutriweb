<?php

namespace Database\Factories;

use App\Models\tbEvolucoesSemanais;
use Illuminate\Database\Eloquent\Factories\Factory;

class tbEvolucoesSemanaisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tbEvolucoesSemanais::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'circ_cintura'=>$fake->random(10,2),
            'peso'=>$fake->random(10,2),
            'circ_quadril'=>$fake->random(10,2),
            'observ'=>$fake->sentence,                       
            
        ];
    }
}
