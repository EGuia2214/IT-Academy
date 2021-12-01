<?php

//Creado solo a efectos de testing
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

class TeamFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_name' => $this->faker->name(),
            'stadium' => $this->faker->name(),
            'foundation_year' => $this->faker->year(),
            'city' => $this->faker->name(),
            'created_at' => now(),


            //
        ];
    }
}
