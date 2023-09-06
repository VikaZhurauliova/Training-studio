<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassReview extends Model
{
    use HasFactory;

    protected $table = 'class_reviews';

    protected $fillable = [

        'image',
        'is_active',
        'text',
        'star_count',
        'classes_id',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function classes(): BelongsTo
    {
        return $this->belongsTo(Classes::class);
    }
}
