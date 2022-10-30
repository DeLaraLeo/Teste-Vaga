<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galaxy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dimension',
        'number_of_solar_systems',
        'userId',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
