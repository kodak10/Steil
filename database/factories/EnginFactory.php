<?php

namespace Database\Factories;

use App\Models\CategorieEngin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Engin>
 */
class EnginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nbWords = 6;

        return [
            'nom' => $this->faker->unique()->sentence($nbWords),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum, nisi at aliquam finibus, elit dui tincidunt dui, a congue orci justo ut ligula. Maecenas vitae metus in massa consectetur fringilla.',
            'couverture' => 'https://via.placeholder.com/550x750',
        ];
    }
}
