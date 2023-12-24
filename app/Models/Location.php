<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Location extends Model
{
    use HasFactory;
    protected $primaryKey = 'location_id';
    protected $fillable = [
        'location_id',
        'location_name',
        'city_id',
    ];

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'location_id');
    }
}
