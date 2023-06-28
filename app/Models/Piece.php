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
        'nom',
        'description',
        'id_categories_pieces',
        'image',
    ];

    public function categoriePiece()
    {
        return $this->belongsTo(CategoriePiece::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
