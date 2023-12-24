<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'student_id',
        'nb_of_student',
        
    ];

    public function tuitor(): HasMany
    {
        return $this->hasMany(Tuitor::class,'student_id');
    }
}
