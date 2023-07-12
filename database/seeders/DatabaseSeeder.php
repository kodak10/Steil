<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Engin;
use App\Models\Image;
use App\Models\Marque;
use App\Models\testimonial;
use App\Models\CategorieEngin;
use App\Models\CategoriePiece;
use App\Models\Piece;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        testimonial::factory()->count(8)->create();
        Marque::factory()->count(8)->create();
        Engin::factory()->count(10)->create();
        //Piece::factory()->count(20)->create();








    }
}
