<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dimension',
        'number_of_planets',
        'main_star',
        'galaxies_id'
    ];

    public function galaxy()
    {
        return $this->belongsTo(Galaxy::class);
    }

    
}
