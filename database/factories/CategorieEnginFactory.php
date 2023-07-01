<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategorieEngin>
 */
class CategorieEnginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $noms = [
            'Automobiles ',
            'Camions',
            'Motocyclettes',
            'Engins agricoles',
            'Engins ferroviaires',
        ];
        return [
            'nom' => $this->faker->unique()->randomElement($noms),
        ];
    }
}
