<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $maxNbChars = 150; // Nombre de caractères souhaité

        $noms = [
            'Kouadio Cedr ',
            'Système de freinage',
            'Suspension et direction',
            'Système électrique',
            'Système de refroidissement',
        ];
        return [
            'nom' => fake()->name(),
            'fonction' => fake()->jobTitle(),
            'message' => $this->faker->text($maxNbChars),
        ];
    }
}
