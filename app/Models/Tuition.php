<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tuition extends Model
{
    use HasFactory;
    protected $primaryKey = 'tuition_id';
    protected $fillable = [
        'tuition_id',
        'tuition_name',
    ];

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'tuition_id');
    }
}
