<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piece>
 */
class PieceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marques = ['Moteur', 'Pieces_detachees'];

        return [
            'categorie_pieces' => $this->faker->randomElement($marques),
            'reference' => $this->faker->swiftBicNumber(),
            'nom' => $this->faker->unique()->sentence($nbWords=12),
            'image' => 'https://via.placeholder.com/550x750',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.',
        ];
    }
}
