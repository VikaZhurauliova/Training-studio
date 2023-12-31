<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';

    protected $fillable = [

        'name',
        'description',
        'is_active',
        'image'
    ];

    public function reviews(): HasMany
    {
        return $this->hasMany(ClassReview::class);
    }

    public function averageReviews(): float
    {
        $reviews = $this->reviews;
        $averageStar = 0;

        /** @var ClassReview $review */
        foreach ($reviews as $review) {
            $averageStar += $review->star_count;
        }

        return (count($reviews) == 0) ? 0 : round($averageStar / count($reviews));
    }

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }

}
