<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_id',
        'location_name',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
