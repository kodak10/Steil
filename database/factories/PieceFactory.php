<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'nom' => $this->faker->unique()->sentence($nbWords=6),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum, nisi at aliquam finibus, elit dui tincidunt dui, a congue orci justo ut ligula. Maecenas vitae metus in massa consectetur fringilla.',
            'couverture' => 'https://via.placeholder.com/550x750',
            'categorie_piece_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
