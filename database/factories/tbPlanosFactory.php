<?php

namespace Database\Factories;

use App\Models\tbPlanos;
use Illuminate\Database\Eloquent\Factories\Factory;

class tbPlanosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tbPlanos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'desc_plano'=>$faker->sentence
        ];
    }
}
