<?php

namespace App\Models;

use App\Models\Image;
use App\Models\CategorieEngin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Engin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'categorie_engin_id',
        'couverture',

    ];

    public function categorieEngin()
    {
        return $this->belongsTo(CategorieEngin::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }



    public function getFirstImage()
    {
        return $this->images->first();
    }
}
