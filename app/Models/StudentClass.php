<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentClass extends Model
{
    use HasFactory;
    protected $primaryKey = 'class_id';
    protected $fillable = [
        'class_id',
        'class_name',
        'category_id',
   
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subject(): HasMany
    {
        return $this->hasMany(Subject::class,'class_id');
    }

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'class_id');
    }

}
