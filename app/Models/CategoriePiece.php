<?php

namespace App\Models;

use App\Models\Piece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriePiece extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    public function pieces()
    {
        return $this->hasMany(Piece::class);
    }
}
