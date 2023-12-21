<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_id',
        'category_name',
    ];

    public function studentClass(): HasMany
    {
        return $this->hasMany(StudentClass::class,'category_id');
    }

    
}
