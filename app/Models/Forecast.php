<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city',
        'country',
        'localtime',
        'temp_c',
        'humidity',
        'cloud',
        'pressure_mb',
        'gust_kph',
        'vis_km',
        'wind_kph',
    ];
}
