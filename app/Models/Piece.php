<?php

namespace App\Models;

use App\Models\Image;
use App\Models\CategoriePiece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Piece extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'nom',
        'description',
        'categorie_pieces',
        'couverture',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
