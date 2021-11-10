<?php

namespace Database\Factories;

use App\Models\tbPacientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class tbPacientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tbPacientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=>$fake->name,
            'genero'=>$fake->name($gender = null|'male'|'female'),
            'email'=>$fake->email,
            'idade'=>$fake->age,
            
        ];
    }
}
