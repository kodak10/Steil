<?php

namespace App\Models;

use App\Models\Engin;
use App\Models\Piece;
use App\Models\Realisation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'engin_id',
        'pieces_id',
        'chemin',
    ];

    public function engin()
    {
        return $this->belongsTo(Engin::class);
    }

    public function piece()
    {
        return $this->belongsTo(Piece::class);
    }

    public function realisation()
    {
        return $this->belongsTo(Realisation::class);
    }
}
