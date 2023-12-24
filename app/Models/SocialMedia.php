<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SocialMedia extends Model
{
    use HasFactory;
    protected $primaryKey = 'social_id';
    protected $fillable = [
        'social_id',
        'social_name',
    ];

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'social_id');
    }
}
