<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
    protected $primaryKey = 'subject_id';
    protected $fillable = [
        'subject_id',
        'subject_name',
        'class_id',
    ];

    public function studentClass(): BelongsTo
    {
        return $this->belongsTo(StudentClass::class, 'class_id');
    }

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'subject_id');
    }
}
