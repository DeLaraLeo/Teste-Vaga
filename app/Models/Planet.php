<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dimension',
        'number_of_moons',
        'light_years_from_the_main_star',
        'solar_system_id'
    ];

    public function solar_systems()
    {
        return $this->belongsTo(SolarSystems::class);
    }
}
