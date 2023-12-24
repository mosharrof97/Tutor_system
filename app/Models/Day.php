<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Day extends Model
{
    use HasFactory;
    protected $primaryKey = 'day_id';
    protected $fillable = [
        'day_id',
        'day_name',
    ];

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'day_id');
    }
}
