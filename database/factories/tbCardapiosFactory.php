<?php

namespace Database\Factories;

use App\Models\tbCardapios;
use Illuminate\Database\Eloquent\Factories\Factory;

class tbCardapiosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tbCardapios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'desc_cardapio'=>$faker->sentence
        ];
    }
}
