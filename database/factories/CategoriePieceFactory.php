<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoriePiece>
 */
class CategoriePieceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $noms = [
            'Moteur et composants ',
            'Système de freinage',
            'Suspension et direction',
            'Système électrique',
            'Système de refroidissement',
        ];
        return [
            'nom' => $this->faker->unique()->randomElement($noms),
        ];
    }
}
