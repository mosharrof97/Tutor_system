<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'tuitor_id',
        'tuition_id',
        'city_id',
        'subject_id',
        'day_id',
        'student_id',
        'social_id',
        'location_id',
        'class_id',
        'category_id',

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
}
