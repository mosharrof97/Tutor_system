<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apply extends Model
{
    use HasFactory;
    protected $fillable = [
        'tuitor_id',
        'user_id',
        'status',
    ];

    public function tuitor(): BelongsTo
    {
        return $this->belongsTo(Tuitor::class, 'tuitor_id','tuitor_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
