<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagaire>
 */
class StagaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_complet' =>$this->faker->name(),
            'genre' =>$this->faker->randomElement(['F' , 'M']),
            'date_naissance' =>$this->faker->date(),
            'note' =>$this->faker->floatval(),
            'groupe_id ' =>$this->faker->randomElement([7 , 9 , 10 , 11 , 12 , 13 , 14 , 15 , 16 , 17 , 18 , 19 , 20 , 21 , 22 , 23]),
        ];
    }
}
