<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisationCategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    public function realisations()
    {
        return $this->hasMany(Realisation::class);
    }
}
