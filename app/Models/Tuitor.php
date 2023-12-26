<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tuitor extends Model
{
    use HasFactory;
    protected $primaryKey = 'tuitor_id';
    protected $fillable = [
        'tuitor_id',
        'user_id',
        'tuition_id',
        'city_id',
        'location_id',
        'day_id',
        'category_id',
        'class_id',
        'subject_id',
        'student_id',
        'social_id',

        'student_gender',
        'tuitor_gender',
        'address',
        'institute_name',
        'tuition_time',
        'salary',
        'more_about',
        'hire_date',
        'status',
    ];

    public function apply(): HasMany
    {
        return $this->hasMany(Apply::class, 'tuitor_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tuition(): BelongsTo
    {
        return $this->belongsTo(Tuition::class, 'tuition_id');
    }
    
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function day(): BelongsTo
    {
        return $this->belongsTo(Day::class, 'day_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function studentClass(): BelongsTo
    {
        return $this->belongsTo(StudentClass::class, 'class_id');
    }
    
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    
    public function social(): BelongsTo
    {
        return $this->belongsTo(SocialMedia::class, 'social_id');
    }
    
}
