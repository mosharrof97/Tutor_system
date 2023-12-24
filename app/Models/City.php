<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;
    protected $primaryKey = 'city_id';
    protected $fillable = [
        'city_id',
        'city_name',
    ];

    public function location():HasMany
    {
        return $this->hasMany(Location::class);
    }

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'city_id');
    }

}
