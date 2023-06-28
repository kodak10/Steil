<?php

namespace App\Models;

use App\Models\Engin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorieEngin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function engins()
    {
        return $this->hasMany(Engin::class);
    }
}
