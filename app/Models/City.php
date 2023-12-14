<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'city_name',
    ];

    public function location()
    {
        return $this->hasMany(Location::class);
    }

}
