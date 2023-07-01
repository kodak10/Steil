<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marque>
 */
class MarqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $lien = [
            'https://www.couderc-materiels.fr/wp-content/uploads/2021/01/logo-JCB.png ',
            'https://logos-marques.com/wp-content/uploads/2021/02/Mitsubishi-Logo.png',
            'https://upload.wikimedia.org/wikipedia/fr/thumb/d/de/Mazda.svg/1200px-Mazda.svg.png',
            'https://assets.stickpng.com/images/580b57fcd9996e24bc43c4a3.png',
            'https://assets.stickpng.com/images/580b57fcd9996e24bc43c46e.png',
            'https://www.couderc-materiels.fr/wp-content/uploads/2021/01/logo-JCB.png',
            'https://news.via-mobilis.com/46898_1.jpg',
            'https://logo-marque.com/wp-content/uploads/2020/08/Caterpillar-Logo.png',

        ];
        return [
            'chemin' => $this->faker->unique()->randomElement($lien),
        ];



    }
}
